<?php
//session_start();

include 'connect.php';

?>


<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark p-0 d-flex align-items-center py-0">
        <div class="container"><a class="navbar-brand p-0" href="index.html"><img src="images/logo.png" /></a><button
                class="navbar-toggler" data-toggle="collapse" data-target="#n-links"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="n-links">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item active position-relative"><a href='index.php'
                            class="nav-link d-flex align-items-center py-0 px-3">HOME<span
                                class="sr-only">(current)</span></a>

                    </li>
                    <li class="nav-item"><a class="nav-link d-flex align-items-center py-0 px-3"
                            href="aboutUs.php">About</a></li>
                    <li class="nav-item position-relative"><a
                            class="nav-link d-flex align-items-center py-0 px-3">Search<i
                                class="fas fa-angle-down ml-2 fa-sm"></i></a>
                        <ul class="position-absolute list-unstyled dropdown-men">
                            <li class="drop"><a
                                    class="drop-link text-decoration-none text-dark d-block py-3 pl-3 active"
                                    href="schoolSearch.php">School</a></li>
                            <li class="drop"><a class="drop-link text-decoration-none text-dark d-block py-3 pl-3 last"
                                    href="hospitalSearch.php">Hospital</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link d-flex align-items-center py-0 px-3"
                            href="contactUs.php">CONTACT </a></li>
                    <li class="nav-item ml-3 text-white sign d-flex align-items-center">
                        
                        <?php
                            if(isset($_SESSION['username']))
                            {
                        ?>
                                
                        <div class=""><a href='logout.php'><i class="fas fa-sign-out-alt"></i> <span>LogOut</span></a></div>
                        
                                
                            <?php
                           
                        }
                        else
                        {

                        ?>
                            
                              <div class="mr-3"><a href="login.php"><i class="fas fa-lock"></i> <span>Sign in</span></a>
                        </div>
                        
                             <div class="mr-3"><a href="loggin_manger.php"><i class="fas fa-lock"></i> <span>login_manger</span></a>
                        </div>
                        
                        <div class=""><a href='register.php'><i class="fas fa-sign-out-alt"></i> <span>Sign up</span></a></div>
                        
                        
                        <?php
                        }
                        ?>
                        
                        
                      
                    </li>
                </ul>
            </div>
        </div>
    </nav>
