    <?php
/*
Template Name: カテゴリーページ
*/
?>

<?php get_header(); ?>
   
    <!--Menu-->
    <?php get_template_part('content', 'menu'); ?>
        
        <div id="main">
            <!-- blog list -->
            <section id="blog_list" class="site-width">
                <h1 class="title">BLOG</h1>
                <div id="content" class="article">
          
				<!-- 記事のループ -->
				<?php get_template_part('loop'); ?>
				  
				  <?php if(function_exists("pagination")) pagination($additional_loop->max_num_pages); ?>
                </div>
                
                <!-- sidebar -->
				<?php get_sidebar(); ?>
				
			</section>
    </div>
    
    <!--footer-->
    <?php get_footer(); ?>
