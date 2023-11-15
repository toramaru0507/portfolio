<?php
/*
Template Name: serviceページ
*/
?>
<?php get_header(); ?>
<!--Menu-->
<?php get_template_part('content', 'menu'); ?>
<!-- fv -->

<!--maincontents-->
<main class="main">

  <!-- <header class="fv-sub">
      <div class="fv-sub__inner">
          <h2 class="fv-sub__title">Tora Code</h2>
          <img src="<?php echo get_template_directory_uri();?>/dist/img/mylogo.svg" alt="">
      </div>
  </header> -->


  <section id="contact7" class="contact">
  <?php breadcrumb(); ?>
      <div class="contact_inner inner-sm">
          <div class="heading fade-in">
              <h2 class="heading__title">Contact</h2>
          </div>
          <div class="body_home fade-in">
              <?php echo do_shortcode('[contact-form-7 id="71" title="コンタクトフォーム 1"]') ?>
          </div>
      </div>
  </section>

<?php get_footer(); ?>