<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="./images/about.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href='./css/bootstrap.min.css'>
    <link rel='stylesheet' href="./css/style.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
</head>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">

window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		title:{
			text: "Hospitals Statistics"              
		},
		data: [              
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "doughnut",
			dataPoints: [
                <?php
                
                foreach ($row as $val)
                {
                    
                    echo "{ label: '".$val['name']."',  y: '".$val['count']."'  },";
                    
                    
                }
                
                ?>
				
			]
		}
		]
	});
    
    var chart1 = new CanvasJS.Chart("chartContainer2", {
		title:{
			text: "school Statistics"              
		},
		data: [              
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "doughnut",
			dataPoints: [
                <?php
                
                foreach ($ss as $val)
                {
                    
                    echo "{ label: '".$val['name']."',  y: '".$val['count']."'  },";
                    
                    
                }
                
                ?>
				
			]
		}
		]
	});
    
    
    
	chart.render();
    chart1.render();
}
</script>
<body>