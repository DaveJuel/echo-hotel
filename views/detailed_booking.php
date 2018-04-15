<?php require '../dashboard/includes/interface.php';?>

<?php
$title = "Booking";
ob_start();
?>
 <!-- =========== PAGE TITLE ========== -->
    <div class="page_title gradient_overlay" style="background: url(../images/uploaded/710703350324.jpg);">
            <div class="container">
                <div class="inner">
                    <h1>Booking Form</h1>                    
                </div>
            </div>
    </div>

     <!-- =========== MAIN ========== -->
     <main id="booking_page">
            <div class="container">
                <div class="row">

                    <div class="col-md-8">
                        <div id="booking_advanced">
                            <!-- ========== BOOKING FORM ========== -->
                            <div class="row">
                                <form id="booking_form_advanced">
                                    <div class="col-xs-12">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <h5>
                                                                <span class=""></span>Other services you may need</h5>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <button type="button" class="btn btn-primary btn-sm btn-block">
                                                                <span class="glyphicon glyphicon-share-alt"></span>Other services
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <?php 
                                                //start service display
                                                $serviceList=R::getAll("SELECT name,description,price,currency FROM service");
                                                for($count=0;$count<count($serviceList);$count++){                                                
                                                ?>
                                                <div class="row">
                                                    <div class="col-xs-8">
                                                        <h5 class="product-name">
                                                            <span class="fa fa-shopping-basket"></span>
                                                            <strong><?php echo $serviceList[$count]['name'] ?></strong>
                                                        </h5>
                                                        <h6>
                                                            <small><?php echo $serviceList[$count]['description'] ?></small>
                                                        </h6>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <div class="col-xs-6 text-right">
                                                            <h6>
                                                                <strong><?php echo $serviceList[$count]['price'].' '.$serviceList[$count]['currency'] ?>
                                                                    <span class="text-muted">x</span>
                                                                </strong>
                                                            </h6>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <input type="text" class="form-control input-sm" value="1">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <button type="button" class="btn btn-link btn-xs">
                                                                <input type="checkbox" class="btn">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <?php 
                                                 }
                                                //end service display
                                                ?>
                                                <div class="row">
                                                    <div class="text-center">
                                                        <div class="col-xs-9">
                                                            <h6 class="text-right">Added items?</h6>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <button type="button" class="btn btn-default btn-sm btn-block">
                                                                Update cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <div class="row text-center">
                                                    <div class="col-xs-9">
                                                        <h4 class="text-right">Total
                                                            <strong>$50.00</strong>
                                                        </h4>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="button btn_blue pull-right">
                                            <i class="fa fa-calendar-check-o" aria-hidden="true"></i> BOOK A ROOM NOW </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="special_offers">
                            <div class="main_title a_left upper">
                                <h2>Special Offers</h2>
                            </div>
                            <article class="room mb40">
                                <figure>
                                    <a href="room.html" class="hover_effect h_blue h_link">
                                        <img src="images/rooms/special1.jpg" class="img-responsive" alt="Image">
                                    </a>
                                    <figcaption>
                                        <h4>
                                            <a href="room.html">Single Room</a>
                                        </h4>
                                        <div class="price">€ 89
                                            <span> / night</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="room mb40">
                                <figure>
                                    <a href="room.html" class="hover_effect h_blue h_link">
                                        <img src="images/rooms/special2.jpg" class="img-responsive" alt="Image">
                                    </a>
                                    <figcaption>
                                        <h4>
                                            <a href="room.html">Double Room</a>
                                        </h4>
                                        <div class="price">€ 129
                                            <span> / night</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="room mb40">
                                <figure>
                                    <a href="room.html" class="hover_effect h_blue h_link">
                                        <img src="images/rooms/special3.jpg" class="img-responsive" alt="Image">
                                    </a>
                                    <figcaption>
                                        <h4>
                                            <a href="room.html">Delux Room</a>
                                        </h4>
                                        <div class="price">€ 189
                                            <span> / night</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    </div>

                </div>
            </div>
        </main> 
<?php $content = ob_get_clean();?>
<?php include '../layout/layout_main.php';?>