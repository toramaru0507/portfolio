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
    <div class="fv-sub__inner">
        <h2 class="fv-sub__title">Tora Code</h2>
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
            'paged' => $paged,
            'category_name' => 'works',
            // 'posts_per_page' => 12,
        );
        $event_query = new WP_Query ($args);
        $max_num_pages = $loop->max_num_pages;
    ?>
    <section class="works">
      <div class="works__inner inner">
        <div class="heading">
          <h2 class="heading__title fade-in">Works</h2>
        </div>
        <p class="works__text fade-in">これまでの実績を最新順にまとめさせていただきました。<br>クリックで詳細をご覧いただけます。</p>
        <!-- ループ処理 -->
        <div class="works__loop fade-in">
          <?php if ($event_query->have_posts()) : ?>
            <?php while ($event_query->have_posts()) : $event_query->the_post(); ?>
              <div class="card-work fade-in">
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
        <div class="pagenation">
          <?php if ($event_query->max_num_pages > 1) {
            echo paginate_links(array(
              'mid_size' => 2,
              'base' => get_pagenum_link(1) . '%_%',
              'format' => '?paged=%#%',
              'current' => max(1, $paged),
              'total' => $event_query->max_num_pages,
            ));
          }
          ?>
        </div>
      </div>
    </section>
<?php get_footer(); ?>