<?php
/* Template Name: Homepage */
get_header(); 
?>
    <!-- Hero -->
    <?php get_template_part( 'partial-templates/hero'); ?>
    <!-- Platform section -->
    <?php get_template_part( 'partial-templates/features'); ?>
    <!-- Brand section -->
    <?php get_template_part( 'partial-templates/contact'); ?>

<?php get_footer(); ?>