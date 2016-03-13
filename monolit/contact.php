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
        <link rel="shortcut icon" href="image/favicon.ico">
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
                        <a href="index.html"><img src="image/logo.png" alt=""></a>
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
                    <div class="dynamic-title">联系我们</div>
                    <!-- Page title  end--> 
                    <!-- content  -->
                    <div class="content">
                        <section class="parallax-section">
                            <div class="parallax-inner">
                                <div class="bg" data-bg="image/bg/8.jpg" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="container">
                                <div class="page-title">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2> 联系方式 </h2>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="creat-list">
                                                <li><a href="home.php">网站首页</a></li>
                                                <li><a href="contact.php">联系我们</a></li>
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
                                        <h2 class="section-title">公司地址</h2>
                                        <p class="text big"></p>
                                    </div>
                                </div>
                                <div class="map-box">
                                    <p class="text big">销售部：</p>
                                    <iframe src="map-xiaoshou.html" width="80%" height="420"> 
                                    </iframe> 
                                </div>
                                <div class="map-box">
                                    <p class="text big">大兴生产基地：</p>
                                    <iframe src="map-daxing.html" width="80%" height="420"> 
                                    </iframe> 
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="contact-details">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h3 class="bold-title">详细地址：</h3>
                                                </div>
                                                <div class="col-md-4">
                                                    <h4>销售部：</h4>
                                                    <ul>
                                                        <li><a href="http://j.map.baidu.com/LCZW8">北京市丰台区诺德中心4号楼10层</a></li>
                                                        <li><a href="#">(010)68688866</a></li>
                                                        <li><a href="#">bjjinao@qq.com</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <h4>大兴生产基地: </h4>
                                                    <ul>
                                                        <li><a href="http://j.map.baidu.com/BQ0W8">北京市大兴区西韩路</a></li>
                                                        <li><a href="#">(010)68222396</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- contact form -->
                                        <div class="contact-form-holder">
                                            <div id="contact-form">
                                                <div id="message"></div>
                                                <form method="post" action="php/contact.php" name="contactform" id="contactform">
                                                    <input name="name" type="text" id="name"  onClick="this.select()" value="您的姓名" >
                                                    <input name="email" type="text" id="email" onClick="this.select()" value="您的E-mail" >            
                                                    <input name="phone" type="text" id="phone" onClick="this.select()" value="您的手机号" >            
                                                    <textarea name="comments"  id="comments" onClick="this.select()" >留言内容</textarea>  
                                                    <button type="submit"  id="submit"  data-top-bottom="transform: translateY(-50px);" data-bottom-top="transform: translateY(50px);"><span>发送留言 </span></button>          										           											
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
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1" charset="utf-8"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script>
            select('nav_bar_contact');
		</script>
    </body>
</html>