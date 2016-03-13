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
                    <div class="dynamic-title">应用工程</div>
                    <!-- Page title  end--> 
                    <!-- content  -->
                    <div class="content">
                        <section class="parallax-section">
                            <div class="parallax-inner">
                                <div class="bg" data-bg="image/bg/10.jpg" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="container">
                                <div class="page-title">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2> 应用工程案例</h2>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="creat-list">
                                                <li><a href="home.php">网站首页</a></li>
                                                <li><a href="projects.php">应用工程</a></li>
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
                                        <h2 class="section-title art1">工程案例介绍</h2>
                                        <p class="text art1 big">人类所有的防水问题，万宝力都有责任去解决。作为系统防水解决方案的提供者，万宝力将各种金奥专项防水系统成功应用于包括房屋建筑、高速公路、城市道桥、地铁及城市轨道、高速铁路、机场、水利设施等众多领域。特别是在中国人民大会堂及五棵松体育馆等的2008年北京奥运场馆等中国标志性建筑和大量高铁、地铁等国家重大基础设施建设项目中，金奥防水系统优良的应用效果，获得用户及社会各界高度评价。</p>
                                    </div>
                                </div>
                                <div class="services-holder">
                                    <!-- 1 -->
                                    <a class="serv-item" href="#ser1" title="点击查看介绍">
                                        <div class="serv-item-inner">
                                            <img  src="image/folio/overview/projects-1.jpg"   alt="">
                                            <div class="ser-title">
                                                <h3>重点工程</h3>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- 1 end-->
                                    <!-- 2 -->
                                    <a class="serv-item" href="#ser2" title="点击查看介绍">
                                        <div class="serv-item-inner">
                                            <img  src="image/folio/overview/projects-2.jpg"   alt="">
                                            <div class="ser-title">
                                                <h3>主要工程</h3>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- 2 end -->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- serv-post  -->     
                                        <div class="serv-post">
                                            <!-- 1 -->
                                            <div id="ser1" class="serv-details">
                                                <h3>重点工程</h3>
                                                <p class="text">万宝力公司自成立起，承接重大重点工程项目数十起，其中包括：</p>
                                                <ul class="ser-list">
                                                <?php                                                 
                                                $list = array("中南海工程","中南海机要局办公楼","杏林山庄","公安部大楼","中国解放军总医院","五棵松体育馆","奥运媒体村","清华大学","京九铁路","太原卫星发射基地","。。。");
                                                foreach ($list as $item)
                                                {
                                                    echo "<li>".$item."</li>";
                                                }
                                                ?>
                                                </ul>
                                                <div class="custom-link-holder">
                                                    <a href="projects-1.php" class="btn anim-button"  data-top-bottom="transform: translateY(-50px);" data-bottom-top="transform: translateY(50px);"><span>查看详情</span><i class="fa fa-long-arrow-right"></i></a>	
                                                </div>
                                            </div>
                                            <!-- 1 end --> 
                                            <!-- 2 -->
                                            <div id="ser2" class="serv-details">
                                                <h3>主要工程</h3>
                                                <p></p>
                                                <ul class="ser-list">
                                                <?php                                                 
                                                $list = array("亦庄五环桥","保利垄上","加州水郡","回龙观龙泽苑小区","国美第一城","城际高铁·郴州站","庄维花园1","廊坊富士康","润泽庄园","涵洞","珠江绿洲","运河岸上的院子","通典铭居","金地格林小镇","金隅丽港城","首都机场三号航站楼","黄粱梦粮库","。。。");
                                                foreach ($list as $item)
                                                {
                                                    echo "<li>".$item."</li>";
                                                }
                                                ?>
                                                </ul>
                                                <div class="custom-link-holder">
                                                    <a href="projects-2.php" class="btn anim-button"  data-top-bottom="transform: translateY(-50px);" data-bottom-top="transform: translateY(50px);"><span>查看详情</span><i class="fa fa-long-arrow-right"></i></a>	
                                                </div>
                                            </div>
                                            <!-- 2 end --> 
                                        </div>
                                        <!-- serv-post end-->
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- content end -->
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