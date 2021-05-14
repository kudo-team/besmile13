jQuery(window).scroll(function () {　// マーカーの動きをつける
    jQuery(".marker-animation").each(function () {
        var position = jQuery(this).offset().top; //ページの一番上から要素までの距離を取得
        var scroll = jQuery(window).scrollTop(); //スクロールの位置を取得
        var windowHeight = jQuery(window).height(); //ウインドウの高さを取得
        if (scroll > position - windowHeight) { //スクロール位置が要素の位置を過ぎたとき
            jQuery(this).addClass('active'); //クラス「active」を与える
        }
    });
    jQuery(".fadeup").each(function () {
        var position = jQuery(this).offset().top; //ページの一番上から要素までの距離を取得
        var scroll = jQuery(window).scrollTop(); //スクロールの位置を取得
        var windowHeight = jQuery(window).height(); //ウインドウの高さを取得
        if (scroll > position - windowHeight) { //スクロール位置が要素の位置を過ぎたとき
            jQuery(this).addClass('is-animated'); //クラス「is-animated」を与える
        }
    });
});
jQuery(function () {
    // スクロールしたときに実行
    jQuery(window).scroll(function () {
        // 目的のスクロール量を設定(px)
        var TargetPos = 35;
        // 現在のスクロール位置を取得
        var ScrollPos = jQuery(window).scrollTop();
        // 現在位置が目的のスクロール量に達しているかどうかを判断
        if (ScrollPos >= TargetPos) {
            // 達していれば表示
            jQuery("#page_top").fadeIn();
            if (window.matchMedia('(max-width:768px)').matches) {
                jQuery(".Hamburger__Menu--btn").css("top", "10px");
            }
        } else {
            // 達していなければ非表示
            jQuery("#page_top").fadeOut();
            if (window.matchMedia('(max-width:768px)').matches) {
                jQuery(".Hamburger__Menu--btn").css("top", "70px");
            }
        }
    });
});
jQuery('#contact_li').click(function () {
    jQuery("#menu-btn-check").prop("checked", false);
});
jQuery('a[href^="#"]').click(function (e) {
    var href = jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;

    jQuery.when(
        jQuery("html, body").animate({
            scrollTop: position
        }, 800, "swing"),
        e.preventDefault(),
    ).done(function () {
        var diff = target.offset().top;
        if (diff === position) {
        } else {
            jQuery("html, body").animate({
                scrollTop: diff
            }, 10, "swing");
        }
    });
});