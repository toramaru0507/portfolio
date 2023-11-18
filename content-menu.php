<!-- ヘッダー -->
<header class="header">
  <div class="header__inner">
    <!-- タイトル -->
    <div class="title-header">
      <a href="<?php echo esc_url(home_url()); ?>">
        <h1 class="heading__title">
          Tora Code
        </h1>
      </a>
    </div>
    <!--メニュー-->
    <nav class="top-nav">
      <?php
      // メニューIDの取得 
      $menu_name = 'gloval_nav';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);
      $menu_items = wp_get_nav_menu_items($menu->term_id);
      ?>
      <ul>
        <?php foreach ($menu_items as $item) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_attr($item->url); ?>">
              <?php echo esc_html($item->title); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>
  <!-- ハンバーガーメニュー -->
  <span class="nav_toggle">
    <span class="bar bar_top"></span>
    <span class="bar bar_mid"></span>
    <span class="bar bar_bottom"></span>
  </span>
  <!-- <span class="burger-musk"></span> -->
  <nav class="nav_header">
    <?php
    // メニューIDの取得 
    $menu_name = 'gloval_nav';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    ?>
    <ul class="list_nav_header">
      <?php foreach ($menu_items as $item) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo esc_attr($item->url); ?>">
            <?php echo esc_html($item->title); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>
</header>