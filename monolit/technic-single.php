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
    <?php
        $page = $_GET['page'];
        if($page==undefined||$page==""||$page<=0||$page>20)
            header('Location: '.'404.php');
    ?>
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
                    <div class="dynamic-title">施工工艺</div>
                    <!-- Page title  end--> 
                    <!-- content  -->
                    <div class="content hor-content pad-con no-bg-con">
                        <section id="sec1">
                            <div class="container">
                                <div class="row">
                                    <!-- Articels -->
                                    <div class="col-md-8">
                                        <article>
                                            <h2 class="section-title dec-title" id="tech-title"></h2>
                                            <div class="blog-media">
                                                <div class="box-item">
                                                    <a  title="点击图片查看下一页" href="technic-single.php?page=<?php if ($page<20) echo $page+1; else echo 1?>" >
                                                    <span class="overlay"></span>
                                                    <img id="tech-image" src=""  alt="" class="respimg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="blog-text" id="tech-content">
                                            </div>
                                        </article>
                                        <ul class="creat-list">
                                        <?php if($page>1) 
                                        {?>
                                            <li><a href="technic-single.php?page=<?php echo $page-1;?>">上一页</a></li>
                                        <?php
                                        } 
                                        if($page<20) 
                                        {?>
                                            <li><a href="technic-single.php?page=<?php echo $page+1;?>">下一页</a></li>
                                        <?php
                                        }?>
                                        </ul>
                                    </div>
                                    <!-- Articels end-->
                                    <!-- sidebar -->
                                    <div class="col-md-4">
                                        <div class="sidebar">
                                            <!-- widget -->
                                            <div class="widget">
                                                <div class="searh-holder">
                                                    <form action="technic.php" class="searh-inner" method="post">
                                                        <input name="search" id="search" type="text" class="search" placeholder="网站内查找.." value="" />
                                                        <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- widget -->
                                        </div>
                                    </div>
                                    <!-- sidebar end-->
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- content  end-->	                				
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
        <script type="text/javascript" src="data/blogs/blog-<?php echo $page;?>.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/fill-tech.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script>
            select('nav_bar_technic');
            
            var title = document.getElementById("tech-title");
            title.appendChild(set_title(data.title));
            var image = document.getElementById("tech-image");
            image.setAttribute("src",data.img);
            var container = document.getElementById("tech-content");
            append_content(container,data.content);
		</script>
    </body>
</html>