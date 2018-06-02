<?php
require '../includes/interface.php';
?>
<form id="booking-form" onsubmit="return false;" class="inner">
    <div class='form-group'>
        <input type='hidden'  name='article' id='article_id' value='6'>
    </div>
    <div class="form-group">
        <input class="form-control" id="add_name" name="booking-name" placeholder="Enter Your Name" type="text">
    </div>
    <div class="form-group">
        <input class="form-control" id="add_email" name="booking-email" placeholder="Enter Your Email Address" type="email">
    </div>
    <div class="form-group">
        <input class="form-control" id="add_phone" name="booking-phone" placeholder="Enter Your Phone Number" type="text">
    </div>
    <div class="form-group">
        <div class="form_select">
            <select name="booking-purpose" id="add_visit_purpose" class="form-control" title="Specify the service" data-header="Specify the service">
            <option>Select service</option>
            <?php
$serviceList = R::getCol("SELECT name FROM service");
for ($count = 0; null !== $serviceList && $count < count($serviceList); $count++) {
    echo "<option value='" . $serviceList[$count] . "'>" . $serviceList[$count] . "</option>";
}
?>
            </select>
        </div>
    </div>
    <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
        <div class="input-group">
            <div class="form_date">
                <input type="date" class="form-control md_noborder_right" id="add_arrival_date" name="booking-checkin" title="Arrival Date" placeholder="Arrival Date">
            </div>
        </div>
    </div>
    <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
        <div class="input-group">
            <div class="form_date">
                <input type="date" class="form-control" name="booking-checkout" id="add_departure_date" title="Departure Date" placeholder="Departure Date">
            </div>
        </div>
    </div>
    <!-- <button class="button btn_lg btn_blue btn_full" data-toggle="modal" data-target="#bookServiceModal"  onclick="saveArticle('../dashboard');" id="btn-book-basic" type="submit">BOOK NOW</button> -->
    <button class="button btn_lg btn_blue btn_full" data-toggle="modal" data-target="#bookServiceModal" id="btn-book-basic" type="submit">BOOK NOW</button>
    <div id="board-notification"></div>
</form>
