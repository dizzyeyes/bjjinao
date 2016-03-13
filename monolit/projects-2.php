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
                    <div class="dynamic-title">主要工程</div>
                    <!-- Page title  end--> 
                    <!-- content  -->
                    <!-- filter -->
                    <div class="content  hor-content    pad-con no-bg-con">
                        <div class="filter-holder round-filter ver-filter">
                            <div class="gallery-filters hid-filter">
                                <a href="#" class="gallery-filter transition2 gallery-filter_active" data-filter="*">全部</a>
                                <a href="#" class="gallery-filter transition2" data-filter=".mainproj">主要工程</a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="filter-button">筛选</div>
                            <div class="count-folio round-counter">
                                <div class="num-album"></div>
                                <div class="all-album"></div>
                            </div>
                        </div>
                        <!-- filter end-->                  
                        <!--=============== portfolio holder ===============-->
                        <div class="gallery-items   three-columns grid-small-pad  mob-pa">
                        <?php 
                        //$namelist=array("","亦庄五环桥","保利垄上","加州水郡","回龙观龙泽苑小区","国美第一城","城际高铁·郴州站","庄维花园1","廊坊富士康","润泽庄园","涵洞","珠江绿洲","运河岸上的院子","通典铭居","金地格林小镇","金隅丽港城","首都机场三号航站楼","黄粱梦粮库");
                        $namelist=array("","亦庄五环桥","加州水郡","回龙观龙泽苑小区","国美第一城","庄维花园","润泽庄园","珠江绿洲","运河岸上的院子","通典铭居","金地格林小镇","金隅丽港城","首都机场三号航站楼");
                        $values = array("mainproj");
                        $count = count($namelist)-1;
                        $folder = "image/folio/projects/projects-2/thumbs";
                        for($item = 1; $item <=$count; $item++)
                        {
                            echo "<!-- ".$item." -->";
                        ?>                            
                            <div class="gallery-item  <?php echo $values[0]; ?>">
                                <div class="grid-item-holder">
                                    <img  src="<?php echo $folder.'/'.$namelist[$item].'.jpg'?>"    alt="">
                                    <div class="port-desc-holder">
                                        <div class="port-desc">
                                            <div class="grid-item">
                                                <h3><a href="#"><?php echo $namelist[$item];?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        <?php 
                            echo "<!-- ".$item." end-->";
                        }
                        ?>
                        </div>
                        <!-- end gallery items -->               
                    </div>
                    <!-- content end -->
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
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1" charset="utf-8"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script>
            select('nav_bar_projects');
		</script>
    </body>
</html>