<!--
Template Name:Contact-Form 
-->

<?php while ( have_posts() ) : the_post(); ?>
    <?php if ( has_post_thumbnail() ) : ?>
        <div>
            <h2><?php the_title(); ?></h2>
        </div>
    <?php endif; ?>

    <div id="actual-article" class="col-md-8">
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
