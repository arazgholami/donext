<!DOCTYPE html>
<!--
||==================================================================================||
||    DoNext v1.2                                                                   ||
||    Design & Development by Alireza Gholami (@heshzad) <info@alirezagholami.com>  ||
||    Copyright (c) 2014-2015 , All right reserved.                                 ||
||==================================================================================||
-->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->
<head>
    <title>
        <?php
        global $page, $paged;
        wp_title( '|', true, 'right' );
        bloginfo( 'name' );
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo "";
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
        ?>
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="tags" content="<?php $posttags = get_the_tags(); if ($posttags) {foreach($posttags as $tag) {echo ",".$tag->name;}}?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="DoNext Authors">
    <meta name="robots" content="index,follow">
    <!--Favicon-->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico?ver=2" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico?ver=2" type="image/x-icon">
    <!--Styles-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=1.500">
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script('comment-reply'); ?>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--Header Begin-->
<header>
    <div class="container">
        <div id="iden">
            <a href="<?php bloginfo('home'); ?>"><h1><?php bloginfo( 'name' ); ?></h1></a>
            <span><?php bloginfo('description'); ?><sup>(نسخه آزمایشی)</sup></span>
        </div>
        <div id="subscription">
           <form action="/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)" method="post">
            <p>با اشتراک در خبرنامه دونکست میتوانید نوشته‌های جدید را به محض انتشار در ایمیلتان دریافت کنید.</p>
            <button id="magna" class="btn"><i class="fa fa-envelope"></i></button>
            <input type="hidden" name="nr" value="widget">
            <input type="email" class="form-control" placeholder="ایمیل شما" oninvalid="setCustomValidity('لطفا یک ایمیل معتبر وارد نمایید.')" onchange="try{setCustomValidity('')}catch(e){}" type="email" required="" name="ne">
           </form>
        </div>
    </div>
</header>
<div id="nav" class="container">
   <nav>
        <a id="nav-cat" href="/categories"><i class="fa fa-bars"></i></a>
        <!--<a href="/about" class="info"><i class="fa fa-exclamation fa-rotate-180"></i></a>-->
        <form action="<?php bloginfo('home'); ?>"><input type="text" placeholder="جستجو" id="search-input" name="s"></form>
        <a href="javascript:null" onclick="doSearch();"><i class="fa fa-search"></i></a>
        <ol>
            <li><a href="<?php bloginfo('home'); ?>"><i class="fa fa-home"></i></a></li>
            <?php
            wp_list_categories(array(
                'link_after'   => '',
                'link_before'  => '',
                'post_type'    => 'category',
                'post_status'  => 'publish',
                'show_date'    => '',
                'sort_column'  => 'menu_order, post_title',
                'sort_order'   => '',
                'title_li'     => __('')
            ));
            ?>
        </ol>
        <ul>
            <li><a href="http://donext.ir/feed" title="دونکست را از  طریق فید دنبال کنید"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-rss fa-stack-1x fa-inverse"></i></span></a></li>
            <li><a href="https://facebook.com/donextir" title="صفحه دونکست را در فیسبوک لایک کنید"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></li>
            <li><a href="https://twitter.com/donext_ir" title="دونسکت را در توییتر دنبال نمایید"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a></li>
            <li><a href="https://plus.google.com/104754095111715272911/posts?hl=en" title="صفحه دونکست در گوگل‌پلاس را پیگیری نمایید"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x fa-inverse"></i></span></a></li>
            <!--<li><a href="https://linkedin.com/{link}"><span class="fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></span></a></li>-->
        </ul>
    </nav>
</div>
<!--Header End-->