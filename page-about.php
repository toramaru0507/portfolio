<?php
/*
Template Name: aboutページ
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
    <!-- about -->
    <section class="area_page_about_home">
        <div class="container">
            <div class="head_home fade-in">
                <h2 class="ttl">About</h2>
            </div>
            <!-- 黄金比を意識 -->
            <div class="body_home fade-in">
                <div class="text_home fade-in">
                    <h3 class="text_home_ttl">森寅治(フリーランス）</h3>
                    <p>岐阜県出身の25歳。現在は、LP/ホームページ制作/を中心に活動をしております。
                        現在は、コーディング、デザイン、ディレクションを行い、多くの方の課題を解決できる存在になりたいと考えております。
                    </p>
                    <br>
                    <p>経歴</p>
                    <p>岐阜県生まれ。小学から高校まで9年間野球部に所属し、文武両道に励む。</p>
                    <p>その後、名古屋の大学に進み、建築について専門的に学ぶ。</p>
                    <p>卒業後、大手建設会社に施工管理者として就職。1年ほど現場での計画、管理について経験。</p>
                    <p>退職後、コンサルタント会社でCAD、BIMオペレーターとして転職。</p>
                    <p>業務の中で、エンジニアの働き方に魅力を感じ、Web制作について学習開始。</p>
                    <p>現在は、フリーランスとして日々制作依頼を請け負っている。</p>
                    <br>
                    <p>性格/趣味</p>
                    <p>明るい、元気、真面目、誠実、優しそう/スノーボード、読書、筋トレ、旅行、囲碁</p>
                </div>
                <div class="img fade-right">
                    <img src="<?php echo get_template_directory_uri();?>/img/myphoto.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- skill -->
    <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'skill',
            'posts_per_page' => 12,
        );
        $event_query = new WP_Query ($args);
    ?>
    <section class="area_skill_home">
        <div class="container">
            <div class="head_home fade-in">
                <h2 class="ttl">Skill</h2>
            </div>
            <div class="text_home_loop">
                <!-- ループ処理 -->
                <?php if ( $event_query->have_posts() ): ?>
                    <?php while ( $event_query->have_posts()) : $event_query->the_post() ; ?>
                    <div class="body_home fade-in">
                        <div class="img">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(array( 100, 100 ) ); ?>
                            <?php endif; ?>
                        </div>
                        <div class="text_home">
                            <p><?php the_title(); ?></p>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>   
            </div>
        </div>
    </section>
<?php get_footer(); ?>