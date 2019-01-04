<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="<?= asset('dist/css/app.css') ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <nav role="navigation">
        <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
    </nav>
</header>