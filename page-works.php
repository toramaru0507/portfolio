<?php
/*
Template Name: workページ
*/
?>
<?php get_header(); ?>
<!--Menu-->
<?php get_template_part('content', 'menu'); ?>
<!-- fv -->
<header class="fv-sub">
    <div class="container">
        <h2 class="heading__title">Toraji Corporation</h2>
        <img src="<?php echo get_template_directory_uri();?>/dist/img/mylogo.svg" alt="">
    </div>
</header>
<?php breadcrumb(); ?>

<!--maincontents-->
<main class="main">
    <!-- works -->
    <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'works',
            'posts_per_page' => 9,
        );
        $event_query = new WP_Query ($args);
    ?>
    <section class="area_page_works_home">
        <div class="container">
            <div class="heading fade-in">
                <h2 class="heading__title">Works</h2>
                <br>
                <p>これまでの実績を最新のサイトから順にまとめさせていただきました。</p>
                <p>クリックで詳細をご覧いただけます。</p>
            </div>
            <!-- ループ処理 -->
            <div class="text_home_loop">
                <?php if ( $event_query->have_posts() ): ?>
                    <?php while ( $event_query->have_posts()) : $event_query->the_post() ; ?>
                    <div class="body_home fade-in">
                        <div class="img" >
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail(); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="text_home">
                            <h3 class="text_home_ttl"><?php the_title(); ?></h3>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>