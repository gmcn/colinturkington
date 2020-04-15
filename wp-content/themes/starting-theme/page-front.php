<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php
include(locate_template("inc/page-front/hero.php"));
include(locate_template("inc/page-front/titles.php"));
include(locate_template("inc/page-front/standings.php"));
include(locate_template("inc/page-front/news.php"));
include(locate_template("inc/page-front/profile.php"));
include(locate_template("inc/page-front/shop.php"));
include(locate_template("inc/page-front/countdown.php"));
include(locate_template("inc/page-front/partners.php"));
include(locate_template("inc/page-front/social.php"));
include(locate_template("inc/page-front/gallery.php"));
?>

<?php
//get_sidebar();
get_footer();
