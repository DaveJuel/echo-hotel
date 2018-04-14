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
            <select name="booking-purpose" id="add_visit_purpose" class="form-control" title="Specify purpose of your visit" data-header="Specify the purpose of your visit">
            <option>Select purpose of visit</option>
            <?php 
                   $visitPurposeList=R::getCol("SELECT title FROM visit_purpose");
                   for($count=0;$count< count($visitPurposeList);$count++){
                    echo "<option value='" . $visitPurposeList[$count]. "'>" . $visitPurposeList[$count] . "</option>";
                   }
                  ?>
            </select>
        </div>
    </div>
    <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
    
            <div class="form_select">
            <select name="booking-origin-country" id="add_from_country" class="form-control" title="Departure country" data-header="Country You're coming from" data-live-search="true" data-size="5">
            <option>Select origin country</optin>
            <?php
                $main->listCountries();
             ?>
        </select>
            </div>
    </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
        <div class="form-group">
                <div class="form_select">
                <select name="booking-visit-country" id="add_to_country" class="form-control" title="Visit Country" data-header="Country You Wish to Visit" data-live-search="true" data-size="5">
                  <option>Select country to visit</option>
                  <?php 
                   $visitCountryList=R::getCol("SELECT name FROM visit_country");                   
                   for($count=0;$count< count($visitCountryList);$count++){
                    echo "<option value='" . $visitCountryList[$count]. "'>" . $visitCountryList[$count] . "</option>";
                   }
                  ?>
                </select>
            </div>
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
    <button class="button btn_lg btn_blue btn_full" onclick="saveArticle('../dashboard');" id="btn-book-basic" type="submit">BOOK A ROOM NOW</button>
    <div class="a_center mt10">
        <a href="#" class="a_b_f">Advanced Booking Form</a>
    </div>
    <div id="board-notification"></div>
</form>
