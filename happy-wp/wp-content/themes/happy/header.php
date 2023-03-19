<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body>

<header id="header">
<div class="header-box">
    <div class="logo">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="">
    </div>
    <ul class="header-list">
        <li>
            <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/industries.svg" alt=""> industries</a>
        </li>
        <li>
            <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/client.svg" alt=""> ROCKSTAR CLIENTS</a>
        </li>
        <li>
            <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/about.svg" alt=""> ABOUT</a>
        </li>
    </ul>
    <div class="header-btn">
        <a href="" class="button"><span><img src="<?php bloginfo('template_url'); ?>/assets/img/contact.svg" alt=""> CONTACT</span> </a>
    </div>
</div>

<!-- Side Menu -->
<div class="menuOverlay"></div>
<div class="mobile-menu">
    <h3 class="close-menu">
        <img src="" alt="cancel">
    </h3>
    <ul class="header-list">
        <li class="drop"><a href="javascript:void(0)"></a>
            <ul>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
        </li>
        <li class="drop"><a href="javascript:void(0)"></a>
            <ul>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
        </li>
        <li><a href="#"></a></li>
        <li><a href=""></a></li>
    </ul>
    <div class="mob-menu-footer">
        <div class="footerIcon-section">
            <img src="" alt="Company Head Office Contact Number" />
        </div>
        <a class="mob-menu-footer--num" href=""></a>
    </div>
</div>
<!-- Side Menu End -->
</header>