<?php
/*
Template Name: Home Template
*/
get_header(); ?>

<div class="custom-template">
    <h1><?php the_title(); ?></h1>
    <div class="content">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
</div>

<?php get_footer(); ?>
