<?php
/*
Template Name: トップページ
*/
?>
<?php get_header(); ?>
<!--Menu-->
<?php get_template_part('content', 'menu'); ?>
<!-- fv -->
<div class="fv">
  <div class="fv__inner">
    <h2 class="fv__title">Tora Code</h2>
    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/mylogo.svg" alt="">
  </div>
</div>

<!--maincontents-->
<main class="main">
  <!-- about -->
  <section class="about">
    <div class="inner-sm about__inner">
      <div class="heading">
        <h2 class="heading__title fade-in">About</h2>
      </div>
      <div class="about__body fade-in">
        <div class="about__img">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/myphoto.png" alt="">
        </div>
        <div class="about__content">
          <h3 class="heading-sub">自己紹介</h3>
          <p>年齢：25歳</p>
          <p>生年月日：1996年5月7日</p>
          <p>出身地：岐阜県</p>
          <p>現住所：岐阜県</p>
          <p>経歴：</p>
          <p>2021年8月~現在</p>
          <p>・Web制作フリーランスとして、コーディング、WP構築をメインに活動中。</p>
          <p>2023年2月~9月</p>
          <p>・システム開発に携わる。</p>
          <div class="btn">
            <a class="btn_edge" href="<?php echo esc_url(home_url()); ?>/about/">詳しく見る</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- works -->
  <?php
  $args = array(
    'post_type' => 'post',
    'category_name' => 'works',
    'posts_per_page' => 6,
  );
  $event_query = new WP_Query($args);
  ?>
  <section class="works">
    <div class="works__inner inner">
      <div class="heading">
        <h2 class="heading__title fade-in">Works</h2>
      </div>
      <p class="works__text">これまでの実績を最新順にまとめさせていただきました。</p>
      <!-- ループ処理 -->
      <div class="works__loop fade-in">
        <?php if ($event_query->have_posts()) : ?>
          <?php while ($event_query->have_posts()) : $event_query->the_post(); ?>
            <div class="card">
              <div class="card__img">
                <?php if (has_post_thumbnail()) : ?>
                  <a class="card__link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail(); ?>
                  </a>
                <?php endif; ?>
              </div>
              <div class="card__head">
                <h3 class="heading-sub"><?php the_title(); ?></h3>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="btn">
        <a class="btn_edge" href="<?php echo esc_url(home_url()); ?>/works/">詳しく見る</a>
      </div>
    </div>
  </section>
  
  <!-- service -->
  <section class="service">
    <div class="service__inner inner">
      <div class="heading">
        <h2 class="heading__title fade-in">Service</h2>
      </div>
      <div class="service__loop">
        <div class="service__card">
          <div class="service__img">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/coding.png" alt="">
          </div>
          <div class="service__head">
            <h3 class="heading-sub">コーディング</h3>
            <div class="service__text">
              <p>作成方法：HTML/CSS/JavaScript</p>
              <p>用意していただいたデザインをもとに保守性の高いコーディングをさせていただきます。</p>
            </div>
          </div>
        </div>
        <div class="service__card">
          <div class="service__img">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/WordPress.png" alt="">
          </div>
          <div class="service__head">
            <h3 class="heading-sub">WordPress構築</h3>
            <div class="service__text">
              <p>作成方法：WordPress</p>
              <p>既存テーマによるサイト構築、オリジナルサイトテーマの作成を行います。WordPressは、シェアが世界・日本No1。最新の記事を自分で投稿することが可能です。</p>
            </div>
          </div>
        </div>
        <div class="service__card">
          <div class="service__img">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/maintenance.png" alt="">
          </div>
          <div class="service__head">
            <h3 class="heading-sub">サイト保守・運用</h3>
            <div class="service__text">
              <p>WordPress構築で構築したサイトの保守運用を行います。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="btn">
        <a class="btn_edge" href="<?php echo esc_url(home_url()); ?>/service/">詳細を見る</a>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>