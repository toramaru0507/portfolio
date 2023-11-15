<?php
//js読み込み
function add_my_scripts() {
  wp_enqueue_script( 
    'main-script', 
    get_theme_file_uri( 'js/main.js' ), 
    array( 'jquery' )
  );
}
add_action('wp_enqueue_scripts', 'add_my_scripts');


//add_action('wp_footer', 'add_my_scripts');
// カスタムヘッダー画像の設置
$custom_header_defaults = array(
    'default_image' => get_bloginfo('template_url').'/image/headers/logo.png',
    'header-text' => false, //ヘッダー画像上にテキストをかぶせる
);
//カスタムヘッダー機能を有効にする
add_theme_support('custom-header', $custom_header_defaults );

//カスタムメニュー使用
register_nav_menus( array(
    'mainmenu' => 'モバイル用ナビ',
    'pcmenu' => 'PC用ナビ',
    'gloval_nav' => 'グローバルナビゲーション',
    
));




//svg画像を許可
function add_file_types_to_uploads($file_types){
 
    $new_filetypes = array();
    $new_filetypes['svg'] = 'img/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
 
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

//アイキャッチ画像
add_theme_support('post-thumbnails');

//続きを読むに変更
function tuzuki_excerpt_more($post) {
	return '<a href="'. get_permalink($post->ID) . '">' . '続きを読む' . '</a>';
}
add_filter('excerpt_more', 'tuzuki_excerpt_more');

//php
function widget_text_exec_php( $widget_text ) {
    if( strpos( $widget_text, '<' . '?' ) !== false ) {
        ob_start();
        eval( '?>' . $widget_text );
        $widget_text = ob_get_contents();
        ob_end_clean();
    }
    return $widget_text;
}
add_filter( 'widget_text', 'widget_text_exec_php', 99 );

// パンくずリスト
function breadcrumb() {
    $home = '<li><a href="'.get_bloginfo('url').'" >TOP</a></li>';

    echo '<ul class="breadcrumb">';
    if ( is_front_page() ) {
        // トップページの場合
    }
    else if ( is_single() ) {
    // 投稿ページの場合
    $cat = '<li><a href="https://myportfolio.toraji0507.com/works/" >WORKS</a></li>';
    echo $home,$cat;
    the_title('<li>', '</li>');
    }

    else if( is_page() ) {
    // 固定ページの場合
    echo $home;
    the_title('<li>', '</li>');
    }
    else if( is_404() ) {
    // 404ページの場合
    echo $home;
    echo '<li>ページが見つかりません</li>';
    }
    echo "</ul>";
}
 
// アーカイブの余計なタイトルを削除
add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_month() ) {
        $title = single_month_title( '', false );
    }
    return $title;
});


function register_css()
{ // 管理画面でないなら
  if (!is_admin()) {
    wp_enqueue_style('AOS',  get_template_directory_uri() .  '/css/aos.css');
    }
}

// 登録済みのjQueryを解除して、登録し直す
function remove_default_jquery()
{
  // 管理画面でないなら
  if (!is_admin()) {
    wp_enqueue_script('AOS', get_template_directory_uri() . '/js/aos.js', array(), 1.0, true);
    }
}


?>





