<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/content/images/favicon.png" />
    <link rel="stylesheet" as="style" href="<?php echo get_template_directory_uri(); ?>/content/bootstrap/bootstrap.min.css"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/content/css/swiper.css" />
    <link href="<?php echo get_template_directory_uri(); ?>/content/css/font-family.css" />
    <link rel="stylesheet" as="style" href="<?php echo get_template_directory_uri(); ?>/content/css/custom.css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
