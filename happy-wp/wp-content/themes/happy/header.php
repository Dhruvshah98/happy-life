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
   
    <ul class="header-list">
    <div class="logo">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="">
    </div>
        <li>
            <a href="#industries"><img src="<?php bloginfo('template_url'); ?>/assets/img/industries.svg" alt=""> industries</a>
        </li>
        <li>
            <a href="#clients"><img src="<?php bloginfo('template_url'); ?>/assets/img/client.svg" alt=""> ROCKSTAR CLIENTS</a>
        </li>
        <li>
            <a href="#about"><img src="<?php bloginfo('template_url'); ?>/assets/img/about.svg" alt=""> ABOUT</a>
        </li>
    </ul>
    <div class="header-btn">
        <a href="#contact" class="button"><span><img src="<?php bloginfo('template_url'); ?>/assets/img/contact.svg" alt=""> CONTACT</span> </a>
    </div>
    <div class="menu-btn">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/menu.svg" alt="">
    </div>
</div>

<!-- Side Menu -->
<div class="menuOverlay"></div>
<div class="mobile-menu">
    <h3 class="close-menu cancel-btn">
        <span></span>
        <span></span>
    </h3>
    <ul class="header-list">
        <li>
            <a href="#industries"><img src="<?php bloginfo('template_url'); ?>/assets/img/industries.svg" alt=""> industries</a>
        </li>
        <li>
            <a href="#clients"><img src="<?php bloginfo('template_url'); ?>/assets/img/client.svg" alt=""> ROCKSTAR CLIENTS</a>
        </li>
        <li>
            <a href="#about"><img src="<?php bloginfo('template_url'); ?>/assets/img/about.svg" alt=""> ABOUT</a>
        </li>
        <div class="header-btn">
        <a href="#contact" class="button"><span><img src="<?php bloginfo('template_url'); ?>/assets/img/contact.svg" alt=""> CONTACT</span> </a>
    </div>
    </ul>
</div>
<!-- Side Menu End -->
</header>
