<?php
/*
Template Name: それぞれのworksページ
*/
?>
<?php get_header(); ?>
<!--Menu-->
<?php get_template_part('content', 'menu'); ?>
<!-- fv -->
<header class="fv-sub">
    <div class="container">
        <h2 class="heading__title">Toraji Corporation</h2>
        <img src="<?php echo get_template_directory_uri();?>/img/mylogo.svg" alt="">
    </div>
</header>
<?php breadcrumb(); ?>

<!--maincontents-->
<main class="main">
    <section class="single">
        <div class="single__inner inner-sm">
            <div class="work_heading">
                <h3 class="work_heading__title"><?php the_title(); ?></h3>
            </div>
            <?php the_post_thumbnail(array( 900, 570 ) ); ?>
            <table>
              <tbody>
              <?php
                  $detail = SCF::get('detail');
                  foreach ($detail as $fields) { 
              ?>
                <tr>
                  <th><?php echo $fields['title']; ?></th>
                  <td><?php echo $fields['textarea']; ?></td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
            <div class="pagenation">
              <?php previous_post_link('%link', '<span class="prev"><  Previous</span>', TRUE); ?>
              <div class="button">
                <a class="button_edge" href="<?php echo esc_url(home_url()); ?>/works/">Work一覧へ</a>
              </div>
              <?php next_post_link('%link', '<span class="next">Next  ></span>' ,TRUE); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>