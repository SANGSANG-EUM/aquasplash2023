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

  <div class="header-mo">
    <div class="mo-logo">
      <a href="/">
        <img src="/source/img/logo.png" alt="아쿠아스플래시">
      </a>
    </div>
    <button type="button" class="mo-btn">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>

  <div class="header-in">
    <div class="hd-top">
      <div id="hd_logo" class="hd_logo">
        <a href="/">
          <img src="/source/img/logo.png" alt="아쿠아스플래시">
        </a>
      </div>
      <nav id="hd_gnb" class="hd_gnb">
        <ul class="depth1-ul">
          <li class="depth1-li">
            <a href="/sub/colour">COLOUR LENSES</a>
          </li>
          <li class="depth1-li">
            <a href="<?php if ($lang == "") { //(기본)영문
                echo "/shop/list-20";
            } else if ($lang == "ko") { //국문
                echo "";
            }?>
            ">CLEAR LENSES</a>
          </li>
          <li class="depth1-li">
            <a href="<?php if ($lang == "") { //(기본)영문
                echo "/shop/1696577552";
            } else if ($lang == "ko") { //국문
                echo "";
            }?>">MPS</a>
          </li>
          <li class="depth1-li">
            <a href="<?php if ($lang == "") { //(기본)영문
                echo "/media_en";
            } else if ($lang == "ko") { //국문
                echo "media_ko";
            }?>">COMMUNITY</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="hd-btm">
      <div class="hd-snb">
        <ul class="hd-snb-ul">
          <li class="hd-snb-li">
          <?php if ($is_member) {?>
            <a href="/shop/mypage.php">
              <div class="snb-img">
                <img src="/source/img/icon-mypage_gray.png" alt="" class="icon-normal">
                <img src="/source/img/icon-mypage_green.png" alt="" class="icon-hover">
              </div>
              <p>MY PAGE</p>
            </a>
            <?php } else { ?>
            <a href="/bbs/register.php">
              <div class="snb-img">
                <img src="/source/img/icon-join_gray.png" alt="" class="icon-normal">
                <img src="/source/img/icon-join_green.png" alt="" class="icon-hover">
              </div>
              <p>JOIN</p>
            </a>
            <?php } ?>
          </li>
          <li class="hd-snb-li">
            <a href="/shop/cart.php">
              <div class="snb-img">
                <img src="/source/img/icon-cart_gray.png" alt="" class="icon-normal">
                <img src="/source/img/icon-cart_green.png" alt="" class="icon-hover">
                <div class="cart-num"><?php echo get_boxcart_datas_count(); ?></div>
              </div>
              <p>CART</p>
            </a>
          </li>
          <li class="hd-snb-li">
            <?php if ($is_member) {?>
            <a href="<?php echo G5_URL; ?>/bbs/logout.php">
              <div class="snb-img">
                <img src="/source/img/icon-logout_gray.png" alt="" class="icon-normal">
                <img src="/source/img/icon-logout_green.png" alt="" class="icon-hover">
              </div>
              <p>LOGOUT</p>
            </a>
            <?php } else { ?>
            <a href="<?php echo G5_URL; ?>/bbs/login.php">
              <div class="snb-img">
                <img src="/source/img/icon-login_gray.png" alt="" class="icon-normal">
                <img src="/source/img/icon-login_green.png" alt="" class="icon-hover">
              </div>
              <p>LOGIN</p>
            </a>
            <?php } ?>
          </li>
          <li class="hd-snb-li">
            <a href="">
              <div class="snb-img">
                <img src="/source/img/icon-lang_gray.png" alt="" class="icon-normal">
                <img src="/source/img/icon-lang_green.png" alt="" class="icon-hover">
              </div>
              <p>KOR</p>
            </a>
          </li>
        </ul>
      </div>
      <div class="hd-snb">
        <ul class="hd-sns-ul">
          <li class="hd-sns-li instagram">
            <a href="https://instagram.com/aquasplashlens_official?utm_medium=copy_link" target="_blank">
              <img src="/source/img/icon-instagram_gray.png" alt="인스타그램" class="icon-normal">
              <img src="/source/img/icon-instagram_color.png" alt="인스타그램" class="icon-hover">
            </a>
          </li>
          <li class="hd-sns-li youtube">
            <a href="https://www.youtube.com/channel/UC0ZPI0HKfcpVDHMAeP4banA" target="_blank">
              <img src="/source/img/icon-youtube_gray.png" alt="유튜브" class="icon-normal">
              <img src="/source/img/icon-youtube_color.png" alt="유튜브" class="icon-hover">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
</div>
<!-- } 헤더 끝 -->

<script>
  if (<?php echo json_encode($bo_table); ?>) {
    $('.depth1-li').eq(3).addClass('on');
  }
</script>

<!-- 콘텐츠 시작 { -->
<div id="contents_dom">