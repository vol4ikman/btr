<?php
    /* Template Name: Homepage Template */
    get_header();
?>

<main class="site-main-container" role="main">

    <?php get_template_part('inc/home/slider'); ?>

    <?php get_template_part('inc/home/who-we-are'); ?>

    <?php get_template_part('inc/home/team'); ?>

    <?php get_template_part('inc/home/what-we-do'); ?>

    <?php get_template_part('inc/home/our-partners'); ?>

</main>


<?php get_footer(); ?>
