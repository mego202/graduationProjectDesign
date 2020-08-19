<!doctype html>
<?php
session_start();
include 'connect.php';
//include 'navbar.php';

if(!isset($_SESSION['username']))
{
    header('location:login.php');
}

?>


<!doctype html>
<html lang="en">
  <head>

    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="./images/loc.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href='./css/bootstrap.min.css'>
    <link rel='stylesheet' href="./css/style.css">
    <link rel="stylesheet" href="./css/all.min.css">

          <link rel="stylesheet" href="https://js.arcgis.com/4.14/esri/themes/light/main.css">
        <script src="https://js.arcgis.com/4.14/"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
        <style> 
            html, body, #viewDiv {
                padding: 0;
                margin: 0;
                height: 100%;
                width: 100%;
            }
                /* ADD */
            .esri-view .esri-directions {
                position: fixed;
                right: 400px;
            }
            .esri-view .esri-component.esri-attribution {
                position: fixed;
            }
        </style>

        <script>
            
            var userLat = 0 , userLng = 0; 
            window.onload = function(){


              if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
              }


              function showPosition(position) {
                // Append User Location To Variables For Calc Distances
                userLat = position.coords.latitude
                userLng = position.coords.longitude  
              }
            } 

          var Request;
          var ftrLayer;
          var mView;
          var webmap;
          var gephic_out;
          var wMap;
          var view;
          var resul = [];
            require([
                "esri/WebMap",
                "esri/views/MapView",
                 "esri/widgets/Directions",
                "esri/widgets/Legend",
                "esri/widgets/ScaleBar",
                "esri/widgets/Search",
                "esri/tasks/QueryTask",
                "esri/tasks/support/Query",
                "esri/request",
                "esri/layers/VectorTileLayer",
                "esri/layers/FeatureLayer",
                "esri/Graphic",
                "esri/geometry/support/webMercatorUtils",
            ], function(WebMap, MapView,Directions,  QueryTask, Query, Legend, ScaleBar, Search, esriRequest, VectorTileLayer, FeatureLayer, Graphic, webMercatorUtils) {
                

              gephic_out = Graphic;
              Request = esriRequest;
              ftrLayer = FeatureLayer;
             mView = MapView; 
              wMap = WebMap;
                //*** ADD ***//
                webmap = new WebMap({
                    //layers: [myPointsFeatureLayer],
                    portalItem: {
                      id:
                      "38dbc4a2d21040368ceeceea1d483551"
                    }
                }); 

                view = new MapView({
                    container: "viewDiv",
                    //*** UPDATE ***//
                    map: webmap,
                    //*** ADD ***//
                    //center: [-118.24532,34.05398],
                    zoom: 12,
                    padding: {
                        right: 320
                    }
                });
              
                var directions = new Directions({
                    view: view,
                  routeServiceUrl: "https://utility.arcgis.com/usrsvcs/appservices/63vHx2misMQiZjPb/rest/services/World/Route/NAServer/Route_World"
                });
        view.ui.add(directions, "top-right");
                
              view.on("click", function(event){
                //console.log(event.mapPoint)                
                //console.log(event.mapPoint)
                  //console.log(event.mapPoint.x + 'ffffffffffff');
                createGraphic(event.mapPoint.x, event.mapPoint.y);
                  
              });
                
      // Search Function
      function search(e){

        var rmDuplications;
        var lat=0 , lng=0;
        var arr = [] // For Store Distance Between User And All Hospitals
        var nearestPlaces = [] // For Output The Nearest Places
        let arrDist = []; // For Store Nearest Places
        // Store The User Selected Distance In Variable
        var selectedDistance = parseFloat(document.getElementById('dis').value),
              placeType = document.getElementById('type_selection').value,
              paysRange = parseInt(document.getElementById('myRangeP').value * 1000);
              
        var distance = [
          {id: 1,name: 'مستشفي_الحميات' , lat:30.473450 , lng: 31.180676 , pays : 2000 , type: 'عام'},
          {id: 2,name: 'مستشفي_الجامعة_ببنها' , lat:30.470471 , lng: 31.178709 , pays : 100 , type: 'عام'},
          {id: 3,name: 'مستشفي_بنها_التعليمي' , lat:30.466935 , lng: 31.185783 , pays : 500 , type: 'عام'},
          {id: 4,name: 'مستشفي_الاميري' , lat:30.466963 , lng: 31.185784 , pays : 800 , type: 'عام'},
          {id: 5,name: 'مستشفي_التأمين_الصحي' , lat:30.466692 , lng: 31.187788 , pays : 300 , type: 'عام'},
          {id: 6,name: 'مستشفي_الاطفال' , lat:30.466993 , lng: 31.186953 , pays : 600 , type: 'عام'},
          {id: 7,name: 'مستشفي_الجلدية' , lat:30.465926 , lng:31.187019 , pays : 900 , type: 'عام'},
          {id: 8,name: 'مستشفي_الصحة_النفسية' , lat:30.465441 , lng: 31.186924 , pays : 3000 , type: 'عام'},
          {id: 9,name: 'مستشفي_الكويتي' , lat:30.465830 , lng: 31.188212 , pays : 10000 , type: 'خاص'},
          {id: 10,name: 'مستشفي_الراعي_الصالح' , lat:30.463450 , lng: 31.180900 , pays : 3000 , type: 'خاص'},
          {id: 11,name: 'مركز_الهلال_الطبي' , lat:30.470755 , lng: 31.190256 , pays : 6000 , type: 'خاص'},
          {id: 12,name: 'مستشفي_الايمان_الخيري' , lat: 30.471020 , lng: 31.183917 , pays : 500 , type: 'خيري'}
        ]
        // Loop Through All Places For Calc Distance With This Law
        for(var x of distance){
 
          var radlat1 = Math.PI * userLat/180;
          var radlat2 = Math.PI * x.lat/180;
          var theta = userLng-x.lng;
          var radtheta = Math.PI * theta/180;
          var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
          if (dist > 1) {
            dist = 1;
          }
          dist = Math.acos(dist);
          dist = dist * 180/Math.PI;
          dist = dist * 60 * 1.1515;
          dist = dist * 1.609344 // km

          // Push Distance Between User And All Places And Place Name In Array
          arr.push({id : x.id,name: x.name , distance: dist , pays : x.pays , type : x.type})
        }
         
          
          for(var x of arr){
            // If Place Distnce In Range I Will Push It To The Nearest Places Array
            if(x.distance <= selectedDistance && x.pays <= paysRange && x.type == placeType){
                arrDist.push(x)
            }
          }
          
          if(arrDist.length > 0) {
            document.getElementById('nearest').innerHTML = ''
            //let count = 0;
            console.clear()
            
            for(var x of arrDist){
              var radlat1 = Math.PI * userLat/180;
                  var radlat2 = Math.PI * x.lat/180;
                  var theta = userLng-x.lng;
                  var radtheta = Math.PI * theta/180;
                  var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
                  if (dist > 1) {
                    dist = 1;
                  }
                  

                  dist = Math.acos(dist);
                  dist = dist * 180/Math.PI;
                  dist = dist * 60 * 1.1515;
                  dist = dist * 1.609344 // km
                  
              console.log(x.name)
              
              document.getElementById('nearest').innerHTML +=  "<a href='/GradBelalDash/final_project/HosSinglePage/index.php?ID=" + x.id + "' class='my-2' style='background: #141e40;display: block;padding: 7px;font-size: 17px;font-weight: bold;' target='_blank'>" + x.name + "</a>"

                            
            }

            // Send arrDist That Holds All Result Places To test.php for update the temp counter
            $.ajax({
                url: 'test.php',
                type: 'POST',
                data: {names: arrDist},
                success: function(data) {
                    console.log(data);
                }
            });

            document.getElementById('nearest').innerHTML += "<button id='closePlaces' style='all: unset;position: absolute;color: #FFF;font-size: 18px;right: 76%;top: 13px;background: #dc3545;width: 30px;height: 30px;text-align: center;border-radius: 50%;cursor: pointer'>&#10006;</button>";

                    document.getElementById('closePlaces').onclick = () => {
                      document.getElementById('nearest').innerHTML = '';
                    }
          }

        
          else {document.getElementById('nearest').innerHTML = '<p class="text-white m-0 text-danger">No Result Founded</p>'}

    }


              
              $("#draw").on('click',function(e){
                    
                search();
                resul.forEach(element => {
                //console.log("here loop")
                removeMark(webMercatorUtils.xyToLngLat(element.geometry.x, element.geometry.y)[1], 
                              webMercatorUtils.xyToLngLat(element.geometry.x, element.geometry.y)[0]);
              });

                
            var x = document.getElementsByClassName("text_ser")[0].value;
            var y = document.getElementById("type_selection").value;

            var url = "https://services5.arcgis.com/Byf6hxlQWVpMzQ6q/ArcGIS/rest/services/4layer/FeatureServer/0/query";

            Request(url, {
              responseType: "json",
              query: {
                f: "json",
                where: "pays <= "+x+"000 and type = '"+y+"'"
              }
            }).then(function(response){
              //console.log(response.data.features)
              resul = response.data.features;
              resul.forEach(element => {
                element.geometry.type = "polygon";
                  
              });
              //console.log("for loop")  
              console.log(resul)
              // Loop Through All Places For Calc Distance With This Law
              //for(var x of distance){
    
 
              //}
              resul.forEach(element => {
                var point = webMercatorUtils.xyToLngLat(element.geometry.x, element.geometry.y)
                
                
                console.log(point)
                var radlat1 = Math.PI * userLat/180;
                  var radlat2 = Math.PI * point[1]/180;
                  var theta = userLng-point[0];
                  var radtheta = Math.PI * theta/180;
                  var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
                  if (dist > 1) {
                    dist = 1;
                  }
                  

                  dist = Math.acos(dist);
                  dist = dist * 180/Math.PI;
                  dist = dist * 60 * 1.1515;
                  dist = dist * 1.609344 // km
                  
                  // Push Distance Between User And All Places And Place Name In Array
                  //arr.push({id : x.id,name: x.name , distance: dist , pays : x.pays , type : x.type})
                  var selectedDistance = parseInt(document.getElementById('dis').value);


                  if(dist <= selectedDistance){
                      //arrDist.push(x)

                      createGraphic(webMercatorUtils.xyToLngLat(element.geometry.x, element.geometry.y)[1], 
                webMercatorUtils.xyToLngLat(element.geometry.x, element.geometry.y)[0]);
                  }

              });

            });

 
                
              });
              
                
        function createGraphic(lat, long){
          // First create a point geometry 
          var point = {
            type: "point", // autocasts as new Point()
            longitude: long,
            latitude: lat
          };

          // Create a symbol for drawing the point
          var markerSymbol = {
            type: "simple-marker", // autocasts as new SimpleMarkerSymbol()
            color: [0, 0, 255]
          };

          // Create a graphic and add the geometry and symbol to it
          var pointGraphic = new Graphic({
            geometry: point,
            symbol: markerSymbol
          });

          // Add the graphics to the view's graphics layer
          view.graphics.add(pointGraphic);
        }
              
           
         function removeMark(lat, long){
          // First create a point geometry 
          var point = {
            type: "point", // autocasts as new Point()
            longitude: long,
            latitude: lat
          };

          // Create a symbol for drawing the point
          var markerSymbol = {
            type: "simple-marker", // autocasts as new SimpleMarkerSymbol()
            color: [226, 119, 40]
          };

          // Create a graphic and add the geometry and symbol to it
          var pointGraphic = new Graphic({
            geometry: point,
            symbol: markerSymbol
          });

          // Add the graphics to the view's graphics layer
          view.graphics.removeAll(pointGraphic);
        }
    
              /* var directions = new Directions({
                    view: view,
                  routeServiceUrl: "https://utility.arcgis.com/usrsvcs/appservices/2P6g039NSaWPtvcS/rest/services/World/Route/NAServer/Route_World"
                });
        view.ui.add(directions, "top-right");
        
        */

                //*** ADD ***//

                /*var scalebar = new ScaleBar({
                    view: view
                });
                view.ui.add(scalebar, "bottom-left");

                var searchWidget = new Search({
                    view: view
                });*/

                // Add the search widget to the top right corner of the view
                /*view.ui.add(searchWidget, {
                    position: "top-right"
                });

                var editorWidget = new Editor({
                    view: view
                });

                view.ui.add(editorWidget, "top-right");
                */

  

            })

        </script>
    <style>
      body{
        font-family: 'Baloo Thambi 2', cursive;
      }
    </style>
    <title>Find School</title>
  </head>
  <body>
<!-- Navbar        -->
<?php
    include 'navbar.php';  
    ?>
<!-- Select Criteria -->
<section class="search">
    <div class="menu-title d-flex pr-3">
        <h3 class="p-3 text-white mb-0">Select Cretirea</h3>

        <button class="menu-toggle border-0 text-center" id="toggle-cri">
            <span></span>
            <span class="my-1"></span>
            <span></span>
        </button>
    </div>
    <form onsubmit="event.preventDefault();" class="p-2">
      <label class="font-weight-bold text-white">Distance</label>
      <div class="slidecontainer">
        <input type="range" min="1" max="400" value="31.9" class="slider" id="dis">
        <div class="d-flex mt-3 align-items-center justify-content-between">
          <span class="text-white mr-2 d-block">Value</span>
          <p class="text-center font-weight-bold mb-0 px-2 w-50" id="demoDis" style="line-height: 40px; background-color: #FFF; color: #000; width: auto; height: 40px"></p>            
        </div>
      </div>

      <div class="my-3 d-flex justify-content-between align-items-center">
        <label class="font-weight-bold text-white mb-0">School Type</label>
        <select class="form-control w-50" id="type_selection">
          <option value="عام">Public</option>
          <option value="خاص">Private</option>
        </select>
      </div>

      <div>
        <label class="font-weight-bold text-white">Payes</label>
        <div class="slidecontainer">
            
          <input type="range" min="1" max="100" value="50"  class="slider text_ser" id="myRangeP">
            
          <div class="d-flex mt-3 align-items-center">
            <span class="text-white mr-2 d-block">Value</span>
            <p class="text-center font-weight-bold mb-0 px-2" id="demoP" style="line-height: 40px; background-color: #FFF; color: #000; width: auto; height: 40px"></p>            
          </div>
        </div>
      </div>
      <!--<button id="search">Search</button>-->
    </form>
    <div class="p-2">
        <button id="draw" class="btn px-3 py-2 text-white mt-3"  style="background-color: #007bff;">Find</button>
        
          <!--<form id='placesSub' method='GET' target="_blank"></form>-->

    </div>
    
    <div id="nearest" class="position-fixed w-100" style="bottom: 0; background-color: #0D1326;">
      
    </div>
  </section>
  <div id="viewDiv"  style="width:75%; height: calc(100vh - 65px);" ></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='./js/jquery-3.4.1.min.js'></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/schoolScript.js"></script>
    <script>
      var sliderP = document.getElementById("myRangeP");
      var outputP = document.getElementById("demoP");
      outputP.innerHTML = sliderP.value + 'K';

      sliderP.oninput = function() {
        outputP.innerHTML = this.value + 'K';
      }

      // Distance Range
      var slider = document.getElementById("dis");
      var output = document.getElementById("demoDis");
      output.innerHTML = slider.value + 'KM';

      slider.oninput = function() {
        output.innerHTML = this.value + 'KM';
      }
    </script>
  </body>
  





</html>