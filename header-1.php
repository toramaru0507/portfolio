<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <!-- キャッシュの問題が起きないように新しい日付順で出すようにしている。 -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css">
    <link rel="stylesheet" href=<?php echo get_stylesheet_directory_uri().'/css/header.css?'; echo date("YmdHi"); ?>>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(function() {
      $(window).scroll(function() {
        const wHeight = $(window).height();
        const scrollAmount = $(window).scrollTop();
        $('.fade-in').each(function() {
          const targetPosition = $(this).offset().top;
          if (scrollAmount > targetPosition - wHeight + 60) {
            $(this).addClass("fadeInDown downup");
          }
        });
        $('.fade-left').each(function() {
          const targetPosition = $(this).offset().top;
          if (scrollAmount > targetPosition - wHeight + 60) {
            $(this).addClass("fadeInDown slide-left");
          }
        });
        $('.fade-right').each(function() {
          const targetPosition = $(this).offset().top;
          if (scrollAmount > targetPosition - wHeight + 60) {
            $(this).addClass("fadeInDown slide-right");
          }
        });
      });
    });
  </script>
    <?php wp_head(); ?>
</head>
<body>