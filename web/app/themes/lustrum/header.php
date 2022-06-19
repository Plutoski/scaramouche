<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title') ?> | <?php bloginfo('description') ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>

<header>
    <div class="container header">
        <div class="logo">
            Logo
        </div>

        <div class="menu">
        <?php if (has_nav_menu('primary_navigation')) { ?>
            <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            <?php wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'menu_class' => 'primary-navigation',
                'echo' => false,
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'walker' => new AWP_Menu_Walker()
            ]) ?>
            </nav>
        <?php } ?>

        </div>
    </div>
</header>