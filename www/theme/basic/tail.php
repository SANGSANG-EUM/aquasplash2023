<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>
</div><!-- header.php : #contents_dom -->
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 푸터 시작 { -->
<div class="container">
  <div id="footer" class="footer">
    <div class="wrapper">
      <ul class="foot-wr">
        <li class="foot-in foot-l">
          <div class="foot-info-wr">
            <p class="foot-info"><span class="foot-info_l">Add.</span> <span class="foot-info_r">18F, 136, Cheongsa-ro, Seo-gu, Daejeon, Republic of Korea</span></p>
            <p class="foot-info"><span class="foot-info_l">E-mail.</span> <span class="foot-info_r">info@vpoptics.com</span></p>
            <p class="foot-info"><span class="foot-info_l">Tel.</span> <span class="foot-info_r">070-4178-1026</span></p>
          </div>
          <div class="foot-copyright">
            Copyright © VP OPTICS. All Rights Reserved.
          </div>
        </li>
        <li class="foot-in foot-r">
          <div class="foot-link-wr">
            <a href="" class="foot-link">Legal Notice</a>
            <a href="" class="foot-link">Privacy Policy</a>
            <a href="https://www.vpoptics.com/" class="foot-link color" target="_blank">VP optics</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- } 푸터 끝 -->

<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");