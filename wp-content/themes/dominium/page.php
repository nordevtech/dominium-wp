<?php get_header(); ?>

<div class="container pt-5">
    <div class="row">
        <div class="col-sm-8">
            <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title()?></h1>
                <p><?php the_content()?></p>
            <?php endwhile; endif; ?>
            </div>
        <div class="col-sm-4">
            <h1>testando</h1>
        </div>
    </div>
</div>

<?php get_footer();
