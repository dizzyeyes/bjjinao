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
                    <div class="dynamic-title">施工工艺</div>
                    <!-- Page title  end--> 
                    <!-- content  -->
                    <div class="content">
                        <section class="parallax-section">
                            <div class="parallax-inner">
                                <div class="bg" data-bg="image/bg/11.jpg" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="container">
                                <div class="page-title">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2> 施工工艺</h2>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="creat-list">
                                                <li><a href="home.php">网站首页</a></li>
                                                <li><a href="technic.php">施工工艺</a></li>
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
                                    <!-- Articels -->
                                    <div class="col-md-8" id="technic-body">
                                        <div class="pagination-blog" id="pagination-blog">
                                            <a href="javascript:fanye(-1);" class="prevposts-link transition"></a>
                                            <a href="javascript:fanye(1);" class="nextposts-link transition"></a>
                                        </div>
                                        <article>
                                            <h2 class="section-title dec-title"><span>Blog Post  <strong> Title</strong></span></h2>
                                            <div class="blog-media">
                                                <div class="box-item">
                                                    <a class="ajax" href="blog-single.html" >
                                                    <span class="overlay"></span>
                                                    <img src="image/folio/thumbs/1.jpg"  alt="" class="respimg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="blog-text" id="page">
                                                <h3><a class="ajax" href="blog-single.html" >Aliquip pertinax <strong>vix ad </strong></a></h3>
                                                <p>
                                                    Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. Integer iaculis tellus nulla, quis imperdiet magna venenatis vitae..
                                                </p>
                                                <a href="blog-single.html" class="btn"><span>read more </span> <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </article>
                                        <div class="pagination-blog" id="pagination-blog">
                                            <a href="javascript:fanye(-1);" class="prevposts-link transition"></a>
                                            <a href="javascript:fanye(1);" class="nextposts-link transition"></a>
                                        </div>
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
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <?php 
            $search = isset($_POST['search']) ? $_POST['search'] : '';
            if($search!="")
            {
                ?>
                <script>
                    var data=<?php                      
                        $url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
                        $query_url = dirname($url)."/search.php?t=".$search;
                        echo fectch_url_json($query_url);
                    ?>
                </script>
                <?php
            }      
            else
            {
        ?>
        <script type="text/javascript" src="data/pages/pages.js"></script>
        <?php
            }           
            
            function fectch_url_json($url)
            {
                $contents1 = file_get_contents($url); 
                if(preg_match('/^\xEF\xBB\xBF/',$contents1))
                {
                    $contents1=substr($contents1,3);
                }
              //  $arr1= json_decode($contents1,true);
                return $contents1;
            }
            ?>
        <script type="text/javascript" src="js/fill-tech.js"></script>
        <script type="text/javascript" src="js/fanye.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script>
            select('nav_bar_technic');
		</script>
    </body>
</html>