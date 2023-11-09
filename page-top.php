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
  <div class="container">
    <h2 class="ttl">Toraji Corporation</h2>
    <img src="<?php echo get_template_directory_uri(); ?>/img/mylogo.svg" alt="">
  </div>
</div>
<?php breadcrumb(); ?>

<!--maincontents-->
<main class="main">
  <!-- about -->
  <section class="area_about_home">
    <div class="container">
      <div class="head_home">
        <h2 class="ttl fade-in">About</h2>
      </div>
      <div class="body_home fade-in">
        <div class="img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/myphoto.png" alt="">
        </div>
        <div class="text_home">
          <h3 class="text_home_ttl">森寅治(もりとらじ)</h3>
          <p>年齢：25歳</p>
          <p>生年月日：1996年5月7日</p>
          <p>出身地：岐阜県</p>
          <p>現住所：東京都</p>
          <p>前職：</p>
          <p>・2019年4月〜2019年12月</p>
          <p>大手建設会社で施工管理職として勤務。</p>
          <p>・2020年1月〜2021年8月</p>
          <p>土木コンサルタント会社でBIMオペレータとして勤務。</p>
          <div class="btn">
            <a class="btn_edge" href="<?php echo esc_url(home_url()); ?>/about/">もっと見る></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- service -->
  <?php
  $args = array(
    'post_type' => 'post',
    'category_name' => 'service',
    'posts_per_page' => 3,
  );
  $event_query = new WP_Query($args);
  ?>
  <section class="area_service_home">
    <div class="container">
      <div class="head_home">
        <h2 class="ttl fade-in">Service</h2>
      </div>
      <div class="text_home_loop">
        <!-- ループ処理 -->
        <?php if ($event_query->have_posts()) : ?>
          <?php while ($event_query->have_posts()) : $event_query->the_post(); ?>
            <div class="body_home fade-in">
              <div class="img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(array(250, 250)); ?>
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
      <div class="btn">
        <a class="btn_edge" href="<?php echo esc_url(home_url()); ?>/service/">詳細を見る></a>
      </div>
    </div>
  </section>

  <!-- works -->
  <?php
  $args = array(
    'post_type' => 'post',
    'category_name' => 'works',
    'posts_per_page' => 3,
  );
  $event_query = new WP_Query($args);
  ?>
  <section class="area_works_home">
    <div class="container">
      <div class="head_home">
        <h2 class="ttl fade-in">Works</h2>
        <br>
        <p>これまでの実績を最新のサイトから順にまとめさせていただきました。</p>
        <p>クリックで詳細をご覧いただけます。</p>
      </div>
      <!-- ループ処理 -->
      <div class="text_home_loop fade-in">
        <?php if ($event_query->have_posts()) : ?>
          <?php while ($event_query->have_posts()) : $event_query->the_post(); ?>
            <div class="body_home">
              <div class="img">
                <?php if (has_post_thumbnail()) : ?>
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
      <div class="btn">
        <a class="btn_edge" href="<?php echo esc_url(home_url()); ?>/works/">もっと見る></a>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>