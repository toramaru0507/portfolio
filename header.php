<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php the_title(); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <!-- キャッシュの問題が起きないように新しい日付順で出すようにしている。 -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/css/normalize.css">
  <link rel="stylesheet" href=<?php echo get_stylesheet_directory_uri() . '/dist/css/style.css?';echo date("YmdHi"); ?>>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SCR8CXXQVR"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-SCR8CXXQVR');
  </script>
  <?php wp_head(); ?>
</head>

<body>