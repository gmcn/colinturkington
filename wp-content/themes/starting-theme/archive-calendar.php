<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php
include(locate_template("inc/page-elements/breadcrumbs.php"));
include(locate_template("inc/page-elements/head-calendar.php"));
include(locate_template("inc/page-calendar/loop.php"));
?>

<?php
//get_sidebar();
get_footer();
