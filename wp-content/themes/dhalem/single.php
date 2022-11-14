<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="top-banner">
        <h1><?php the_title(); ?></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <?php the_content(); ?>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>
