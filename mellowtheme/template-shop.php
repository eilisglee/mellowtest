<?php

/* 
Template Name: Shop Page
*/

get_header(); ?>

<section class="page-wrap">
    <div class="main-container container">

        <section class="row">

            <div class="col-lg-12">

                <h1><?php the_title(); ?></h1>

                <?php get_template_part('includes/section', 'content'); ?>

            </div>
        </section>

    </div>
</section>



<?php get_footer(); ?>