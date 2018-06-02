<?php require '../dashboard/includes/interface.php'; ?>
<?php
$title = "Home";
ob_start();
?>
<!-- ========== REVOLUTION SLIDER ========== -->
    <div class="hero_wrapper">
            <div id="hero" class="rev_slider gradient_slider" style="display:none">
                <ul>
                <?php 
                   $web->showContent("slider",1,["image","title","rating","description_c1","description_c2","description_c3"]); ?>
            </ul>
        </div>
    </div>
<!-- ========== FEATURES ========== -->
<section class="lightgrey_bg" id="features">
    <div class="container">
        <div class="main_title mt_wave a_center">
            <h2>OUR AWESOME SERVICES</h2>
        </div>
        <p class="main_description a_center">We make sure you enjoy your stay with us.</p>
        <div class="row">
          <?php $web->showContent("service",2,["name","description","image"]); ?>
        </div>
    </div>
</section>
<!-- ========== ABOUT US ========== -->
<section id="testimonials" class="white_bg" style="background:url('../images/section_holder_1.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="main_title mt_wave a_left">
                    <h2>ABOUT US</h2>
                </div>
                <p class="main_description" style="color:#fff">
                Travel Africa network is an initiative established by “Light Rwanda Ltd”.  
                Our purpose is to establish a network of volunteers who will be know as Country Focal Point (CFP), these will assist fellow Africans who would like to visit African Countries. 
            <br><br> This activity is in the effort of supporting the Africanist spirit, which is rising in all countries on the continent. 
            Africans are now much than before valuing their peer Africans. The only way to admire Africa is touring many countries and gets hand-on information on the development of our mother continent.
            Europeans, Asians, American are also welcome in this initiative. <a href="#contact">contact us</a>.</p>
            </div>

            <div class="col-md-6">
                <div id="testimonials_slider" class="owl-carousel">
                    <!-- ITEM -->
                    <div class="item">
                        <img src="../images/placeholder.png" alt="Image">
                        <div class="review_content">
                            <p>We are far from being a tour and travel agency, our mission is ushering Africans and other people who needs to visit African Countries.</p>
                            <div class="review_rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="review_author"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== CONTACT ========== -->
<section class="white_bg" id="contact">
    <div class="container">
        <div class="main_title mt_wave mt_yellow a_center">
            <h2>CONTACT US</h2>
        </div>
        <p class="main_description a_center">Contact us for any support you may need.</p>
        <div class="row">            
            <div class="col-md-6">
                <div class="row">
                    <div class="contact-items">
                        <div class="col-md-4 col-sm-4">
                            <div class="contact-item">
                                <i class="glyphicon glyphicon-map-marker"></i>
                                <h6>Kigali - Rwanda</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="contact-item">
                                <i class="glyphicon glyphicon-phone-alt"></i>
                                <h6>+250 788300601</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="contact-item">
                                <i class="fa fa-envelope"></i>
                                <h6>gakubad@gmail.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <form method="post" id="contact-form">
                    <div id="contact-result"></div>
                    <div class="form-group">
                        <input class="form-control" required name="name" placeholder="Your Name" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" required name="email" type="email" placeholder="Your Email Address">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" required name="message" placeholder="Your Message"></textarea>
                    </div>
                    <button class="button btn_lg btn_blue btn_full upper" type="submit">Send message</button>          
                </form>
            </div>
        </div>
    </div>
</section>
<?php $content = ob_get_clean(); ?>
<?php include '../layout/layout_main.php'; ?>