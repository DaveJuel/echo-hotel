<!-- Book more service -->
<!--EDIT MODAL-->
<div class="modal fade" id="bookServiceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Service you may need</h4>
            </div>
            <div class="modal-body">
            <form id="booking_form_advanced">
                                                <?php
                                                    //start service display
                                                    $serviceList = R::getAll("SELECT name,description,price,currency FROM service");
                                                    for ($count = 0; $count < count($serviceList); $count++) {
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
                                                                <strong><?php echo $serviceList[$count]['price'] . ' ' . $serviceList[$count]['currency'] ?>
                                                                    <span class="text-muted">x</span>
                                                                </strong>
                                                            </h6>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <input type="hidden" id="previous-service-price-<?php echo $count ?>" value="0"> 
                                                            <input type="hidden" id="service-price-<?php echo $count ?>" value="<?php echo $serviceList[$count]['price'] ?>">
                                                            <input type="text" id="service-<?php echo $count ?>" class="form-control" onFocusOut="updatePrice(this);" value="0">
                                                        </div>                                                       
                                                    </div>
                                                </div>
                                                <hr>
                                                <?php
                                        }
                                        //end service display
                                        ?>
                                </form>
            </div>
            <div class="modal-footer">
                <h4 class="text-left">Total
                    <input type="hidden" id="total-price-holder" value="13.00">
                    <strong>$<span id='total-price'>13.00</span></strong>
                </h4>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="btn_trigger" class="btn btn-success">Check out</button>
            </div>
        </div>
    </div>
</div>