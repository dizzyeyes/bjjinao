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
                    <div class="dynamic-title">Portfolio Full width</div>
                    <!-- Page title  end--> 
                    <!-- content  -->
                    <!-- filter -->
                    <div class="content  hor-content    pad-con no-bg-con">
                        <div class="filter-holder round-filter ver-filter">
                            <div class="gallery-filters hid-filter">
                                <a href="#" class="gallery-filter transition2 gallery-filter_active" data-filter="*">全部</a>
                                <a href="#" class="gallery-filter transition2" data-filter=".important">重要工程</a>
                                <a href="#" class="gallery-filter transition2" data-filter=".keyproj">重点工程</a>
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
                        $namelist=array("","中南海工程-1","中南海工程-2","中南海机要局办公楼","杏林山庄","公安部大楼","中国解放军总医院","五棵松体育馆","奥运媒体村","清华大学","京九铁路","太原卫星发射基地");
                        $scriptlist=array("","中南海工程-1","中南海工程-2","中南海机要局办公楼","杏林山庄","公安部大楼","中国解放军总医院","五棵松体育馆","奥运媒体村","清华大学","固安站 牛驼站 霸州站 新中驿站 新镇站 文安站 君庄站 河间西站 任丘站 肃宁站 饶阳站 达官厅站","太原卫星发射基地");
                        $valuelist=array(6,11);
                        $values = array("important","keyproj");
                        $count=$valuelist[1];
                        $folder = "image/folio/projects/projects-1/thumbs";
                        for($item = 1; $item <=$count; $item++)
                        {
                            echo "<!-- ".$item." -->";
                        ?>                            
                            <div class="gallery-item  <?php if($item<=$valuelist[0]) echo $values[0]; else echo $values[1];?>">
                                <div class="grid-item-holder">
                                    <img  src="<?php echo $folder.'/'.$namelist[$item].'.jpg'?>"    alt="">
                                    <div class="port-desc-holder">
                                        <div class="port-desc">
                                            <div class="grid-item">
                                                <h3><a href="#"><?php echo $namelist[$item];?></a></h3>
                                                <span><?php echo $scriptlist[$item];?></span>
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