<?php if ( have_posts() ): ?>
    <?php while ( have_posts()): ?>
        <?php the_post(); ?>
        
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div><?php the_content(); ?></div>

    <?php endwhile; ?>
<?php endif; ?>