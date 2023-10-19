<?php
include_once('./_common.php');

include_once('./_head.php');

if (G5_IS_MOBILE) {
    include_once(G5_MSHOP_PATH.'/coupon.php');
    return;
}

// 테마에 coupon.php 있으면 include
if(defined('G5_THEME_SHOP_PATH')) {
    $theme_coupon_file = G5_THEME_SHOP_PATH.'/coupon.php';
    if(is_file($theme_coupon_file)) {
        include_once($theme_coupon_file);
        return;
        unset($theme_coupon_file);
    }
}

if ($is_guest)
    alert_close('회원만 조회하실 수 있습니다.');

$g5['title'] = $member['mb_nick'].' 님의 쿠폰 내역';
include_once(G5_PATH.'/head.sub.php');

$sql = " select cp_id, cp_subject, cp_method, cp_target, cp_start, cp_end, cp_type, cp_price
            from {$g5['g5_shop_coupon_table']}
            where mb_id IN ( '{$member['mb_id']}', '전체회원' )
              and cp_start <= '".G5_TIME_YMD."'
              and cp_end >= '".G5_TIME_YMD."'
            order by cp_no ";
$result = sql_query($sql);

add_stylesheet('<link rel="stylesheet" href="'.EUM_CSS_URL.'/mypage.css">', 0);
?>

<!-- 쿠폰 내역 시작 { -->
<div class="container">
  <div id="inquiry" class="sb_container">
    <div class="wrapper">
      <p style="font-size: 18px; font-weight: 500; color: #f00">※본 페이지 개발 필요 (확인 후 해당 p태그 삭제)</p>

      <div class="sb_top">
        <a href="/shop/mypage.php" class="sb-title">
          <?php if ($lang == "") { //(기본)영문
              echo "My page";
          } else if ($lang == "ko") { //국문
              echo "마이페이지";
          }?>
        </a>
      </div>

      <?php include G5_THEME_SHOP_PATH.'/mypage_top.php'; ?>

      <div class="mypage-body">
        <!-- 마이페이지 메뉴 시작 { -->
        <?php include G5_THEME_SHOP_PATH.'/mypage_menu.php'; ?>
        <script>
          $('.my-inquiry').addClass('active');
        </script>
        <!-- } 마이페이지 메뉴 끝 -->
        <div class="mypage-in">
          <p class="mypage-in-tit">
            <?php if ($lang == "") { //(기본)영문
                echo "Inquiry details";
            } else if ($lang == "ko") { //국문
                echo "문의내역";
            }?>
          </p>


          <section id="mp-inquiry_list">
            <div class="sit_use_top2">
              <div class="sit_use_total">Total <span>2</span></div>
            </div>

            <ol id="mp-inquiry_ol">
              <li class="mp-inquiry_li">
                <button type="button" class="mp-inquiry_li_title"><span
                    class="mp-inquirya_done">Replied</span>tet</button>

                <div id="mp-inquiry_con_0" class="mp-inquiry_con" style="display: none;">
                  <div class="mp-inquiry_p">
                    <div class="mp-inquiry_qaq">
                      <strong class="sound_only">문의내용</strong>
                      <p>test</p>
                    </div>
                    <div class="mp-inquiry_qaa">
                      <span class="mp-inquiry_qaa_icon">Reply</span>
                      <strong class="sound_only">답변</strong>
                      <p>Answer</p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="mp-inquiry_li">
                <button type="button" class="mp-inquiry_li_title"><span class="mp-inquirya_done">Replied</span>tet <img
                    src="<?php echo G5_SHOP_SKIN_URL;?>/img/icon_secret.gif" alt="비밀글"></button>

                <div id="mp-inquiry_con_0" class="mp-inquiry_con" style="display: none;">
                  <div class="mp-inquiry_p">
                    <div class="mp-inquiry_qaq">
                      <strong class="sound_only">문의내용</strong>
                      <p>test</p>
                    </div>
                    <div class="mp-inquiry_qaa">
                      <span class="mp-inquiry_qaa_icon">Reply</span>
                      <strong class="sound_only">답변</strong>
                      <p>Answer</p>
                    </div>
                  </div>
                </div>
              </li>
            </ol>
          </section>

          <div id="sod_ws_back" class="sod_back">
            <a href="<?php echo G5_SHOP_URL ?>/mypage.php" class="sod_back-btn">
              <img src="/source/img/icon-back_white.png" alt="">
              <?php if ($lang == "") { //(기본)영문
            echo "Back";
          } else if ($lang == "ko") { //국문
            echo "돌아가기";
          }?>
            </a>
          </div>

        </div>

      </div>

    </div>
  </div>
</div>

    <script>
      $(function () {
        $(".mp-inquiry_li_title").click(function () {
          var $con = $(this).siblings(".mp-inquiry_con");
          if ($con.is(":visible")) {
            $con.slideUp();
            $(this).closest('.mp-inquiry_li').removeClass('on');
          } else {
            $(".mp-inquiry_con:visible").slideUp();
            $con.slideDown(
              function () {
                // 이미지 리사이즈
                // $con.viewimageresize2();
              }
            );
            $('.mp-inquiry_li').removeClass('on');
            $(this).closest('.mp-inquiry_li').addClass('on');
          }
        });
      });
    </script>

    <?php
    include_once(G5_PATH.'/tail.php');