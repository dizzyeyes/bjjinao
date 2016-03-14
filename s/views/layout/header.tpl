<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><{$pageTitle}></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content="<{$pageTitle}>" />

    <link rel="stylesheet" href="<{$baseUrl}>/css/reset.css"/>
    <link rel="stylesheet" href="<{$baseUrl}>/css/style.css"/>
    <link rel="stylesheet" href="<{$baseUrl}>/css/plugins.css"/>
    <link rel="shortcut icon" href="<{$baseUrl}>/images/favicon.ico"/>
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
          <a href="index"><img src="<{$baseUrl}>/images/logo.png" alt=""></a>
        </div>
        <!-- header logo end -->
        <!-- mobile nav button -->
        <div class="nav-button-holder">
          <div class="nav-button vis-m"><span></span><span></span><span></span></div>
        </div>
        <!-- mobile nav button end -->
        <!-- navigation  -->
        <{include file="./layout/navbar.tpl"}>
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