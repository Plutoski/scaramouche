<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title') ?> | <?php bloginfo('description') ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/main.js"></script>
</head>
<body>

<header>
    <div class="container header">
        <a href="<?php echo bloginfo('url'); ?>" class="logo">
            <img src="<?php bloginfo('stylesheet_directory') ?>/images/logo.svg" alt="Lustrum GST 2022 Scaramouche" />
        </a>

        <div class="menu">
        <?php if (has_nav_menu('primary_navigation')) { ?>
            <nav class="nav-primary" aria-label="<?php wp_get_nav_menu_name('primary_navigation') ?>">
            <?php echo wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'menu_class' => 'nav',
                'echo' => false,
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'walker' => new AWP_Menu_Walker()
            ]) ?>
            </nav>
        <?php } ?>
        </div>

        <div class="hamburger">
            <div class="hamburger-line hamburger-line-one"></div>
            <div class="hamburger-line hamburger-line-two"></div>
            <div class="hamburger-line hamburger-line-three"></div>
        </div>
    </div>
</header>