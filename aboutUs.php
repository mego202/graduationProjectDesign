<?php
    include 'header.php';
    include 'navbar.php';


?>
    
    <header class="aboutHeader position-relative d-flex justify-content-center align-items-center">
        <canvas id="particles" class="position-absolute w-100 h-100"></canvas>
        <h1 style="z-index: 40; font-size: 3.5em;" class="text-white">About Us</h1>
    </header>

    <div class="container pt-5 pb-3">
        <div class="row">
            <div class="col-6">
                <h1 class="font-weight-bold">Some Info About Team</h1>
                <p>
                    <p class="my-2">
                        <span class='font-weight-bold'>Lorem</span>, ipsum dolor sit amet consectetur adipisicing elit.
                        Quia saepe eos ullam qui ex possimus earum eveniet dolore, nemo atque cumque numquam
                        repellendus? Asperiores illum eaque error quasi unde nihil doloribus iure cupiditate totam
                        perferendis quis a, quod iste explicabo. Reprehenderit in repudiandae harum commodi itaque
                        magnam beatae eum expedita!
                    </p>
                    <p class="my-3">
                        <span class='font-weight-bold'>Lorem</span>, ipsum dolor sit amet consectetur adipisicing elit.
                        Quia saepe eos ullam qui ex possimus earum eveniet dolore, nemo atque cumque numquam
                        repellendus? Asperiores illum eaque error quasi unde nihil doloribus iure cupiditate totam
                        perferendis quis a, quod iste explicabo. Reprehenderit in repudiandae harum commodi itaque
                        magnam beatae eum expedita!
                    </p>
                    <p class="my-3">
                        <span class='font-weight-bold'>Lorem</span>, ipsum dolor sit amet consectetur adipisicing elit.
                        Quia saepe eos ullam qui ex possimus earum eveniet dolore, nemo atque cumque numquam
                        repellendus? Asperiores illum eaque error quasi unde nihil doloribus iure cupiditate totam
                        perferendis quis a, quod iste explicabo. Reprehenderit in repudiandae harum commodi itaque
                        magnam beatae eum expedita!
                    </p>
                </p>
            </div>

            <div class="col-6 about-img d-flex justify-content-end">
                <img src="./images/aboutUs/2.png" class="p-1" />
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
                <div class="col-3 hospitals">
                    <h3 class="text-white pb-2">Top Hospitals</h3>
                    <ul class="list-unstyled">
                        <li><a href='#' class="text-muted">مستشفى الجامعة ببنها</a></li>
                        <li class="my-2"><a href='#' class="text-muted">المستشفى الكويتى التخصصى</a></li>
                        <li><a href='#' class="text-muted">مستشفى الأطفال التخصصي ببنها</a></li>
                        <li class="my-2"><a href='#' class="text-muted">المستشفى الأميري</a></li>
                        <li><a href='#' class="text-muted">مستشفى دار الشفاء</a></li>
                    </ul>
                </div>
                <div class="col-3 schools">
                    <h3 class="text-white pb-2">Top Schools</h3>
                    <ul class="list-unstyled">
                        <li><a href='#' class="text-muted">مدرسة بنها الحديثه</a></li>
                        <li class="my-2"><a href='#' class="text-muted">مدرسة 25 يناير</a></li>
                        <li><a href='#' class="text-muted">مدرسة السلام</a></li>
                        <li class="my-2"><a href='#' class="text-muted">مدرسة 15مايو الاعدادية بنات بالمنشية بنها</a>
                        </li>
                        <li><a href='#' class="text-muted">مدرسة الفتح الخاصه</a></li>
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
  
<?php

include 'footer.php';

?>