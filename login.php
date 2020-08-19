<?php

session_start();
include 'connect.php';




if($_SERVER['REQUEST_METHOD']=='POST'){
    
   
    $username=$_POST['user'];
    $pass=$_POST['pass'];
   //echo $username;
   if($username=='belal' and $pass=='0000')
        {
           
            //echo $count;
       $_SESSION['username']=$username;
      // echo $_SESSION['username'];
        //$_SESSION['id']=$row['id'];
        //echo $_SESSION['username'];
           
          header('location:Dashborad/index.php');
        }
    
    else
    {
        
    $stmt=$con->prepare("SELECT `id`, `name`,`password` FROM `users` WHERE name =? and password=?");
    $stmt->execute(array($username,$pass));
    $row=$stmt->fetchAll();
    $count=$stmt->rowCount();
    echo $count;
    if($count>0)
    {
       $_SESSION['username']=$username;
        //echo $username;
       // $_SESSION['id']=$row['id'];
         header('location:schoolSearch.php');   //redirect to dashboard
        exit();
        
    }
else
{
    echo "<div class='alert alert-danger'>The UserName OR Password Is Wrong</div>";

}
        
        
        
    }

    //echo $count;
    
}



?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="./images/signin.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href='./css/bootstrap.min.css'>
    <link rel='stylesheet' href="./css/style.css">
    <link rel='stylesheet' href="./css/login.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">

    <title>Sign In</title>
  </head>
  <style>
      body{
        overflow: hidden;
        font-family: 'Baloo Thambi 2', cursive;
      }
  </style>
  <body>
<!-- Navbar        -->
<?php

      include 'navbar.php';
?>

    <div class="container p-0">
        <div class="row">
            <div class="col-6">
                <form name="Login" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <h1 class="mt-5 font-weight-bold">Sign In</h1>
                    <div class="mt-4">
                        <label style="font-weight:bold">Username</label>
                        <input type="text" class="form-control" name="user" style="width: 525px">
                    </div>
                    <div class="my-4">
                        <label style="font-weight:bold">Password</label>
                    <input type="Password" class="form-control" name="pass" style="width: 525px">
                    </div>
                    <div>
                    <input type="submit" class="form-control w-25 mt-5 text-white border-0" style="background-color: #0D1326; cursor: pointer;" value="Login">
                    </div>
                    <div class="mt-4">
                        <!--
                        <input type="checkbox">
                        <label class="text-muted">Remember me?</label>
                        <label style="color:rgb(255, 79, 87)" class="font-weight-bold">Forgot Password?</label>
                        -->
                        <label>Don't have an account?</label>
                        <label class="font-weight-bold"><a href="register.php" style="color:rgb(255, 79, 87)">Register Now</a></label>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <img src="./images/login/1.jpg" class="w-100 h-100"/>
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
                            <a href="" class="face d-flex justify-content-center align-items-center text-white p-3 d-block"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="" class="twitter d-flex justify-content-center align-items-center ml-3 text-white p-3 d-block"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="" class="google d-flex justify-content-center align-items-center ml-3 text-white p-3 d-block"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 text-white justify-content-end d-flex align-items-center">
                    © 2020 EduHos. All rights reserved | Design by <span class='ml-1' style="color: rgb(255, 79, 87);">GIS Team</span>
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