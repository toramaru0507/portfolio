// レスポンシブ時

// ハンバーメニュークリック時のクラス付与
$('.nav_toggle').on('click', function () {
    $('.bar').toggleClass('show');
    $('.nav_header').toggleClass('open');
    $('.burger-musk').fadeToggle(300);
  });

// リンククリック時のクラス削除
$('a[href^="#"]').click(function() {
    $('.bar').removeClass('show');
    $('.nav_header').removeClass('open');
    $('.burger-musk').fadeToggle(0);
});

$(window).on('scroll', function () {
  $('.ttl').fadeIn(3000);
});
