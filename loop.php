<?php
/*
Template Name: 記事一覧ページ
*/
 get_header(); ?>
<!--Menu-->

<?php get_template_part('content', 'menu'); ?>
     
<section id="top-baner">
<div>
<img src="<?php bloginfo('template_directory'); ?>/img/top02.jpg" 　alt="スペースオリオントップページ">
</div>
</section>
<div class="topics contents-page">
    <section id="page-topics">
        <div class="topic">
        <li class="post_list" style="list-style: none;">
                    <h1 class="widget-title">NEWS</h1>
                    <?php $posts = get_posts(); ?>
                    <?php foreach($posts as $post): ?>
                    <div class="topicbox" style="background:aliceblue;">
                    <div class="thumbnail">
                    <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(array(750,345), array('class' => 'left')); ?></a>
                        <a href="<?php the_permalink(); ?>">
                    </div>
                    <div class="excerpt">
                    <h2><?php the_title(); ?></h2>
                        </a>
                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                        <p><?php the_category(', '); ?></p>
                            <p><?php the_excerpt('Read more'); ?></p>
                    </div>
                    </div>
                    <?php endforeach; ?>
                </li>
        </div>
    </section>
    <?php get_footer(); ?>
</div>
<style>
html{
    height: 100%;
}
.contents-page{
    position: relative;
    padding-bottom:200px;
    min-height: 100vh;
}
footer{
    position: absolute;
    bottom: 0;
}

</style>