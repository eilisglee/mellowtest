<?php get_header(); ?>

<div id="hero">
    <div class="container d-flex align-items-center justify-content-center h-100">
        <h1>Welcome</h1>
    </div>
</div>

<section class="page-wrap">
    <div class="container">

        <h1><?php the_title(); ?></h1>

        <?php get_template_part('includes/section', 'content'); ?>

        <?php get_search_form(); ?>

    </div>
</section>



<?php get_footer(); ?>