 
 <!-- ========== HEADER ========== -->
 <header class="fixed transparent">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand light" href="index.html">
                        <img src="images/logo_light.svg" height="32" alt="<?php echo $main->appName;?>">
                    </a>
                    <a class="navbar-brand dark nodisplay" href="index.html">
                        <img src="images/logo.svg" height="32" alt="<?php echo $main->appName;?>">
                    </a>
                </div>
                <nav id="main_menu" class="mobile_menu navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="mobile_menu_title" style="display:none;">MENU</li>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="#">EVENTS</a></li>
                        <li><a href="#">OUR SERVICES</a></li>
                        <li><a href="#contactus">CONTACT US</a></li>
                        <li class="menu_button">
                            <a href="../dashboard/views/login.php" class="button  btn_yellow"><i class="fa fa-sign-in"></i>SIGN IN</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>