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
    <div class="fv-sub__inner">
        <h2 class="fv-sub__title">Tora Code</h2>
        <img src="<?php echo get_template_directory_uri();?>/dist/img/mylogo.svg" alt="">
    </div>
</header>
<?php breadcrumb(); ?>

<!--maincontents-->
<main class="main">
    <!-- service -->
    <section class="service">
      <div class="service__inner inner">
        <div class="heading">
          <h2 class="heading__title fade-in">Service</h2>
        </div>
        <div class="service__loop fade-in">
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
        <div class="button fade-in">
          <a class="button_edge" href="<?php echo esc_url(home_url()); ?>/service/">詳細を見る</a>
        </div>
      </div>
    </section>

    <!-- price -->
    <section class="price">
      <div class="inner-sm">
        <div class="heading">
          <h2 class="heading__title fade-in">Price</h2>
        </div>
        <p class="price__text fade-in">下記はおおよその価格になります。※金額に関しての相談は可能です。</p>
        <table class="fade-in">
          <tbody>
            <?php
                    $price = SCF::get('price');
                    foreach ($price as $fields) {
            ?>
            <tr>
              <th><?php echo $fields['title']; ?></th>
              <td><?php echo $fields['fee']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </section>

    <!-- flow -->
    <section class="flow">
        <div class="flow__inner inner-sm"> 
            <div class="heading fade-in">
                <h2 class="heading__title">Flow</h2>
            </div>
            <div class="flow__body fade-in">
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