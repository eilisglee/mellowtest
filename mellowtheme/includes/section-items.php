<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <!-- Tags -->
        <?php $tags = get_the_tags();
        if($tags):
        foreach ($tags as $tag) : ?>
            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge badge-success">
                <?php echo $tag->name; ?>
            </a>
        <?php endforeach; endif; ?>

        <!-- Categories -->
        <?php $categories = get_the_category();
        foreach ($categories as $cat) : ?>
            <a href="<?php echo get_category_link($cat->term_id); ?>">
                <?php echo $cat->name; ?>
            </a>
        <?php endforeach ?>

        <!-- Comment template -->
        <!--comments_template();-->

<?php endwhile;
else : endif; ?>