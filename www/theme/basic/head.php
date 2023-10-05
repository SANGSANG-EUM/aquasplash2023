<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

include EUM_INCLUDE_PATH.'/menus.php';
?>

<?php
if(defined('_INDEX_')) { // index에서만 실행
  include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<!-- 헤더 시작 { -->
<div id="header" class="header">

  <div class="hd-top">
    <div id="hd_logo" class="hd_logo">
      <a href="/">
        <img src="/source/img/logo.png" alt="아쿠아스플래시">
      </a>
    </div>
    <nav id="hd_gnb" class="hd_gnb">
      <ul class="depth1-ul">
        <li class="depth1-li">
          <a href="">COLOUR LENSES</a>
        </li>
        <li class="depth1-li">
          <a href="">CLEAR LENSES</a>
        </li>
        <li class="depth1-li">
          <a href="">MPS</a>
        </li>
        <li class="depth1-li">
          <a href="">COMMUNITY</a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="hd-btm">

    <div class="hd-snb">
      <ul class="hd-snb-ul">
        <li class="hd-snb-li">
          <a href="/shop/mypage.php">
            <img src="/source/img/icon-mypage_gray.png" alt="" class="icon-normal">
            <img src="/source/img/icon-mypage_green.png" alt="" class="icon-hover">
            <p>MY PAGE</p>
          </a>
        </li>
        <li class="hd-snb-li">
          <a href="/shop/cart.php">
            <img src="/source/img/icon-cart_gray.png" alt="" class="icon-normal">
            <img src="/source/img/icon-cart_green.png" alt="" class="icon-hover">
            <p>CART</p>
          </a>
        </li>
        <li class="hd-snb-li">
          <?php if ($is_member) {?>
          <a href="<?php echo G5_URL; ?>/bbs/logout.php">
            <img src="/source/img/icon-logout_gray.png" alt="" class="icon-normal">
            <img src="/source/img/icon-logout_green.png" alt="" class="icon-hover">
            <p>LOGOUT</p>
          </a>
          <?php } else { ?>
          <a href="<?php echo G5_URL; ?>/bbs/login.php">
            <img src="/source/img/icon-login_gray.png" alt="" class="icon-normal">
            <img src="/source/img/icon-login_green.png" alt="" class="icon-hover">
            <p>LOGIN</p>
          </a>
          <?php } ?>
        </li>
        <li class="hd-snb-li">
          <a href="">
            <img src="/source/img/icon-lang_gray.png" alt="" class="icon-normal">
            <img src="/source/img/icon-lang_green.png" alt="" class="icon-hover">
            <p>KOR</p>
          </a>
        </li>
      </ul>
    </div>

    <div class="hd-snb">
      <ul class="hd-sns-ul">
        <li class="hd-sns-li instagram">
          <a href="" target="_blank">
            <img src="/source/img/icon-instagram_gray" alt="인스타그램" class="icon-normal">
            <img src="/source/img/icon-instagram_green" alt="인스타그램" class="icon-hover">
          </a>
        </li>
        <li class="hd-sns-li youtube">
          <a href="" target="_blank">
            <img src="/source/img/icon-youtube_gray" alt="유튜브" class="icon-normal">
            <img src="/source/img/icon-youtube_green" alt="유튜브" class="icon-hover">
          </a>
        </li>
      </ul>
    </div>

  </div>
</div>
<!-- } 헤더 끝 -->


<!-- 콘텐츠 시작 { -->
<div id="contents_dom">