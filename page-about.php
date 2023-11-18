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
    <div class="fv-sub__inner">
        <h2 class="fv-sub__title">Tora Code</h2>
        <img src="<?php echo get_template_directory_uri();?>/dist/img/mylogo.svg" alt="">
    </div>
</header>
<?php breadcrumb(); ?>

<!--maincontents-->
<main class="main">
    <!-- about -->
    <section class="about-detail">
        <div class="about-detail__inner inner-sm">
            <div class="heading fade-in">
                <h2 class="heading__title">About</h2>
            </div>
            <!-- 黄金比を意識 -->
            <div class="about-detail__body fade-in">
              <div class="about-detail__content fade-in">
                  <h3 class="heading-sub">自己紹介</h3>
                  <?php
                    echo '<p>';
                    echo SCF::get('introduction_textarea');
                    echo '</p>'
                  ?>
              </div>
              <div class="about-detail__img fade-right">
                <?php
                  $scf_field = SCF::get('introduction_img');
                  echo wp_get_attachment_image($scf_field,'large');
                ?>
                  <!-- <img src="<?php echo get_template_directory_uri();?>/dist/img/myphoto.png" alt=""> -->
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
    <section class="skill">
        <div class="skill__inner inner-sm">
          <div class="heading fade-in">
              <h2 class="heading__title">Skill</h2>
          </div>
          <div class="skill__loop">
            <!-- ループ処理 -->
            <?php if ( $event_query->have_posts() ): ?>
              <?php while ( $event_query->have_posts()) : $event_query->the_post() ; ?>
              <div class="skill__card fade-in">
                  <div class="skill__img">
                      <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail(array( 100, 100 ) ); ?>
                      <?php endif; ?>
                  </div>
                  <div class="skill__text">
                      <p class="skill__title"><?php the_title(); ?></p>
                      <p><?php the_content(); ?></p>
                  </div>
              </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <?php
                $skill = SCF::get('skill');
                foreach ($skill as $fields) {
            ?>
              <div class="skill__card fade-in">
                <div class="skill__img">
                <?php
                $img_data = wp_get_attachment_image_src($fields['img'], 'large');
                $url = $img_data[0];
                $alt = get_post_meta($fields['img'], '_wp_attachment_image_alt', true) ?: get_post($fields['img'])->post_title;
                echo '<img src="' . esc_url($url) . '" alt="' . esc_attr($alt) . '">';
                ?>
                </div>
                <div class="skill__text">
                    <p class="skill__title"><?php echo $fields['title']; ?></p>
                    <p><?php echo $fields['text']; ?></p>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
    </section>
<?php get_footer(); ?>