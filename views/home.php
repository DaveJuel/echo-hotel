<?php require '../dashboard/includes/interface.php';?>

<?php
$title = "Home";
ob_start();
?>

        <!-- ========== REVOLUTION SLIDER ========== -->
        <div class="hero_wrapper">
            <div id="hero" class="rev_slider gradient_slider" style="display:none">
                <ul>
                <?php 
                   $web->showContent("slider",1,["image","header","rate","description_c1","description_c2","description_c3"]); ?>
                </ul>
            </div>
        </div>

        <!-- ========== FAVORITE ROOMS ========== -->
        <section class="white_bg" id="rooms">
            <div class="container">

                <div class="main_title mt_wave a_center">
                    <h2>OUR FAVORITE ROOMS</h2>
                </div>
                <p class="main_description a_center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>

                <div class="row"> 
                        <div class="col-md-4">
                            <article class="room">
                                <figure>
                                    <div class="price">€89 <span>/ night</span></div>
                                    <a class="hover_effect h_blue h_link" href="room.html">
                                        <img src="images/rooms/single-room.jpg" class="img-responsive" alt="Image">
                                    </a>
                                    <figcaption>
                                        <h4><a href="room.html">Single Room</a></h4>
                                        <span class="f_right"><a href="rooms-list.html" class="button btn_sm btn_blue">VIEW DETAILS</a></span>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="room">
                                <figure>
                                    <div class="price">€129 <span>/ night</span></div>
                                    <a class="hover_effect h_blue h_link" href="room.html">
                                        <img src="images/rooms/double-room.jpg" class="img-responsive" alt="Image">
                                    </a>
                                    <figcaption>
                                        <h4><a href="room.html">Double Room</a></h4>
                                        <span class="f_right"><a href="room.html" class="button btn_sm btn_blue">VIEW DETAILS</a></span>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="room">
                                <figure>
                                    <div class="price"> € 189 <span>/ night</span></div>
                                    <a class="hover_effect h_blue h_link" href="room.html">
                                        <img src="images/rooms/deluxe-room.jpg" class="img-responsive" alt="Image">
                                    </a>
                                    <figcaption>
                                        <h4><a href="room.html">Delux Room</a></h4>
                                        <span class="f_right"><a href="room.html" class="button btn_sm btn_blue">VIEW DETAILS</a></span>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    </div>
                    <div class="mt40 a_center">
                        <a class="button btn_sm btn_yellow" href="rooms-list.html">VIEW ROOMS LIST</a>
                    </div> 
            </div>
        </section>
            
        <!-- ========== FEATURES ========== -->
        <section class="lightgrey_bg" id="features">
            <div class="container">
                <div class="main_title mt_wave a_center">
                    <h2>OUR AWESOME SERVICES</h2>
                </div>
                <p class="main_description a_center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                
                <div class="row">
                    <div class="col-md-7">
                        <div data-slider-id="features" id="features_slider" class="owl-carousel">
                            <div><img src="images/restaurant.jpg" class="img-responsive" alt="Image"></div>
                            <div><img src="images/spa.jpg" class="img-responsive" alt="Image"></div>
                            <div><img src="images/conference.jpg" class="img-responsive" alt="Image"></div>
                            <div><img src="images/swimming.jpg" class="img-responsive" alt="Image"></div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="owl-thumbs" data-slider-id="features">
                            <div class="owl-thumb-item">
                                <span class="media-left"><i class="flaticon-food"></i></span>
                                <div class="media-body">
                                    <h5>Restaurant</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                </div>
                            </div>
                            <div class="owl-thumb-item">
                                <span class="media-left"><i class="flaticon-person"></i></span>
                                <div class="media-body">
                                    <h5>Spa - Beauty &amp; Health</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                </div>
                            </div>
                            <div class="owl-thumb-item">
                                <span class="media-left"><i class="flaticon-business"></i></span>
                                <div class="media-body">
                                    <h5>Conference Room</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                </div>
                            </div>
                            <div class="owl-thumb-item">
                                <span class="media-left"><i class="flaticon-beach"></i></span>
                                <div class="media-body">
                                    <h5>Swimming Pool</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 
        <!-- ========== BLOG ========== -->
        <section id="blog">
            <div class="container">
                <div class="main_title mt_wave a_center">
                    <h2>LATEST NEWS & EVENTS</h2>
                </div>
                <p class="main_description a_center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>

                <div class="row">
                    <!-- ITEM -->
                    <div class="col-md-6 col-sm-6">
                        <article class="blog_item">
                            <div class="row">
                                <div class="col-lg-5 col-md-12">
                                    <figure>
                                        <a href="blog-post.html" class="hover_effect h_blue h_link"><img src="images/blog/latest_news1.jpg" class="img-responsive" alt="Image"></a>
                                    </figure>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="main">
                                        <h3><a href="blog-post.html">Live your myth in Greece</a></h3>
                                        <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
                                        <a href="blog-post.html" class="button btn_xs btn_blue">Read More</a>
                                        <div class="info">
                                            <i class="fa fa-user" aria-hidden="true"></i><a href="#">JOHN DOE</a>
                                            <i class="fa fa-calendar" aria-hidden="true"></i><a href="#">AUGUST 13, 2015</a>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i><a href="#">4 COMMENTS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- ITEM -->
                    <div class="col-md-6 col-sm-6">
                        <article class="blog_item">
                            <div class="row">
                                <div class="col-lg-5 col-md-12">
                                    <figure>
                                        <a href="blog-post.html" class="hover_effect h_blue h_link"><img src="images/blog/latest_news2.jpg" class="img-responsive" alt="Image"></a>
                                    </figure>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="main">
                                        <h3><a href="blog-post.html">Zante Hotel in pictures</a></h3>
                                        <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
                                        <a href="blog-post.html" class="button btn_xs btn_blue">Read More</a>
                                        <div class="info">
                                            <i class="fa fa-user" aria-hidden="true"></i><a href="#">JOHN DOE</a>
                                            <i class="fa fa-calendar" aria-hidden="true"></i><a href="#">AUGUST 16, 2015</a>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i><a href="#">6 COMMENTS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- ITEM -->
                    <div class="col-md-6 col-sm-6">
                        <article class="blog_item">
                            <div class="row">
                                <div class="col-lg-5 col-md-12">
                                    <figure>
                                        <a href="blog-post.html" class="hover_effect h_blue h_link"><img src="images/blog/latest_news3.jpg" class="img-responsive" alt="Image"></a>
                                    </figure>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="main">
                                        <h3><a href="blog-post.html">Zante Hotel family party</a></h3>
                                        <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
                                        <a href="blog-post.html" class="button btn_xs btn_blue">Read More</a>
                                        <div class="info">
                                            <i class="fa fa-user" aria-hidden="true"></i><a href="#">JOHN DOE</a>
                                            <i class="fa fa-calendar" aria-hidden="true"></i><a href="#">SEPTEMBER 25, 2015</a>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i><a href="#">3 COMMENTS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- ITEM -->
                    <div class="col-md-6 col-sm-6">
                        <article class="blog_item">
                            <div class="row">
                                <div class="col-lg-5 col-md-12">
                                    <figure>
                                        <a href="blog-post.html" class="hover_effect h_blue h_link"><img src="images/blog/latest_news4.jpg" class="img-responsive" alt="Image"></a>
                                    </figure>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="main">
                                        <h3><a href="blog-post.html">Zante Hotel weddings</a></h3>
                                        <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore...</p>
                                        <a href="blog-post.html" class="button btn_xs btn_blue">Read More</a>
                                        <div class="info">
                                            <i class="fa fa-user" aria-hidden="true"></i><a href="#">JOHN DOE</a>
                                            <i class="fa fa-calendar" aria-hidden="true"></i><a href="#">OCTOBER 20, 2015</a>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i><a href="#">0 COMMENTS</a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </article>
                    </div>
                </div>
                </div>
        </section>

       
        <!-- ========== ABOUT ========== -->
        <section id="about_style_2" class="blue_bg">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="about_img_1">
                                    <div class="about_img_inner">
                                        <img src="images/caretta_caretta.jpg" class="img-responsive" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 about_img_2_col">
                                <div class="about_img_2">
                                    <div class="about_img_inner">
                                        <img src="images/zakynthos.jpg" class="img-responsive" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-12">
                        <div class="main_title mt_wave mt_white a_left">
                            <h2>TRAVEL AFRICA</h2>
                        </div>
                        <p class="main_description md_white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.
                        <br>
                        <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                    </div>
                    
                </div>
            </div>

        </section>

        <!-- ========== TESTIMONIALS ========== -->
        <section id="testimonials" class="lightgrey_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main_title mt_wave a_left">
                            <h2>OUR HAPPY CLIENTS</h2>
                        </div>
                        <p class="main_description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.
                        <br><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                    </div>

                    <div class="col-md-6">
                        <div id="testimonials_slider" class="owl-carousel">
                            <!-- ITEM -->
                            <div class="item">
                                <img src="images/users/user1.jpg" alt="Image">
                                <div class="review_content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore consequuntur, consequatur ad nesciunt nulla voluptate voluptates.</p>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="review_author">John Doe, Greece</div>
                                </div>
                            </div>
                            <!-- ITEM -->
                            <div class="item">
                                <img src="images/users/user2.jpg" alt="Image">
                                <div class="review_content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore consequuntur, consequatur ad nesciunt nulla voluptate voluptates.</p>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="review_author">Ina Aldrich, Greece</div>
                                </div>
                            </div>
                            <!-- ITEM -->
                            <div class="item">
                                <img src="images/users/user3.jpg" alt="Image">
                                <div class="review_content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore consequuntur, consequatur ad nesciunt nulla voluptate voluptates.</p>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="review_author">William Whiten, Greece</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========== PLACES ========== -->
        <section id="places">
            <div class="container">
                <div class="main_title mt_wave a_center">
                    <h2>DISCOVER AFRICA</h2>
                </div>
                <p class="main_description a_center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                <div class="row">
                    <!-- ITEM -->
                    <div class="col-md-3 col-sm-3">
                        <div class="places_item">
                            <a href="place-details.html">
                                <img src="images/places/place1.jpg" class="img-responsive" alt="Image">
                                <div class="place_name">
                                    <h2>Zakynthos</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-md-6 col-sm-6">
                        <div class="places_item">
                            <a href="place-details.html">
                                <img src="images/places/place2.jpg" class="img-responsive" alt="Image">
                                <div class="place_name">
                                    <h2>Navagio - Zakynthos</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-md-3 col-sm-3">
                        <div class="places_item">
                            <a href="place-details.html">
                                <img src="images/places/place3.jpg" class="img-responsive" alt="Image">
                                <div class="place_name">
                                    <h2>Santorini</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- ITEM -->
                    <div class="col-md-3 col-sm-3">
                        <div class="places_item">
                            <a href="place-details.html">
                                <img src="images/places/place4.jpg" class="img-responsive" alt="Image">
                                <div class="place_name">
                                    <h2>Acropolis</h2></div>
                            </a>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-md-3 col-sm-3">
                        <div class="places_item">
                            <a href="place-details.html">
                                <img src="images/places/place5.jpg" class="img-responsive" alt="Image">
                                <div class="place_name">
                                    <h2>Naxos</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-md-3 col-sm-3">
                        <div class="places_item">
                            <a href="place-details.html">
                                <img src="images/places/place6.jpg" class="img-responsive" alt="Image">
                                <div class="place_name">
                                    <h2>Rodos</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-md-3 col-sm-3">
                        <div class="places_item">
                            <a href="place-details.html">
                                <img src="images/places/place7.jpg" class="img-responsive" alt="Image">
                                <div class="place_name">
                                    <h2>Mykonos</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     
<!-- ========== CONTACT ========== -->
<section class="white_bg" id="contactus">
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
                                <h6>+250 788353869</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="contact-item">
                                <i class="fa fa-envelope"></i>
                                <h6>davejuelz@gmail.com</h6>
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