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
        <meta name="description" content="<?php echo limit_excerpt(20); ?>">
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
            background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('<?php returnThemeObject('bg_intro'); ?>') no-repeat center center/cover;
        }
    </style>
    <title>IBEF-ES</title>
</head>
<body class="site">
    <header>

        <img src='<?php returnThemeObject('logo_menu'); ?>' class="logo-header" id="logo-header">

        <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation" id="main-menu">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-list" aria-controls="menu-list" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'main-menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'menu-list',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
            </div>
        </nav>
    </header>