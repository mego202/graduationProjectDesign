<?php
    include 'header.php';
    include 'navbar.php';
    include 'connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

            if(isset($_POST['Register'])){
                $fName = $_POST['fName'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $Career = $_POST['Career'];
                $Password = $_POST['Password'];
               
                $stmt = $con->prepare("INSERT INTO `users`(`name`, `phone`, `email`, `password`, `career`)
                            
                                    VALUES (? , ? , ? , ? , ?) ");
                        // Excute Query
                        $stmt->execute(array($fName,$phone,$email,$Password,$Career));

                        echo '<div class="alert alert-success w-75 mx-auto mt-3 shadow">Member Added Successfully You Will Redirect To Login Page After 10 Seconds And You Should Wait For Admin Approve</div>';
                       // header('location:login.php');
                        header( "refresh:10;url=login.php" );


                }


}
?>
        


    <div class="container p-0">
        <div class="row">
            <div class="col-6">
                <form  action="register.php" method="post">
                    <h1 class="mt-5 font-weight-bold">Sign Up</h1>
                    <div class="mt-4">
                        <label style="font-weight:bold">Name</label>
                        <input type="text" class="form-control" name="fName" style="width: 525px">
                    </div>
                   
                    <div class="mt-4">
                        <label style="font-weight:bold">Email</label>
                        <input type="email" class="form-control" name="email" style="width: 525px">
                    </div>
                    <div class="mt-4">
                        <label style="font-weight:bold">Phone</label>
                        <input type="text" class="form-control" name="phone" style="width: 525px">
                    </div>
                    <div class="mt-4">
                        <label style="font-weight:bold">Career</label>
                        <input type="text" class="form-control" name="Career" style="width: 525px">
                    </div>
                    <div class="my-4">
                        <label style="font-weight:bold">Password</label>
                        <input type="Password" class="form-control" name="Password" style="width: 525px">
                    </div>
                    <div>
                        <input type="submit" class="form-control w-25 mt-5 text-white border-0"
                            style="background-color: #0D1326; cursor: pointer;" value="Register" name="Register">
                    </div>
                    <div class="mt-4 mb-4">
                        <!--
                        <input type="checkbox">
                        <label class="text-muted">Remember me?</label>
                        <label style="color:rgb(255, 79, 87)" class="font-weight-bold">Forgot Password?</label>
                        -->
                        <label>If You have an account You Can Log In</label>
                        <label class="font-weight-bold"><a href="login.html"
                                style="color:rgb(255, 79, 87)">Login</a></label>
                    </div>
                </form>
            </div>
            <div class="col-6 logImg" style="height: 490px">
                <img src="./images/login/1.jpg" class="w-100 h-100" />
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='./js/jquery-3.4.1.min.js'></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>




</body>






</html>