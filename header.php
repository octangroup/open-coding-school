<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package open-coding-school-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/logo.png">
    <?php wp_head(); ?>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/main.css"/>
    <script src="https://kit.fontawesome.com/221ac0e2fd.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <style>
        .w-px-600 {
            width: 600px;
        }
        .h-px-600 {
            height: 600px;
        }
    </style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="w-100 min-h-screen relative flex flex-col">
        
    <?php get_template_part('template-parts/nav'); ?>

    <div id="content" class="pt-4 relative" style="flex: 1 0 auto;">
