<?php
/**
 * Index Template for MitaPay Theme
 * Powered by Cronotics Technology
 */
get_header();
?>

<div class="container">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>

        <div class="pagination">
            <?php the_posts_pagination(); ?>
        </div>

    <?php else : ?>
        <p>No content found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
