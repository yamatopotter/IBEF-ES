<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title><?php bloginfo('name'); ?><?php $part = wp_title(); if(!empty($part)){?> - <?php wp_title(); }?></title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php if(is_front_page()){ ?>
        <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php }else{ ?>
        <meta name="description" content="<?php echo excerpt(20); ?>">
    <?php } ?>

    <!-- meta tag facebook -->
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <!-- puxar logo para o meta tag -->
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
    <meta property="og:site_name" content="Coluna Resenhando" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo get_the_title() ?>" />
    <meta property="og:url" content="<?php echo get_the_post_thumbnail_url() ?>" />

    <!-- Reset CSS -->

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>

    <!-- End Reset -->

    <!-- Wordpress Scripts -->
    <?php wp_head(); ?>
    <!-- End Wordpress Scripts -->

    <!-- Estilos Mutáveis -->
    <style>
        .intro{
            background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('./assets/img/bg.jpg') no-repeat center center/cover;
        }
    </style>
    <title>IBEF-ES</title>
</head>
<body>
    <header>

        <img src='./assets/img/logo-ibef.png' class="logo-header" id="logo-header">

        <nav class="navbar-expand-lg navbar-light bg-light" id="main-menu">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="main-navbar">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php
                            $args = array('menu_id' => 'main-nav','menu_class' => 'menu', 'menu' => 'principal', 'container' => false);
                            wp_nav_menu($args);
                        ?>
                    </ul>
    
                </div>

            </div>

        </nav>
    </header>