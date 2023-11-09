<?php
/*
Template Name: サンプルインデックス
 */

get_header(); ?>
    
    <?php get_template_part('content', 'menu'); ?>
    
    <div class="container">
    <h1 class="title"><?php the_title(); ?></h1>
    
    <main id="main" class="site-main" role="main">
        <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
		</main>
    </div>

<?php endwhile; ?>
<?php get_footer(); ?>
