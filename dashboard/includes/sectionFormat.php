<?php 
/**
 * This file is responsible for the display of sections
*/
//TODO: Add implementation
class sectionFormat{
    public $images = [
        "../images/defaults/mechanics-2170638_1920.jpg",
        "../images/defaults/mockup-654585_1280.jpg",
        "../images/defaults/statistic-1820320_1280.jpg",
        "../images/defaults/tetris-749690_1920.jpg",
    ];
      /**
     * <h1>slideFormat</h1>
     * <p>Making the web slide format</p>
     * @param String $bk_source The source of the background image
     * @param String $title The title of the image
     * @param String $details description of the slide
     */
    public function showSlider($bk_source, $title, $details)
    {
        if (!isset($bk_source)) {
            $randImage = rand(0, 3);
            $bk_source = $this->images[$randImage];
        }
        echo '<li data-transition="fade">
                    <!-- MAIN IMAGE -->
                    <img src="' . $bk_source . '"
                         alt="Image"
                         title="slider_bg1-1"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         data-bgparallax="10"
                         class="rev-slidebg"
                         data-no-retina="">';
        //-- LAYER NR. 1 --
        echo ' <div class="tp-caption tp-resizeme"
                         data-x="center"
                         data-hoffset=""
                         data-y="middle"
                         data-voffset="[\'-30\',\'-30\',\'-30\',\'-30\']"
                         data-responsive_offset="on"
                         data-fontsize="[\'60\',\'50\',\'40\',\'30\']"
                         data-lineheight="[\'60\',\'50\',\'40\',\'30\']"
                         data-whitespace="nowrap"
                         data-frames=\'[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]\'
                         style="z-index: 5; color: #fff; font-weight: 900;">' . $title . '</div>';
        //-- LAYER NR. 2 --

        echo '<div class="tp-caption tp-resizeme"
                         data-x="center"
                         data-hoffset=""
                         data-y="middle"
                         data-voffset="[\'45\',\'45\',\'45\',\'45\']"
                         data-fontsize="[\'16\', \'16\', \'14\', \'12\']"
                         data-lineheight="[\'16\', \'16\',\'14\', \'12\']"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="opacity:0;s:300;e:Power2.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                         data-start="3000"
                         data-splitin="chars"
                         data-splitout="none"
                         data-basealign="slide"
                         data-responsive="off"
                         data-elementdelay="0.05"
                         style="z-index: 9; font-weight: 400; color: rgba(255, 255, 255, 0.8); font-family: Raleway;">' . $details . '</div>
                </li>';
    }  

    public function showSlider_theme2($bk_source,$title,$rating,$description1,$description2,$description3){
        if (!isset($bk_source)) {
            $randImage = rand(0, 3);
            $bk_source = $this->images[$randImage];
        }
        // <!-- ========== REVOLUTION SLIDER ========== -->
        echo '<li data-index="rs-214" 
                        data-delay="1000" 
                        data-transition="fade" 
                        data-slotamount="7" 
                        data-easein="default" 
                        data-easeout="default" 
                        data-masterspeed="100" 
                        data-rotate="0" 
                        data-saveperformance="off" 
                        data-title="Slide" 
                        data-description="">
                        <!-- IMAGE -->
                        <img src="'.$bk_source.'" alt="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                        <!-- LAYER NR. 1 --> 
                         <div class="tp-caption"
                             data-x="[\'left\',\'left\',\'left\',\'center\']"
                             data-hoffset="[\'15\',\'15\',\'15\',\'0\']" 
                             data-y="[\'190\',\'200\',\'200\',\'200\']"
                             data-responsive_offset="on" 
                             data-fontsize="[\'40\',\'28\',\'28\',\'22\']" 
                             data-lineheight="[\'40\',\'28\',\'28\',\'22\']"
                             data-whitespace="nowrap"
                             data-frames=\'[{"delay":0,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]\'
                             style="color: #fff; font-weight: 700; font-family: \'Raleway\', sans-serif;; ">'.$title.', <span id="text_rotating">'.$rating.'</span>
                        </div>
                        <!-- LAYER NR. 2 --> 
                        <div class="tp-caption tp_m_title"
                             data-visibility="[\'on\',\'on\',\'off\',\'off\']"
                             data-x="[\'left\',\'left\',\'left\',\'left\']" 
                             data-hoffset="[\'15\',\'15\',\'15\',\'15\']" 
                             data-y="[\'280\',\'middle\',\'middle\',\'middle\']" 
                             data-voffset="[\'-60\',\'-60\',\'-60\',\'-60\']" 
                             data-fontsize="[\'28\',\'28\',\'23\',\'23\']" 
                             data-lineheight="[\'28\',\'28\',\'23\',\'23\']" 
                             data-frames=\'[{"delay":1000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]\'><i class="fa fa-star-o"></i>
                        </div>
                        
                        <!-- LAYER NR. 3 --> 
                        <div class="tp-caption tp_m_title" 
                             data-visibility="[\'on\',\'on\',\'off\',\'off\']"
                             data-x="[\'left\',\'left\',\'left\',\'left\']" 
                             data-hoffset="[\'55\',\'45\',\'45\',\'45\']" 
                             data-y="[\'280\',\'middle\',\'middle\',\'middle\']" 
                             data-voffset="[\'-60\',\'-60\',\'-60\',\'-60\']" 
                             data-responsive_offset="on" 
                             data-fontsize="[\'28\',\'28\',\'23\',\'23\']" 
                             data-lineheight="[\'28\',\'28\',\'23\',\'23\']" 
                             data-frames=\'[{"delay":1150,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]\'><i class="fa fa-star-o"></i>
                        </div>
                        <!-- LAYER NR. 4 --> 
                        <div class="tp-caption tp_m_title"
                             data-visibility="[\'on\',\'on\',\'off\',\'off\']"
                             data-x="[\'left\',\'left\',\'left\',\'left\']" 
                             data-hoffset="[\'95\',\'75\',\'75\',\'75\']" 
                             data-y="[\'280\',\'middle\',\'middle\',\'middle\']" 
                             data-voffset="[\'-60\',\'-60\',\'-60\',\'-60\']" 
                             data-responsive_offset="on" 
                             data-fontsize="[\'28\',\'28\',\'23\',\'23\']" 
                             data-lineheight="[\'28\',\'28\',\'23\',\'23\']"
                             data-frames=\'[{"delay":1300,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]\'><i class="fa fa-star-o"></i>
                        </div>
                        <!-- LAYER NR. 5 --> 
                        <div class="tp-caption tp_m_title"
                             data-visibility="[\'on\',\'on\',\'off\',\'off\']"
                             data-x="[\'left\',\'left\',\'left\',\'left\']" 
                             data-hoffset="[\'135\',\'105\',\'105\',\'105\']" 
                             data-y="[\'280\',\'middle\',\'middle\',\'middle\']"
                             data-voffset="[\'-60\',\'-60\',\'-60\',\'-60\']" 
                             data-responsive_offset="on" 
                             data-fontsize="[\'28\',\'28\',\'23\',\'23\']" 
                             data-lineheight="[\'28\',\'28\',\'23\',\'23\']"
                             data-frames=\'[{"delay":1450,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]\'><i class="fa fa-star-o"></i>
                        </div>
                        <!-- LAYER NR. 6 --> 
                        <div class="tp-caption tp_m_title" 
                             data-visibility="[\'on\',\'on\',\'off\',\'off\']"
                             data-x="[\'left\',\'left\',\'left\',\'left\']" 
                             data-hoffset="[\'175\',\'135\',\'135\',\'135\']" 
                             data-y="[\'280\',\'middle\',\'middle\',\'middle\']"
                             data-voffset="[\'-60\',\'-60\',\'-60\',\'-60\']" 
                             data-responsive_offset="on" 
                             data-fontsize="[\'28\',\'28\',\'23\',\'23\']"
                             data-lineheight="[\'28\',\'28\',\'23\',\'23\']"
                             data-frames=\'[{"delay":1600,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]\'><i class="fa fa-star-o"></i>
                        </div>
                        <!-- LAYER NR. 7 --> 
                        <div class="tp-caption tp_m_title"
                             data-visibility="[\'on\',\'on\',\'off\',\'off\']"
                             data-x="left" 
                             data-hoffset="[\'215\',\'175\',\'175\',\'175\']" 
                             data-y="[\'280\',\'middle\',\'middle\',\'middle\']"
                             data-voffset="[\'-60\',\'-60\',\'-60\',\'-60\']" 
                             data-responsive_offset="on" 
                             data-fontsize="[\'30\',\'30\',\'25\',\'25\']" 
                             data-lineheight="[\'30\',\'30\',\'25\',\'25\']"
                             data-frames=\'[{"delay":1750,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]\'>Star Luxury Hotel
                        </div>
                        <!-- LAYER NR. 8 --> 
                        <div class="tp-caption tp_s_title"
                             data-visibility="[\'on\',\'on\',\'on\',\'off\']"
                             data-x="[\'left\',\'left\',\'left\',\'left\']" 
                             data-hoffset="[\'15\',\'15\',\'15\',\'15\']" 
                             data-y="[\'350\',\'middle\',\'top\',\'top\']"
                             data-voffset="[\'50\',\'50\',\'300\',\'300\']" 
                             data-responsive_offset="on" 
                             data-fontsize="[\'20\',\'20\',\'20\',\'15\']"
                             data-lineheight="[\'20\',\'20\',\'20\',\'15\']"
                             data-frames=\'[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]\'><i class="fa fa-check-square-o"></i>'.$description1.'
                        </div>
                        <!-- LAYER NR. 9 --> 
                        <div class="tp-caption tp_s_title"
                             data-visibility="[\'on\',\'on\',\'on\',\'off\']"
                             data-x="[\'left\',\'left\',\'left\',\'left\']" 
                             data-hoffset="[\'15\',\'15\',\'15\',\'15\']" 
                             data-y="[\'400\',\'middle\',\'top\',\'top\']"
                             data-voffset="[\'80\',\'100\',\'350\',\'350\']" 
                             data-responsive_offset="on" 
                             data-fontsize="[\'20\',\'20\',\'20\',\'15\']"
                             data-lineheight="[\'20\',\'20\',\'20\',\'15\']" 
                             data-frames=\'[{"delay":2200,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]\'><i class="fa fa-check-square-o"></i> '.$description2.'
                        </div>
                        <!-- LAYER NR. 10 --> 
                        <div class="tp-caption tp_s_title"
                             data-visibility="[\'on\',\'on\',\'on\',\'off\']"
                             data-x="[\'left\',\'left\',\'left\',\'left\']" 
                             data-hoffset="[\'15\',\'15\',\'15\',\'15\']" 
                             data-y="[\'450\',\'middle\',\'top\',\'top\']"
                             data-voffset="[\'110\',\'150\',\'400\',\'400\']" 
                             data-responsive_offset="on" 
                             data-fontsize="[\'20\',\'20\',\'20\',\'15\']" 
                             data-lineheight="[\'20\',\'20\',\'20\',\'15\']"
                             data-frames=\'[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]\'><i class="fa fa-check-square-o"></i> '.$description3.'
                        </div>
                        <!-- LAYER NR. 11 --> 
                        <div class="tp-caption f_item"
                             data-visibility="[\'on\',\'off\',\'off\',\'off\']"
                             data-x="[\'left\',\'left\',\'left\',\'left\']" 
                             data-hoffset="[\'15\',\'15\',\'15\',\'15\']" 
                             data-y="[\'610\',\'610\',\'610\',\'610\']"
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-frames=\'[{"delay":3000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]\'>
                            <div class="icon_box">
                                <i class="fa fa-wifi"></i>
                            </div>
                            <div class="text_box">
                                ENJOY FREE WI-FI
                                <span>IN THE WHOLE HOTEL</span>
                            </div>
                        </div>
                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption f_item"
                             data-visibility="[\'on\',\'off\',\'off\',\'off\']"
                             data-x="[\'left\',\'left\',\'left\',\'left\']" 
                             data-hoffset="[\'265\',\'265\',\'265\',\'265\']" 
                             data-y="[\'610\',\'610\',\'610\',\'610\']"
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-frames=\'[{"delay":3000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]\'>
                            <div class="icon_box">
                                <i class="fa fa-television"></i>
                            </div>
                            <div class="text_box">
                                CABLE TELEVISION
                                <span>FREE CABLE TV</span>
                            </div>
                        </div>
                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption f_item"
                             data-visibility="[\'on\',\'off\',\'off\',\'off\']"
                             data-x="[\'left\',\'left\',\'none\',\'left\']" 
                             data-hoffset="[\'515\',\'515\',\'515\',\'515\']" 
                             data-y="[\'610\',\'610\',\'610\',\'610\']"
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-frames=\'[{"delay":3000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]\'>
                            <div class="icon_box">
                                <i class="flaticon-tool"></i>
                            </div>
                            <div class="text_box">
                                RESTAURANT
                                <span>BAR & RESTAURANT</span>
                            </div>
                        </div> 
                        <!-- LAYER NR. 14 --> 
                        <div class="tp-caption" 
                             data-x="[\'right\',\'right\',\'center\',\'center\']" 
                             data-hoffset="[\'15\',\'15\',\'0\',\'0\']" 
                             data-y="[\'200\',\'160\',\'500\',\'400\']"
                             data-width="[368, 368, 768, 480]" 
                             data-height="[auto, auto, auto, auto]"
                             data-frames=\'[{"delay":3000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"}]\' 
                             style="z-index: 99;">
                            <!-- ========== BOOKING FORM ========== -->
                            <div class="vbf">
                                <h2 class="form_title"><i class="fa fa-calendar"></i> BOOK ONLINE</h2>
                                <form id="booking-form" class="inner">
                                    <div class="form-group">
                                        <input class="form-control" name="booking-name" placeholder="Enter Your Name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="booking-email" placeholder="Enter Your Email Address" type="email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="booking-phone" placeholder="Enter Your Phone Number" type="text">
                                    </div>
                                    <div class="form-group">
                                        <div class="form_select">
                                            <select name="booking-roomtype" class="form-control" title="Specify purpose of your visit" data-header="Specify the purpose of your visit">
                                                <option value="Single Room">Tourism</option>
                                                <option value="Double Room">Study tour</option>
                                                <option value="Deluxe Room">Attending a training </option>
                                                <option value="Double Room">Attending an International meeting</option>
                                                <option value="Deluxe Room">Meeting high ranked personalities</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                         <div class="form_select">
                                               
                                            </div>
                                    </div>
                                    
                                       <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                        <div class="form-group">
                                             <div class="form_select">
                                                <select name="booking-country" class="form-control" title="Visit Country" data-header="Country You Wish to Visit" data-live-search="true" data-size="5">
                                                   
                                                    <option value="Rwanda">Rwanda</option>
                                                   
                                                </select>
                                            </div>
                                        
                                    </div>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                        <div class="input-group">
                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control md_noborder_right" name="booking-checkin" placeholder="Arrival Date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                        <div class="input-group">
                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control" name="booking-checkout" placeholder="Departure Date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button btn_lg btn_blue btn_full" type="submit">BOOK A ROOM NOW</button>
                                    <div class="a_center mt10">
                                        <a href="#" class="a_b_f">Advanced Booking Form</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- LAYER NR. 15 --> 
                        <div class="tp-caption"
                             data-visibility="[\'on\',\'on\',\'off\',\'off\']"
                             data-x="[\'center\',\'center\',\'center\',\'center\']" 
                             data-hoffset="[\'0\',\'0\',\'0\',\'0\']" 
                             data-y="[\'bottom\',\'bottom\',\'bottom\',\'bottom\']" 
                             data-voffset="[\'20\',\'20\',\'20\',\'20\']" 
                             data-width="none" 
                             data-height="none" 
                             data-whitespace="nowrap" 
                             data-transform_idle="o:1;" 
                             data-transform_in="opacity:0;s:500;e:Power2.easeInOut;" 
                             data-transform_out="opacity:0;s:300;s:300;" 
                             data-start="8000" 
                             data-splitin="none" 
                             data-splitout="none" 
                             data-actions=\'[{"event":"click","action":"scrollbelow","offset":"px"}]\' 
                             data-responsive_offset="on" 
                             data-startslide="0" 
                             data-endslide="2" 
                             style="z-index: 11; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: 400; color: rgba(245, 245, 245, 1.00);text-transform:left;cursor:pointer;">
                            <div class="rs-looped rs-slideloop" data-easing="Power2.easeInOut" data-speed="1" data-xs="0" data-xe="0" data-ys="-5" data-ye="5"><i class="fa fa-angle-down"></i></div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
       ';
    }

    /**
     * <h1>showFeature</h1>
     * <p>Show feature section</p>
     * @param $featureList The list of features
    */
    public function showFeature($featureList)
    {
        echo '<div class = "col-md-7">'
            . '<div data-slider-id = "features" id = "features_slider" class = "owl-carousel">';
        for ($count = 0; $count < count($featureList); $count++) {
            //image display
            /*
            TODO: Need to show image that is related to the feature.
            */
            $randImage = rand(0, 3);
            $image = $this->images[$randImage];
            $this->showImage($image);
        }
        echo '</div>
        </div>';
        //description display
        echo '<div class="col-md-5">
                <div class="owl-thumbs" data-slider-id="features">';
        for ($count = 0; $count < count($featureList); $count++) {
            $title = $featureList[$count][1];
            $description = $featureList[$count][2];
            $this->showDescription($title, $description);
        }
        echo '</div>
            </div>';
    }

    private function showImage($image)
    {
        echo '
        <div><img src = "' . $image . '" class = "img-responsive" alt = "Image"></div>
        ';
    }

    private function showDescription($title, $description)
    {
        echo '<div class="owl-thumb-item">
                        <span class="media-left"><i class="flaticon-food"></i></span>
                        <div class="media-body">
                            <h5>' . $title . '</h5>
                            <p>' . $description . '</p>
                        </div>
                    </div>';
    }

}