<?php
/*
Template Name: serviceページ
*/
?>
<?php get_header(); ?>
<!--Menu-->
<?php get_template_part('content', 'menu'); ?>
<!-- fv -->
<header class="fv-sub">
    <div class="container">
        <h2 class="ttl">Toraji Corporation</h2>
        <img src="<?php echo get_template_directory_uri();?>/img/mylogo.svg" alt="">
    </div>
</header>
<?php breadcrumb(); ?>

<!--maincontents-->
<main class="main">
    <!-- service -->
    <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'service',
            'posts_per_page' => 3,
        );
        $event_query = new WP_Query ($args);
    ?>
    <section class="area_service_home" >
        <div class="container">
            <div class="head_home fade-in">
                <h2 class="ttl">Service</h2>
            </div>
            <div class="text_home_loop">
                <!-- ループ処理 -->
                <?php if ( $event_query->have_posts() ): ?>
                    <?php while ( $event_query->have_posts()) : $event_query->the_post() ; ?>
                    <div class="body_home fade-in">
                        <div class="img">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(array( 250, 250 ) ); ?>
                            <?php endif; ?>
                        </div>
                        <div class="text_home"> 
                            <h3 class="text_home_ttl"><?php the_title(); ?></h3>
                            <div class="text">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- flow -->
    <section class="area_flow_home">
        <div class="container"> 
            <div class="head_home fade-in">
                <h2 class="ttl">Flow</h2>
            </div>
            <div class="body_home fade-in">
                <?php
                $page_data = get_page_by_path('flow'); 
                $page = get_post($page_data);
                $content = $page -> post_content;
                echo apply_filters('the_content', $content);
                ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>