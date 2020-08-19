<?php


include '../connect.php';
if(isset($_GET['ID']))
{
    $id=$_GET['ID'];
    
   $stm=$con->prepare("select * from hospitals where id =$id");
    $stm->execute();
    $row=$stm->fetch();
}


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="./images/logo/1.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href='../css/bootstrap.min.css'>
    <link rel='stylesheet' href="../css/style.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">

    <title>Hello, world!</title>


</head>

<body>
    <!-- Navbar        -->
    <nav class="navbar navbar-expand-lg navbar-dark p-0 d-flex align-items-center py-0">
        <div class="container"><a class="navbar-brand p-0" href="index.html"><img
                    src="./images/logo/1.png" /></a><button class="navbar-toggler" data-toggle="collapse"
                data-target="#n-links"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="n-links">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item active position-relative"><a href='index.html' data-scroll='.schoolHeader'
                            class="nav-link d-flex align-items-center py-0 px-3 anchor">HOME<span
                                class="sr-only">(current)</span></a>

                    </li>
                    <li class="nav-item"><a class="nav-link d-flex align-items-center py-0 px-3 anchor"
                            href="course-details.html" data-scroll='.aboutSchool'>ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link d-flex align-items-center py-0 px-3 anchor"
                            href="aboutUs.html" data-scroll='.activities'>SERVICES</a></li>
                    <li class="nav-item"><a class="nav-link d-flex align-items-center py-0 px-3 anchor"
                            href="events.html" data-scroll='.schoolInfo'>HOSPITAL INFO</a></li>
                    <li class="nav-item position-relative"><a
                            class="nav-link d-flex align-items-center py-0 px-3">Search<i
                                class="fas fa-angle-down ml-2 fa-sm"></i></a>
                        <ul class="position-absolute list-unstyled dropdown-men">
                            <li class="drop"><a
                                    class="drop-link text-decoration-none text-dark d-block py-3 pl-3 active"
                                    href="../schoolSearch.html" data-s='t'>School</a></li>
                            <li class="drop"><a class="drop-link text-decoration-none text-dark d-block py-3 pl-3 last"
                                    href="../hospitalSearch.html" data-s='t'>Hospital</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link d-flex align-items-center py-0 px-3 anchor"
                            href="contactUs.html" data-scroll='.teachers'>DOCTORS</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hos Header -->
    <header class="schoolHeader position-relative d-flex align-items-center">
        <div class="container text-white" style="z-index: 40;">
            <h3><?php  echo $row['type'] == 'عام'? 'Public' : 'Private'; ?> Hospital</h3>
            <h1 class="font-weight-bold my-4" style="font-size: 3.2em; line-height: 1.6">PERFECT Hospital FOR YOU<br>
                موقع <?php echo $row['name']; ?>
            </h1>
            <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium, totam rem aperiam.
            </p>
            
            <ul class="d-flex list-unstyled mt-4">
                <li><i class="fas fa-phone mr-2"></i> <?php echo '+'.$row['phone'];?></li>
                <li class="mx-3"><i class="fas fa-money-bill mr-2"></i> <?php echo $row['pays'] . ' Pound';?></li>
                <li><i class="fas fa-clock mr-2"></i> <?php echo $row['work_hours'] . ' Hours';?></li>
                <li class="mx-3"><i class="fas fa-map-marker-alt mr-2"></i> <?php echo $row['location'];?></li>
                <li><i class="fas fa-user-friends mr-2"></i> <?php echo $row['services'];?></li>
            </ul>
            <button class="btn bg-white border-0 px-5 py-3 mt-4">
                Learn More
            </button>
        </div>
    </header>


    <!--Welcome-->
    <div class="welcome">
        <div class="container py-5 text-center">
            <h1 class="font-weight-bold text-white" style="text-transform: capitalize;">مرحبا بك في موقع   <span
                    style="color: #f2af59"> <?php echo $row['name'];?></span> 
            </h1>
        </div>
    </div>

    <!-- About Hos -->
    <div class="aboutSchool">
        <div class="container pt-3 pb-5">
            <div class="row">
                <div class="col-6">
                    <h2 class="font-weight-bold position-relative pb-3 mt-5"><?php echo $row['name']; ?> </h2>
                    <p class="my-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. luptate velit esse cillum dolore eu fugiat
                        nulla pariatur.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. luptate velit esse cillum dolore eu fugiat
                        nulla pariatur.
                    </p>
                    <!-- Modal -->
                    <div class="modal fade w-100" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="padding-bottom: 10px;">
                                    <h5 class="modal-title" id="exampleModalLabel">المزيد عن <?php echo $row['name']; ?> </h5>
                                </div>
                                <div class="modal-body">
                                    <p class="mb-4">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        luptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        luptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                    <p class="my-4">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        luptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        luptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn mt-3 px-5 py-3 text-white" data-toggle="modal" data-target="#exampleModal">ABOUT
                        US</button>
                </div>
                <div class="col-6 p-5">
                    <img src="./images/aboutSchool/1.png" class="w-100 h-100" style="transform: translateY(49px);" />
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div class="activities">
        <div class="container py-5">
            <div class="position-relative act-header pb-3">
                <h2 class="font-weight-bold">OUR SERVICES</h2>
                <h4 class="text-muted">OUR BEST SERVICES FOR YOU</h4>
            </div>
            <div class="row my-5">
                <div class="col-4 mt-3">
                    <div class="row px-3">
                        <div class="ac-img p-1 col-4 d-flex justify-content-center align-items-center"
                            style="height: 120px; border: 5px solid #ffc67f;">
                            <img src="./images/activities/1.png" class="w-100 h-100" />
                        </div>
                        <div class='col-8 pr-0'>
                            <h5 class="font-weight-bold">pediatric specialty care</h5>
                            <p>
                                Lorem ipsum dolor sit amet, cons adipiscing elit. Pellentesa tinciunt rutrum sapien esse
                                cillum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="row px-3">
                        <div class="ac-img p-1 col-4 d-flex justify-content-center align-items-center"
                            style="height: 120px; border: 5px solid #F7C3C2">
                            <img src="./images/activities/2.png" class="w-100 h-100" />
                        </div>
                        <div class='col-8 pr-0'>
                            <h5 class="font-weight-bold">nutritional counseling</h5>
                            <p>
                                Lorem ipsum dolor sit amet, cons adipiscing elit. Pellentesa tinciunt rutrum sapien esse
                                cillum.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mt-3">
                    <div class="row px-3">
                        <div class="ac-img p-1 col-4 d-flex justify-content-center align-items-center"
                            style="height: 120px; border: 5px solid #FEDD8A">
                            <img src="./images/activities/3.png" class="w-100 h-100" />
                        </div>
                        <div class='col-8 pr-0'>
                            <h5 class="font-weight-bold">genetic counseling and testing</h5>
                            <p>
                                Lorem ipsum dolor sit amet, cons adipiscing elit. Pellentesa tinciunt rutrum sapien esse
                                cillum.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mt-4">
                    <div class="row px-3">
                        <div class="ac-img p-1 col-4 d-flex justify-content-center align-items-center"
                            style="height: 120px; border: 5px solid #C6E2C7">
                            <img src="./images/activities/4.png" class="w-100 h-100" />
                        </div>
                        <div class='col-8 pr-0'>
                            <h5 class="font-weight-bold">mental health care</h5>
                            <p>
                                Lorem ipsum dolor sit amet, cons adipiscing elit. Pellentesa tinciunt rutrum sapien esse
                                cillum.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mt-4">
                    <div class="row px-3">
                        <div class="ac-img p-1 col-4 d-flex justify-content-center align-items-center"
                            style="height: 120px; border: 5px solid #d9a3e3">
                            <img src="./images/activities/5.png" class="w-100 h-100" />
                        </div>
                        <div class='col-8 pr-0'>
                            <h5 class="font-weight-bold">Ambulance</h5>
                            <p>
                                Lorem ipsum dolor sit amet, cons adipiscing elit. Pellentesa tinciunt rutrum sapien esse
                                cillum.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mt-4">
                    <div class="row px-3">
                        <div class="ac-img p-1 col-4 d-flex justify-content-center align-items-center"
                            style="height: 120px; border: 5px solid #b2e6ec">
                            <img src="./images/activities/6.png" class="w-100 h-100" />
                        </div>
                        <div class='col-8 pr-0'>
                            <h5 class="font-weight-bold">home nursing services</h5>
                            <p>
                                Lorem ipsum dolor sit amet, cons adipiscing elit. Pellentesa tinciunt rutrum sapien esse
                                cillum.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Hospital Info -->
    <div class="schoolInfo py-5 position-relative text-white">
        <div class="container py-5">
            <div class="row">
                <div class="col-3 text-center px-0">
                    <div class="d-flex justify-content-center flex-column">
                        <div class="counter mx-auto d-flex align-items-center justify-content-center">
                            <h1 class="d-flex justify-content-center align-items-center"><?php echo $row['staff'];?></h1>
                        </div>
                        <h4 class="mt-3 font-weight-bold">DOCTOR AND STAFF</h4>
                        <p>
                            Praesent turpis mauris, aliquet id lor gravida adipiscing lectus ut rutrum eat posuere
                            risus.
                        </p>
                    </div>
                </div>
                <div class="col-3 text-center px-0">
                    <div class="d-flex justify-content-center flex-column">
                        <div class="counter mx-auto d-flex align-items-center justify-content-center">
                            <h1 class="d-flex justify-content-center align-items-center"><?php echo $row['beds'];?></h1>
                        </div>
                        <h4 class="mt-3 font-weight-bold">BED</h4>
                        <p>
                            Praesent turpis mauris, aliquet id lor gravida adipiscing lectus ut rutrum eat posuere
                            risus.
                        </p>
                    </div>
                </div>

                <div class="col-3 text-center px-0">
                    <div class="d-flex justify-content-center flex-column">
                        <div class="counter mx-auto d-flex align-items-center justify-content-center">
                            <h1 class="d-flex justify-content-center align-items-center"><?php echo $row['rooms'];?></h1>
                        </div>
                        <h4 class="mt-3 font-weight-bold">ROOM</h4>
                        <p>
                            Praesent turpis mauris, aliquet id lor gravida adipiscing lectus ut rutrum eat posuere
                            risus.
                        </p>
                    </div>
                </div>

                <div class="col-3 text-center px-0">
                    <div class="d-flex justify-content-center flex-column">
                        <div class="counter mx-auto d-flex align-items-center justify-content-center">
                            <h1 class="d-flex justify-content-center align-items-center"><?php echo $row['labs'];?></h1>
                        </div>
                        <h4 class="mt-3 font-weight-bold">LABS</h4>
                        <p>
                            Praesent turpis mauris, aliquet id lor gravida adipiscing lectus ut rutrum eat posuere
                            risus.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Doctors -->
    <div class="teachers">
        <div class="container p-5">
            <h1 class="mb-4 font-weight-bold">OUR DOCTORS</h1>
            <div class="row mt-5">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link py-3 active" id="v-pills-magdy-tab" data-toggle="pill" href="#v-pills-magdy"
                            role="tab" aria-controls="v-pills-home" aria-selected="true">Dentist</a>
                        <a class="nav-link py-3" id="v-pills-mohammed-tab" data-toggle="pill" href="#v-pills-mohammed"
                            role="tab" aria-controls="v-pills-profile" aria-selected="false"> Addiction psychiatrist</a>
                        <a class="nav-link py-3" id="v-pills-hossam-tab" data-toggle="pill" href="#v-pills-hossam"
                            role="tab" aria-controls="v-pills-messages" aria-selected="false">Cardiologist</a>
                        <a class="nav-link py-3" id="v-pills-ali-tab" data-toggle="pill" href="#v-pills-ali" role="tab"
                            aria-controls="v-pills-settings" aria-selected="false">Colon and rectal surgeon</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <!-- Magdy Tab -->
                        <div class="tab-pane fade show active" id="v-pills-magdy" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="row">
                                <div class="col-3">
                                    <img src="./images/teachers/1.png" />
                                </div>
                                <div class="col-9 pl-5">
                                    <p><span class="font-weight-bold">Name:</span> Lorem 1</p>
                                    <p><span class="font-weight-bold">Job:</span> Dentist Doctor</p>
                                    <p><span class="font-weight-bold">Age:</span> 45</p>
                                    <p><span class="font-weight-bold">Experience:</span> 10 Years</p>
                                    <p class="text-muted">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque lada tum, totam rem aperiam,
                                    </p>
                                    <p class="text-muted">
                                        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                        dicta sunt explicabo. Sed ut perspiciatis unde omnis iste natus error sit
                                        vluptatem accusantium doloremque lada tum, totam rem aperam, eaque ipsa quae ab
                                        illo inventore verttis et quasi architecto beatae vitae dicta sunt excabo.
                                        accusantium doloremque lada tum, totam rem aperam.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Mohammed Tab -->
                        <div class="tab-pane fade" id="v-pills-mohammed" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="row">
                                <div class="col-3">
                                    <img src="./images/teachers/2.png" />
                                </div>
                                <div class="col-9 pl-5">
                                    <p><span class="font-weight-bold">Name:</span> Lorem 2</p>
                                    <p><span class="font-weight-bold">Job:</span> Addiction psychiatrist.</p>
                                    <p><span class="font-weight-bold">Age:</span> 34</p>
                                    <p><span class="font-weight-bold">Experience:</span> 4 Years</p>
                                    <p class="text-muted">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque lada tum, totam rem aperiam,
                                    </p>
                                    <p class="text-muted">
                                        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                        dicta sunt explicabo. Sed ut perspiciatis unde omnis iste natus error sit
                                        vluptatem accusantium doloremque lada tum, totam rem aperam, eaque ipsa quae ab
                                        illo inventore verttis et quasi architecto beatae vitae dicta sunt excabo.
                                        accusantium doloremque lada tum, totam rem aperam.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Hossam Tab -->
                        <div class="tab-pane fade" id="v-pills-hossam" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="row">
                                <div class="col-3">
                                    <img src="./images/teachers/3.png" />
                                </div>
                                <div class="col-9 pl-5">
                                    <p><span class="font-weight-bold">Name:</span> Lorem 3</p>
                                    <p><span class="font-weight-bold">Job:</span> Cardiologist</p>
                                    <p><span class="font-weight-bold">Age:</span> 27</p>
                                    <p><span class="font-weight-bold">Experience:</span> 3 Years</p>
                                    <p class="text-muted">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque lada tum, totam rem aperiam,
                                    </p>
                                    <p class="text-muted">
                                        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                        dicta sunt explicabo. Sed ut perspiciatis unde omnis iste natus error sit
                                        vluptatem accusantium doloremque lada tum, totam rem aperam, eaque ipsa quae ab
                                        illo inventore verttis et quasi architecto beatae vitae dicta sunt excabo.
                                        accusantium doloremque lada tum, totam rem aperam.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-ali" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <div class="row">
                                <div class="col-3">
                                    <img src="./images/teachers/4.png" />
                                </div>
                                <div class="col-9 pl-5">
                                    <p><span class="font-weight-bold">Name:</span> Lorem 4</p>
                                    <p><span class="font-weight-bold">Job:</span> Colon and rectal surgeon</p>
                                    <p><span class="font-weight-bold">Age:</span> 34</p>
                                    <p><span class="font-weight-bold">Experience:</span> 7 Years</p>
                                    <p class="text-muted">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque lada tum, totam rem aperiam,
                                    </p>
                                    <p class="text-muted">
                                        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                        dicta sunt explicabo. Sed ut perspiciatis unde omnis iste natus error sit
                                        vluptatem accusantium doloremque lada tum, totam rem aperam, eaque ipsa quae ab
                                        illo inventore verttis et quasi architecto beatae vitae dicta sunt excabo.
                                        accusantium doloremque lada tum, totam rem aperam.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                  $stm=$con->prepare("select * from hospitals limit 5");
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
                           echo "<a href='?ID=".$row['id']."' class='text-muted'>".$row['name']."</a>";
                                echo "</li>";
                        }
                        
                        ?>
                        
                        
                        <!--<li class="my-2"><a href='#' class="text-muted">المستشفى الكويتى التخصصى</a></li>
                        <li><a href='#' class="text-muted">مستشفى الأطفال التخصصي ببنها</a></li>
                        <li class="my-2"><a href='#' class="text-muted">المستشفى الأميري</a></li>
                        <li><a href='#' class="text-muted">مستشفى دار الشفاء</a></li>-->
                    </ul>
                </div>
                
                <?php


                               $stm2=$con->prepare("select * from schools LIMIT 5");
                                $stm2->execute();
                                $row2=$stm2->fetchAll();
                                              
                        ?>
                
                <div class="col-3 schools">
                    <h3 class="text-white pb-2">Top Schools</h3>
                    <ul class="list-unstyled">
                        <?php
                         foreach($row2 as $row)
                        {
                            echo "<li>";
                           echo "<a href='/GradBelalDash/final_project/schoolSinglePage/index.php?ID=".$row['id']."' class='text-muted'>".$row['name']."</a>";
                                echo "</li>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-3 usefulData">
                    <h3 class="text-white pb-2">Useful Links</h3>
                    <ul class="list-unstyled text-muted">
                        <li><span class="font-weight-bold mr-3">Address</span><?php echo $row['location'];?></li>
                        <li class="my-3"><span class="font-weight-bold">Phone</span>: +<?php echo $row['phone'];?></li>
                        <li><span class="font-weight-bold">Email</span>: hospital346@yahoo.com</li>
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
    <script src='../js/jquery-3.4.1.min.js'></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="./js/schoolScript.js"></script>
</body>






</html>