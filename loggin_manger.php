<?php
session_start();
include 'connect.php';
include 'header.php';
?>

<div class="login" style="width:30%; margin:auto; padding-top:100px;">
        <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

         <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" required >
            </div>

             <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <span >
                Do you want 
                <a href="register.php">
                to register
                </a>
            </span>
           <button class="btn btn-info btn-block mt-3" type="submit" name="login">login</button>
        </form>
</div>


<?php
    
if(isset($_POST['login'])){ 
    
$user=$_POST['name'];
$pass=$_POST['password'];
//$hashpass=sha1($pass);
        
     $stm=$con->prepare("SELECT * FROM manger WHERE name=? AND password=? ");
    $stm->execute(array($user,$pass));
    $count=$stm->rowCount();
    $rows=$stm->fetch();
  
if($count>0 ){
    $_SESSION['login']=  true;  
    $_SESSION['Username']=$rows['name'];
    $_SESSION['id']= $rows['id'];
   
   // echo $_SESSION['id'];
    
      header("location:Dashborad/index2.php");
    
}
else
{
     header("location:login_manger.php");
}
    
    }


?>



<?php

include 'footer.php';
?>