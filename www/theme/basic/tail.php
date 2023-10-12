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
            <p class="foot-info"><span class="foot-info_l">T.</span> <span class="foot-info_r">070.4178.1026</span></p>
            <p class="foot-info"><span class="foot-info_l">F.</span> <span class="foot-info_r">050.4038.4246</span></p>
            <p class="foot-info"><span class="foot-info_l">Email.</span> <span class="foot-info_r">vpsoft@naver.com, vpsoftkorea@gmail.com</span></p>
            <p class="foot-info"><span class="foot-info_l">Addr.</span> 
              <span class="foot-info_r">
              <?php if ($lang == "") { //(기본)영문
                echo "A-2F, 20, Daedeok-daero 512beon-gil, Yuseong-gu, Daejeon, Republic of Korea (34126)";
              } else if ($lang == "ko") { //국문
                echo "대전광역시 유성구 대덕대로 512번길 20, A-2F (34126)";
              }?>
              </span>
            </p>
          </div>
        </li>
        <li class="foot-in foot-r">
          <div class="foot-copyright">
            Copyright © VP OPTICS. All Rights Reserved.
          </div>
          <div class="foot-link-wr">
            <a href="" class="foot-link">
            <?php if ($lang == "") { //(기본)영문
              echo "Legal Notice";
            } else if ($lang == "ko") { //국문
              echo "";
            }?>
            </a>
            <a href="" class="foot-link">
            <?php if ($lang == "") { //(기본)영문
              echo "Privacy Policy";
            } else if ($lang == "ko") { //국문
              echo "";
            }?>
            </a>
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