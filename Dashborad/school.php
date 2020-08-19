<?php

include 'header.php';
include 'connect.php';
include 'header.php';

?>


<?php

    
$do='';
if(isset($_GET['do']))
{
    $do=$_GET['do'];
}else
    {
        $do='mange';

    }





if($do=='mange')
{

    
    $stm=$con->prepare("select * from schools");
    $stm->execute();
    $rows=$stm->fetchAll();

?>

   <style>
        .table tr:first-of-type td{
            padding: 20px
        }
        
        .table tr:nth-child(even){
            background-color: #f3f3f3
        }
        
        .table td{
            border: 0 !important
        }
    </style>

 <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Belal</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p> Belal<small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  
  </header>
    <h1 class="text-center py-5" style="color:#888">Manage School</h1>
    <div class="container">
        <div class="table-responsive">
                <form method="post" style="margin: 30px 0 40px">
                    <div class="form-group" style="display: flex">
                        <input class="form-control" type="text" style="width:90% ; height:45px;" name="search" >
                        <button class="btn btn-info" name="ser" style="width:10% ;height:45px;border-radius:0; border:0">Search</button>
                        
                    </div>
                    
                    
                    
                        <!--start search -->

                    <?php
                        if(isset($_POST['ser']))
                        {
                             $search=$_POST['search'];
                            $stm= $con->prepare("select * from schools where name LIKE '%$search%'");
                            $stm->execute();
                            $rows=$stm->fetchAll();
                        }
                    ?>
              
                </form>
            
            <table id="demo" class="table table-bordered text-center">
                <tr style="background: #2c5e88;color: #f9f9f9; font-weight: bold">
                    <td>#ID</td>
                    <td>Name</td>
                    <td>phone</td>
                    <td>type</td>
                    <td>age_form</td>
                    <td>age_to</td>
                    <td>work_hours</td>
                    <td>pays</td>
                    <td>location</td>
                    <td>staff</td>
                    <td>students</td>
                    <td>classes</td>
                    <td>labs</td>

                </tr>
                
                <?php
                
                foreach($rows as $row)
                {
                    echo "<tr>";
                    echo "<td>" .$row['id']. "</td>";
                    echo "<td style='font-size:13px'>"  .$row['name']."</td>";
                    echo "<td>" .$row['phone']."</td>";
                    echo "<td>" .$row['type']."</td>";
                    echo "<td>" .$row['age_from']."</td>";
                    echo "<td>" .$row['age_to']."</td>";
                    echo "<td>" .$row['work_hours']."</td>";
                    echo "<td>" .$row['pays']."</td>";
                    echo "<td>" .$row['location']."</td>";
                    echo "<td>" .$row['staff']."</td>";
                    echo "<td>" .$row['students']."</td>";
                    echo "<td>" .$row['classes']."</td>";
                     echo "<td>" .$row['labs']."</td>";
                   /* echo "<td> 
                        <a href='?do=edit&ID=".$row['id']."' class='btn btn-danger'>Edit</a> 
                        <a href='?do=delet&ID=".$row['id']."' class='btn btn-primary'>Delet</a> 
                    
                    </td>";*/


                    echo "</tr>";
                }
               
                
                ?>
                
          
            
            </table>
        
        
        </div>

    </div>







<?php     
}
elseif($do=='edit')
{

    if(isset($_GET['ID']) && is_numeric($_GET['ID']))
    {
        $id=$_GET['ID'];
        $stm =$con->prepare("select * from owner where ID=$id");
        $stm->execute(array($id));
        $row=$stm->fetch();
        $count=$stm->rowCount();
        
        if($stm->rowCount()>0)
        {?>
        <div class="container pt-5">
         <h1 class="text-center" style="color:#888">Edit Member..!</h1>
         <form action="?do=update" method="post"  enctype="multipart/form-data">
                 
             <div class="form-group"> 
            <input type="hidden" class="form-control" name="id" value="<?php echo $row['ID'] ?>">
             </div>
             
             <div class="form-group">
                <label>name:</label>
                 <input type="text" class="form-control" name="name" value="<?php echo $row['Name'] ?>">
            
             </div>
             
              <div class="form-group">
                <label>email:</label>
                 <input type="email" class="form-control" name="email" value="<?php echo $row['Email'] ?>">
             </div>
             
              <div class="form-group">
                <label>password:</label>
                  <input type="password" class="form-control" name="password" value="<?php echo $row['Password'] ?>">
             </div>
             
              <div class="form-group">
                <label>Phone:</label>
                 <input type="number" class="form-control" name="phone" value="<?php echo $row['Phone'] ?>">
             </div>
             
             
              <div class="form-group">
                <label>Address:</label>
                 <input type="text" class="form-control" name="address" value="<?php echo $row['Address'] ?>">
             </div>
             
              <div class="form-group">
                <label>Group_ID:</label>
                 <input type="number" class="form-control" name="group_id" value="<?php echo $row['Group_ID'] ?>">
             </div>
             <div class="form-group">
                <label>img:</label>
                 <input type="text" class="form-control" name="imgeold" value="<?php echo $row['Image'] ?>">
             </div>
            <div>
             <label>img:</label>
                 <input type="file" class="form-control" name="imgenew" value="<?php echo $row['Address'] ?>">
             </div>
            
             <button type="submit" class="btn btn-info mt-4 btn-lg" name="submit" >updat</button>
                
         
         </form>
         
         

    </div>
  
<?php
        }
    }
     
    else
    {
        echo 'their is no such ID';
    }


?>

   
<?php
       
}

elseif($do=='update')
{
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $phone=$_POST['phone'];
        $adress=$_POST['address'];
        $group_id=$_POST['group_id'];
       
        
        $stm =$con->prepare("UPDATE `owner` SET ID='$id' ,Name='$name',Email='$email',Password='$pass' ,Phone='$phone' ,Image='',Address='$adress',Group_ID='$group_id' WHERE ID='$id' ");
        
        $stm->execute(array($id,$name,$email,$pass,$phone,$adress));
        
        echo $stm->rowCount().'Record Updated';
        
    }
    else
    {
        echo 'soory....you cant Browse this page directly ';    
    
    }
   
    
}

elseif($do=='delet')
{
     if(isset($_GET['ID']) &&is_numeric($_GET['ID']))
        {
            $id=$_GET['ID'];
             $stm =$con->prepare("select * from owner where ID ='$id'");
            $stm->execute(array($id));
            //$row=$stm->fetch();
            $count=$stm->rowCount();
         if($stm->rowCount()>0)
         {
             $stm=$con->prepare("delete from owner where ID= :zowner");
             $stm->bindParam(":zowner",$id );
             $stm->execute();
            echo "<div class='alert alert-danger'>".$stm->rowCount().'Recored deleted</div>';
         }
         
         
    
        }
    
    
}
else
{
    echo 'thir is no page of this name ';
}
  

?>



<?php

include ('footer.php')


?>