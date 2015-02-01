<aside class="sidebar">

    <?php if (function_exists('dynamic_sidebar')) : ?>
        <?php dynamic_sidebar(); ?>
    <?php endif; ?>

    <section>
        <h1>随机文章</h1>
        <ul id="recent_posts">
            <?php $rand_posts = get_posts('numberposts=10&orderby=rand'); ?>
            <?php foreach( $rand_posts as $post ) :?>
                <li class="post"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
            <?php endforeach; ?>
        </ul>
    </section>

</aside><!-- sidebar -->
