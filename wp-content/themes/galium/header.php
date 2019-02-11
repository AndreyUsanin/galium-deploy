<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php wp_head(); ?>
</head>
<body>

<section class="top-nav">
    <div class="container">
        <ul class="top-nav__contacts">
            <li class="top-nav__item">
                <span class="icon-phone top-nav__icon"></span>
                <?php echo get_field('header_adress', 'options'); ?>
            </li>
            <li class="top-nav__item">
                <span class="icon-location top-nav__icon"></span>
                <?php echo get_field('header_phone', 'options'); ?>
            </li>
        </ul>
    </div>
</section>


<div class="page-overlay"></div> <!-- page overlay --> 
<div class="offside__container">  <!-- offside container -->
    <nav class="main-nav">
        <div class="container p-4">
            <div class="row align-items-center">
                <div class="col-md-4 col-sm-6 w-50">
                    <div class="logo-wrp">
                        <?php $logo = get_field('logo', 'options'); 
                        if ($logo) : ?>
                        <a href="<?php echo get_site_url() ?>"><img class="logo" src="<?php echo $logo; ?>" alt=""></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 justify-content-around  w-50">
                    <div class="main-nav-wrp">
                        <ul class="main-nav__contacts">
                            <li class="main-nav__item">
                                <span class="icon-phone main-nav__icon"></span>
                                <?php echo get_field('header_adress', 'options'); ?>
                            </li>
                            <li class="main-nav__item">
                                <span class="icon-location main-nav__icon"></span>
                                <?php echo get_field('header_phone', 'options'); ?>
                            </li>
                        </ul>
                        <div class="main-nav__btnholder">
                            <button href="#"  class="offside__button main-nav__burger" role="button"><span class="icon-menu"></span></button>                       
                        </div>
                    </div>   
                </div>
                
            </div>
        </div>
    </nav>