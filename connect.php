<?php


$dsn='mysql:host=localhost;dbname=data;charset=utf8';
$user='root';
$pass='';
/*$opstion=array(

    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
            );*/

try
{
    $con=new PDO($dsn,$user,$pass);
   // $con->setAttribute(PDO::ATTR_ERROMDE , PDO::ERROMDE_EXCEPTION);
  //  echo " connected";
    
}
catch(PDOException $e)

{
    echo "faield".$e->getMessage();
    
}


?>