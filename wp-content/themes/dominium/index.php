<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <h1><?php bloginfo('name'); ?></h1>
    <h2><?php bloginfo('description'); ?></h2>

    <?php 
        if (have_posts()):
            while(have_posts()):
                the_post();
                ?>

                <h3><?php the_title();?></h3>
                <div>
                    <h3><?php the_content();?></h3>
                </div>

                <?php
            endwhile;
        endif;
    ?>
    <?php wp_footer(); ?>
</body>
</html>