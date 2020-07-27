<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">
        <h1><?php the_title(); ?></h1>

        <div class="gallery">
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_post_thumbnail_url('blog-large'); ?>">
                    <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title; ?>" class="img-fluid mb-3 img-thumbnail" ?>
                </a>
            <?php endif; ?>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <?php get_template_part('includes/section', 'items'); ?>
                <?php wp_link_pages(); ?>
            </div>
            <div class="col-lg-6">
                <ul>
                    <li>SKU: <?php the_field('sku'); ?></li>
                    <li>Price: <?php the_field('price'); ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>