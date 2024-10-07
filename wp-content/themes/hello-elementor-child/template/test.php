<?php
/*
Template Name: Test Template
*/

get_header();
?>

<?php if (have_rows('section_list')) : ?>
    <?php while (have_rows('section_list')) : the_row(); ?>
            <?php
                $shortcode_name = get_sub_field('select_section');
                echo do_shortcode('['.$shortcode_name.' post_id="'.get_the_id().'" ]');
            ?>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>