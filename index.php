<?php
    session_start();
    include 'connect.php';
    include 'header.php';
    include 'navbar.php';

/*if(!isset($_SESSION['username']))
{
    header('location:login.php');   //redirect to dashboard
    echo "<div class='alert alert-danger'>you cant enter in this page</div>";
}*/
/*if($_SERVER['REQUEST_METHOD']=='POST')
      {
          $user=$_POST['Username'];
          $pass=$_POST['Password'];
          //$haspass=sha1($pass);
          $stmt=$con->prepare("select name,password from users where name=? and password=?");
          $stmt->execute(array($user,$pass));
          $row=$stmt->fetch();
          $count=$stmt->rowCount();
          if($count>0)
          {
              $_SESSION['user']=$user;
              
              header('location:index.php');
              exit();
          }
          
      }
else
{
    echo "<div class='alert alert-danger'>you cant enter in this page</div>";
}*/


?>

    <!-- School Modal -->
    <div class="modal fade" id="exampleModalschool" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="padding-bottom: 10px;">
                    <h2 class="modal-title" id="exampleModalLabel">What About School ? </h2>
                </div>
                <div class="modal-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste autem, voluptatibus quasi,
                    praesentium aliquid consectetur explicabo illo sit eaque adipisci ab, et corrupti. Autem perferendis
                    error, reiciendis enim rerum soluta. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste
                    autem, voluptatibus quasi, praesentium aliquid consectetur explicabo illo sit eaque adipisci ab, et
                    corrupti. Autem perferendis error, reiciendis enim rerum soluta.
                </div>
                <div class="modal-footer">
                    <button type="button" style="background-color: #007bff;" class="btn text-white"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
 <?php
      
      
      ?>
    <!-- Hospital Modal -->
    <div class="modal fade" id="exampleModalhospital" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">What About Hospitals ?</h2>
                </div>
                <div class="modal-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste autem, voluptatibus quasi,
                    praesentium aliquid consectetur explicabo illo sit eaque adipisci ab, et corrupti. Autem perferendis
                    error, reiciendis enim rerum soluta. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste
                    autem, voluptatibus quasi, praesentium aliquid consectetur explicabo illo sit eaque adipisci ab, et
                    corrupti. Autem perferendis error, reiciendis enim rerum soluta.
                </div>
                <div class="modal-footer">
                    <button type="button" style="background-color: #007bff;" class="btn text-white"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider -->
    <div class="carousel slide carousel-fade main-slider" id="carouselExampleFade" data-ride="carousel">
        <div class="slider-overlay">
            <canvas id="particles" class="position-absolute w-100 h-100"></canvas>
            <div class="carousel-caption d-none d-sm-block w-75">
                <p>Ready to Search – School, Hospitals Online</p>
                <h1>YOUR IDEAS WILL BE HEARD & SUPPORTED </h1>
                <button class="btn mt-4 mr-2 py-2 w-25" data-toggle="modal"
                    data-target="#exampleModalschool">SCHOOLS</button>
                <button class="btn mt-4 py-2 w-25" data-toggle="modal"
                    data-target="#exampleModalhospital">HOSPITALS</button>
            </div>
        </div>

        <div class="slider-overlay2">

        </div>


        <ul class="carousel-indicators w-50 m-0">
            <li class="active" data-target="#carouselExampleFade" data-slide-to="0"></li>
            <li data-target="#carouselExampleFade" data-slide-to="1"></li>
            <li data-target="#carouselExampleFade" data-slide-to="2"></li>
            <li data-target="#carouselExampleFade" data-slide-to="3"></li>
            <li data-target="#carouselExampleFade" data-slide-to="4"> </li>
            <li data-target="#carouselExampleFade" data-slide-to="5"></li>
            <li data-target="#carouselExampleFade" data-slide-to="6"></li>
            <li data-target="#carouselExampleFade" data-slide-to="7"> </li>
        </ul>

        <div class="carousel-inner h-100">
            <div class="carousel-item active h-100">
                <img class="w-100 d-block" src="images/Slider/schools/1.png" />
            </div>
            <div class="carousel-item h-100">
                <img class="w-100 d-block" src="images/Slider/schools/2.png" />
            </div>
            <div class="carousel-item h-100">
                <img class="w-100 d-block" src="images/Slider/schools/3.png" />
            </div>
            <div class="carousel-item h-100">
                <img class="w-100 d-block" src="images/Slider/schools/4.png" />
            </div>
            <div class="carousel-item h-100">
                <img class="w-100 d-block" src="images/Slider/hospitals/1.png" />
            </div>
            <div class="carousel-item h-100">
                <img class="w-100 d-block" src="images/Slider/hospitals/2.png" />
            </div>
            <div class="carousel-item h-100">
                <img class="w-100 d-block" src="images/Slider/hospitals/3.png" />
            </div>
            <div class="carousel-item h-100">
                <img class="w-100 d-block" src="images/Slider/hospitals/4.png" />
            </div>
        </div>
        <a class="carousel-control-prev slide-dir ml-3" href="#carouselExampleFade" data-slide="prev"><span
                class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a>
        <a class="carousel-control-next slide-dir mr-3" href="#carouselExampleFade" data-slide="next"><span
                class="carousel-control-next-icon"></span><span class="sr-only">Next </span></a>
    </div>

    <!-- About Us-->
    <div class="aboutUs">
        <div class="container-fluid" style="margin-right: 102px;">
            <div class="row">
                <div class="col-6 p-5 about">
                    <h2 class="position-relative ml-5">About Us</h2>
                    <h4>Welcome To Education And Hospitals</h4>
                    <p class="mt-5 font-weight-bold">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste autem, voluptatibus quasi,
                        praesentium aliquid consectetur explicabo illo sit eaque adipisci ab, et corrupti. Autem
                        perferendis error, reiciendis enim rerum soluta.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste autem, voluptatibus quasi,
                        praesentium aliquid consectetur explicabo illo sit eaque adipisci ab, et corrupti. Autem
                        perferendis error, reiciendis enim rerum soluta.

                    </p>
                    <h5 class="mt-4">Presenting Your Criteria</h5>
                    <ul class="d-flex justify-content-between text-muted w-75 pl-3 font-weight-bold mt-4">
                        <li>Distance</li>
                        <li>Budget</li>
                        <li>Activities</li>
                    </ul>

                    <!-- Know More Modal -->
                    <div class="modal fade" id="exampleModalKnowMore" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel">More About Selecting Crieteria</h3>
                                </div>
                                <div class="modal-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste autem, voluptatibus
                                    quasi, praesentium aliquid consectetur explicabo illo sit eaque adipisci ab, et
                                    corrupti. Autem perferendis error, reiciendis enim rerum soluta. Lorem, ipsum dolor
                                    sit amet consectetur adipisicing elit. Iste autem, voluptatibus quasi, praesentium
                                    aliquid consectetur explicabo illo sit eaque adipisci ab, et corrupti. Autem
                                    perferendis error, reiciendis enim rerum soluta.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" style="background-color: #007bff;" class="btn text-white"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn know py-2 px-5 mt-4 text-white font-weight-bold" data-toggle="modal"
                        data-target="#exampleModalKnowMore">Know More</button>
                </div>

                <div class="col-6 aboutForm">
                    <div class="cntainer p-5">
                        <div class="row">
                            <h2 class="text-white">Request Information</h2>
                            <form class="col-12 p-0 mt-3">
                                <div class="row">
                                    <div class="col-6 pl-0">
                                        <label class="text-white">First Name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="col-6">
                                        <label class="text-white">Last Name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="col-6 pl-0 mt-3">
                                        <label class="text-white">Mobile</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="col-6 mt-3">
                                        <label class="text-white">Email</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="col-12 mt-4 p-0">
                                        <label class="text-white">Your Message</label>
                                        <textarea class="form-control" style="height: 150px;"
                                            placeholder="Type Your Message Here">

                                        </textarea>
                                        <button class="form-control mt-3 text-white border-0"
                                            style="background-color: #00bcd4;">Submit Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Us -->
    <div class="whyUs p-4 pl-0">
        <div class="container">
            <div class="row">
                <div class="col-6 p-4 whyimg position-relative">
                    <img src="./images/why/1.png" class="w-100 h-100" />
                </div>
                <div class="col-6 p-3 pl-5">
                    <h3 style="color: #ff5252" class="position-relative">Why Us</h3>
                    <h2 class="mt-3" style="color: #00bcd4">Experience Yourself</h2>

                    <ul class="list-unstyled mt-5">
                        <li class="d-flex">
                            <h4 class="mr-2">01</h4>
                            <p class="font-weight-bold">Cras justo odio</p>
                        </li>
                        <li class="d-flex">
                            <h4 class="mr-2">02</h4>
                            <p class="font-weight-bold">Dapibus ac facilisis in</p>
                        </li>
                        <li class="d-flex">
                            <h4 class="mr-2">03</h4>
                            <p class="font-weight-bold">Morbi leo risus</p>
                        </li>
                        <li class="d-flex">
                            <h4 class="mr-2">04</h4>
                            <p class="font-weight-bold">Porta ac consectetur ac</p>
                        </li>
                        <li class="d-flex">
                            <h4 class="mr-2">05</h4>
                            <p class="font-weight-bold">Vestibulum at eros</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div class="services">
        <div class="container p-4">
            <div class="row">
                <div class="col-4 p-3">
                    <div class="bg-white p-3 position-relative active">
                        <h3 class="p-3 m-2"><span style="color: #ff5252"
                                class="position-relative w-100 d-block ml-4">01</span>
                            <p class="mt-2">Search For School</p>
                        </h3>
                        <p class="mt-3">Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero
                            malesuada feugiat praesent sapien massa.</p>
                        <button
                            style="background-color: transparent; color: #ff9800; font-size: 1.2em; cursor: pointer;"
                            class="border-0 font-weight-bold">Read More</button>
                    </div>
                </div>
                <div class="col-4 p-3">
                    <div class="bg-white p-3 position-relative secondSer">
                        <h3 class="p-3"><span style="color: #ff5252"
                                class="position-relative w-100 d-block ml-4">02</span>
                            <p class="mt-2">Search For Hospitals</p>
                        </h3>
                        <p class="mt-3">Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero
                            malesuada feugiat praesent sapien massa.</p>
                        <button
                            style="background-color: transparent; color: #ff9800; font-size: 1.2em; cursor: pointer;"
                            class="border-0 font-weight-bold">Read More</button>
                    </div>
                </div>
                <div class="col-4 p-3">
                    <div class="bg-white p-3 position-relative lastSer">
                        <h3 class="p-3"><span style="color: #ff5252"
                                class="position-relative w-100 d-block ml-4">03</span>
                            <p class="mt-2">Find Nearest</p>
                        </h3>
                        <p class="mt-3">Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero
                            malesuada feugiat praesent sapien massa.</p>
                        <button
                            style="background-color: transparent; color: #ff9800; font-size: 1.2em; cursor: pointer;"
                            class="border-0 font-weight-bold">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How To Search -->
    <div class="howSearch">
        <div class="container p-5">
            <h2 class="text-center mb-5 position-relative pb-3">How To Search</h2>
            <div class="row align-items-center how-it-works pt-4">
                <div class="col-2 text-center bottom">
                    <div class="circle">1</div>
                </div>
                <div class="col-6">
                    <h5>Define Service</h5>
                    <p>
                        When Enter To Our Website You Will Find 2 Services You Can Choose Any One Of Them , You Can
                        Search For Hospital If You Are ill Or Search For School For Your Son Or Sister
                    </p>
                </div>
            </div>
            <!--path between 1-2-->
            <div class="row timeline">
                <div class="col-2">
                    <div class="corner top-right"></div>
                </div>
                <div class="col-8">
                    <hr />
                </div>
                <div class="col-2">
                    <div class="corner left-bottom"></div>
                </div>
            </div>
            <!--second section-->
            <div class="row align-items-center justify-content-end how-it-works">
                <div class="col-6 p-0 pl-4">
                    <h5>Enter Rules Criteria</h5>
                    <p>After Choose The Service That You Want To Search For It You Can Specify Your Crieteria For
                        Example You Can Specify The Distance Between You And The Choosed Hospital Or School</p>
                </div>
                <div class="col-2 text-center full">
                    <div class="circle">2</div>
                </div>
            </div>
            <!--path between 2-3-->
            <div class="row timeline">
                <div class="col-2">
                    <div class="corner right-bottom"></div>
                </div>
                <div class="col-8">
                    <hr />
                </div>
                <div class="col-2">
                    <div class="corner top-left"></div>
                </div>
            </div>
            <!--third section-->
            <div class="row align-items-center how-it-works">
                <div class="col-2 text-center top">
                    <div class="circle">3</div>
                </div>
                <div class="col-6">
                    <h5>Choose 1 School Or Hospital</h5>
                    <p>After Defining The Service And Specify The Criteria Now You Can Choose The Adapted School Or
                        Hospital That Matches Your Specified Criteria And Your Needs</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Useful Links -->
    <div class="usefulLinks">
        <div class="container p-5">
            <div class="row">
                <div class="col-3">
                    <h2 class="font-weight-bold text-white">EduHos</h2>
                    <p class="text-muted">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus explicabo animi unde iste rerum,
                        ratione cupiditate corporis magni repellendus modi consequatur reiciendis.
                    </p>
                </div>
                <?php
                  $stm=$con->prepare("select * from hospitals LIMIT 5");
                    $stm->execute();
                    $rows=$stm->fetchAll();

                
                
                ?>
                
                
                
                
                <div class="col-3 hospitals">
                    <h3 class="text-white pb-2">Top Hospitals</h3>
                    <ul class="list-unstyled">
                        <?php
                        
                        foreach($rows as $row)
                        {
                            echo "<li>";
                           echo "<a href='HosSinglePage/index.php?ID=".$row['id']."'class='text-muted'>".$row['name']."</a>";
                                echo "</li>";
                        }
                        
                        ?>
                        
                        
                        <!--<li class="my-2"><a href='#' class="text-muted">المستشفى الكويتى التخصصى</a></li>
                        <li><a href='#' class="text-muted">مستشفى الأطفال التخصصي ببنها</a></li>
                        <li class="my-2"><a href='#' class="text-muted">المستشفى الأميري</a></li>
                        <li><a href='#' class="text-muted">مستشفى دار الشفاء</a></li>-->
                    </ul>
                </div>
                <div class="col-3 schools">
                    
                    <h3 class="text-white pb-2">Top Schools</h3>
                    
                    <ul class="list-unstyled">
                        <?php 
                        
                        $stm=$con->prepare("select * from schools LIMIT 5");
                        $stm->execute();
                        $rows=$stm->fetchAll();
                        
                        foreach($rows as $row)
                        {
                            echo "<li>";
                           echo "<a href='schoolSinglePage/index.php?ID=".$row['id']."' class='text-muted'>".$row['name']."</a>";
                                echo "</li>";
                        }
                        
                        ?>
                    </ul>
                </div>
                <div class="col-3 usefulData">
                    <h3 class="text-white pb-2">Useful Links</h3>
                    <ul class="list-unstyled text-muted">
                        <li>A108 Adam Street New York, NY 535022 United States</li>
                        <li class="my-3">Phone: +1 5589 55488 55</li>
                        <li>Email: info@example.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="footer overflow-hidden py-3">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <ul class="list-unstyled d-flex m-0">
                        <li>
                            <a href=""
                                class="face d-flex justify-content-center align-items-center text-white p-3 d-block"><i
                                    class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href=""
                                class="twitter d-flex justify-content-center align-items-center ml-3 text-white p-3 d-block"><i
                                    class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href=""
                                class="google d-flex justify-content-center align-items-center ml-3 text-white p-3 d-block"><i
                                    class="fab fa-google-plus-g"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 text-white justify-content-end d-flex align-items-center">
                    © 2020 EduHos. All rights reserved | Design by <span class='ml-1'
                        style="color: rgb(255, 79, 87);">GIS Team</span>
                </div>
            </div>
        </div>
    </div>


    <!-- Scroll To Top Button -->
    <button class="b-t-t">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='./js/jquery-3.4.1.min.js'></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/particles.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>