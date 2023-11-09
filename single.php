<?php
/*
Template Name: それぞれのworksページ
*/
?>
<?php get_header("1"); ?>
<!--Menu-->
<?php get_template_part('content', 'menu'); ?>
<!-- fv -->
<header class="fv">
    <div class="container">
        <h2 class="ttl">Toraji Corporation</h2>
        <img src="<?php echo get_template_directory_uri();?>/img/mylogo.svg" alt="">
    </div>
</header>
<?php breadcrumb(); ?>

<!--maincontents-->
<main class="main">
    <section class="area_worksdetail_home">
        <div class="container">
            <div class="work_head_home">
                <h3 class="text_home_ttl"><?php the_title(); ?></h3>
            </div>
            <?php the_content(); ?>
            <div class="pagenation">
                    <?php previous_post_link('%link', '<span class="prev">＜PREV</span>', TRUE); ?>
                    <?php next_post_link('%link', '<span class="next">NEXT＞</span>' ,TRUE); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>