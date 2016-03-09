<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>北京万宝力防水防腐技术开发有限公司</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!-- loader -->
        <div class="loader">
            <div id="movingBallG">
                <div class="movingBallLineG"></div>
                <div id="movingBallG_1" class="movingBallG"></div>
            </div>
        </div>
        <!-- loader end -->
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->	
            <header>
                <!-- header-inner  -->
                <div class="header-inner">
                    <!-- header logo -->
                    <div class="logo-holder">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                    <!-- header logo end -->
                    <!-- mobile nav button -->
                    <div class="nav-button-holder">
                        <div class="nav-button vis-m"><span></span><span></span><span></span></div>
                    </div>
                    <!-- mobile nav button end -->
                    
                    <!-- navigation  -->
                    <?php 
                        include_once("navbar.html");
                    ?>     
                    <!-- navigation  end -->
                </div>
                <!-- header-inner  end -->
                <!-- share button  -->
                <div class="show-share isShare">
                    <span>分享</span>
                    <i class="fa fa-chain-broken"></i>            
                </div>
                <!-- share  end-->
            </header>
            <!--=============== wrapper ===============-->	
            <div id="wrapper">
                <!-- content-holder  -->
                <div class="content-holder">
                    <!-- Page title -->
                    <div class="dynamic-title">Contacts</div>
                    <!-- Page title  end--> 
                    <!-- content  -->
                    <div class="content">
                        <section class="parallax-section">
                            <div class="parallax-inner">
                                <div class="bg" data-bg="images/bg/1.jpg" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="container">
                                <div class="page-title">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2> Our <strong> Contacts </strong></h2>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="creat-list">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- content end -->
                    <!-- content  -->
                    <div class="content">
                        <section>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2 class="section-title">Where to <strong>Find us </strong></h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                    </div>
                                </div>
                                <div class="map-box">
                                    <div  id="map-canvas"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="contact-details">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h3 class="bold-title">Contact  details : </h3>
                                                </div>
                                                <div class="col-md-4">
                                                    <h4>Office in New York</h4>
                                                    <ul>
                                                        <li><a href="#">27th Brooklyn New York, NY 10065</a></li>
                                                        <li><a href="#">+7(111)123456789</a></li>
                                                        <li><a href="#">yourmail@domain.com</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <h4>Find Us On : </h4>
                                                    <ul>
                                                        <li><a href="#">Facebook</a></li>
                                                        <li><a href="#">Twitter </a></li>
                                                        <li><a href="#">Instagram</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- contact form -->
                                        <div class="contact-form-holder">
                                            <div id="contact-form">
                                                <div id="message"></div>
                                                <form method="post" action="php/contact.php" name="contactform" id="contactform">
                                                    <input name="name" type="text" id="name"  onClick="this.select()" value="Name" >
                                                    <input name="email" type="text" id="email" onClick="this.select()" value="E-mail" >            
                                                    <textarea name="comments"  id="comments" onClick="this.select()" >Message</textarea>  
                                                    <button type="submit"  id="submit"  data-top-bottom="transform: translateY(-50px);" data-bottom-top="transform: translateY(50px);"><span>Send Message </span></button>          										           											
                                                </form>
                                            </div>
                                        </div>
                                        <!-- contact form  end-->
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- content end-->      
                    <!-- content footer-->              
                    <?php 
                        include_once("footer.html");
                    ?>        
                    <!-- content footer end -->
                    <!-- share  -->
                    <div class="share-inner" id="ckepop">
                        <div class="share-container  isShare"  data-share="[]">
                                <i class="fa"><a class="jiathis_button_weixin"></a></i>
                                <i class="fa"><a class="jiathis_button_qzone"></a></i>
                                <i class="fa"><a class="jiathis_button_tsina"></a></i>
                                <i class="fa"><a class="jiathis_button_tqq"></a></i>
                                <i class="fa"><a class="jiathis_button_renren"></a></i>
                                <i class="fa"><a class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" ></a></i>
                        </div>
                        <div class="close-share"></div>
                    </div>
                    <!-- share end -->
                </div>
                <!-- content-holder  end-->
            </div>
            <!-- wrapper end -->
            <!-- Fixed footer -->
            <footer class="fixed-footer">
                <div class="footer-social" id="ckepop">
                    <ul>
                        <li><i class="fa"><a class="jiathis_button_weixin"></a></i></li>
                        <li><i class="fa"><a class="jiathis_button_qzone"></a></i></li>
                        <li><i class="fa"><a class="jiathis_button_tsina"></a></i></li>
                        <li><i class="fa"><a class="jiathis_button_tqq"></a></i></li>
                        <li><i class="fa"><a class="jiathis_button_renren"></a></i></li>
                        <li><i class="fa"><a class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" ></a></i></li>
                    </ul>
                </div>
                <!-- Header  title --> 
                <div class="footer-title">
                    <h2><a  href="#"></a></h2>
                </div>
                <!-- Header  title  end-->
            </footer>
            <!-- Fixed footer end-->
        </div>
        <!-- Main end -->
        <!--=============== google map ===============-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>  
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1" charset="utf-8"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script type="text/javascript" src="js/map.js"></script>
        <script>
            select('nav_bar_contact');
		</script>
    </body>
</html>