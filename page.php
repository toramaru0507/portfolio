<?php
/*
Template Name: 固定ページテンプレート
*/
 get_header(); ?>
<!--Menu-->

<?php get_template_part('content', 'menu'); ?>

<!-- ABOUT -->
<section id="top-baner">
<div>
<img src="<?php bloginfo('template_directory'); ?>/img/about.jpg" 　alt="事業所外観">
</div>
</section>
<div class="top-container" style="display: flex;">
     <?php get_template_part( 'breadcrumb-list' ); ?>
     <div class="lang-switch">
     <a href="https://space-orion.co.jp/en/about-2/#contents-page"> 
     <i class="flag-icon flag-icon-us"></i>
     <p>English >></p>
     </a>
     </div>
     </div>
    <section id="contents-page">
    <h2 class="title"><?php the_title(); ?></h2>
        <div class="about-wrapper">
        <div class="about-content">
        <?php
                $page_data = get_page_by_path('about'); 
                $page = get_post($page_data);
                $content = $page -> post_content;
                echo the_content();
                ?>
        </div>
    </div>
    <?php get_footer(); ?>
</section>
<style>
html{
    height: 100%;
}
#contents-page{
    position: relative;
    padding-bottom:200px;
    min-height: 100vh;
}
footer{
    position: absolute;
    bottom: 0;
}

</style>