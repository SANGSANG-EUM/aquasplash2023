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
<div id="header">
  <h1 id="hd_logo">
    <a href="/">LOGO</a>
  </h1>

  <nav id="hd_gnb">
    <ul class="depth1">
      <?php foreach ($sb_menus as $menu) { ?>
      <li>
        <a href="<?php echo $menu['link'];?>"><?php echo $menu['name'];?></a>
        <?php if ( isset($menu['sb_2menus']) ) { ?>
        <ul class="depth2">
          <?php foreach ($menu['sb_2menus'] as $menu2) { ?>
          <li>
            <a href="<?php echo $menu2['link'];?>"><?php echo $menu2['name'];?></a>
            <?php if ( isset($menu2['sb_3menus']) ) { ?>
            <ul class="depth3">
              <?php foreach ($menu2['sb_3menus'] as $menu3) { ?>
              <li>
                <a href="<?php echo $menu3['link'];?>"><?php echo $menu3['name'];?></a>
              </li>
              <?php } ?>
            </ul>
            <?php } ?>
          </li>
          <?php } ?>
        </ul>
        <?php } ?>
      </li>
      <?php } ?>
    </ul>
  </nav>
</div>
<!-- } 헤더 끝 -->


<!-- 콘텐츠 시작 { -->
<div id="contents_dom">