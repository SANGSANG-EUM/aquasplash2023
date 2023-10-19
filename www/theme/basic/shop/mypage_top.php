<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if ($lang == "") { //(기본)영문
  $g5['title'] = "Mypage";
} else if ($lang == "ko") { //국문
  $g5['title'] = "마이페이지";
}

// 쿠폰
$cp_count = get_shop_member_coupon_count($member['mb_id'], true);

add_stylesheet('<link rel="stylesheet" href="'.EUM_CSS_URL.'/mypage.css">', 0);
?>



<div class="mypage-top-wr">
  <div class="mypage-top mypage-info">
    <div class="mypage-info-in">
      <a href="/shop/mypage.php">
        <p class="mypage-info-txt1"><?php echo $member['mb_name']; ?>,</p>
        <p class="mypage-info-txt2">
          <?php if ($lang == "") { //(기본)영문
                              echo "Thank you for visiting.";
                          } else if ($lang == "ko") { //국문
                              echo "";
                          }?>
        </p>
      </a>
    </div>
    <div class="mypage-info-in">
      <a href="/bbs/point.php">
        <p class="mypage-info-txt3">
          <?php if ($lang == "") { //(기본)영문
                              echo "Mileage";
                          } else if ($lang == "ko") { //국문
                              echo "마일리지";
                          }?>
        </p>
        <p class="mypage-info-txt4"><b><?php echo number_format($member['mb_point']); ?></b>P</p>
      </a>
    </div>
    <div class="mypage-info-in">
      <a href="/shop/coupon.php">
        <p class="mypage-info-txt3">
          <?php if ($lang == "") { //(기본)영문
                              echo "Coupon";
                          } else if ($lang == "ko") { //국문
                              echo "쿠폰";
                          }?>
        </p>
        <p class="mypage-info-txt4"><b><?php echo number_format($cp_count); ?></b></p>
      </a>
    </div>
  </div>
  <div class="mypage-top mypage-status">
    <!--
                    본 주석은 개발 전달내용으로 개발 후 지워주세요
                    주문 단계를 클릭시 해당 단계의 주문건만 모아보기 페이지로 이동됨
                    https://aquasplash.eumsvr.com/shop/orderinquiry.php 페이지 사용
                    -->
    <ul class="status_wrap">
      <li>
        <a href="<?php echo G5_SHOP_URL ?>/orderinquiry.php" class="status_in">
          <div class="status-cnt">5</div>
          <p class="status-txt">
            <?php if ($lang == "") { //(기본)영문
                            echo "Waiting for deposit";
                          } else if ($lang == "ko") { //국문
                            echo "";
                          }?>
          </p>
        </a>
      </li>
      <li>
        <a href="./orderinquiry.php" class="status_in">
          <div class="status-cnt">0</div>
          <p class="status-txt">
            <?php if ($lang == "") { //(기본)영문
                            echo "Payment completed";
                          } else if ($lang == "ko") { //국문
                            echo "";
                          }?>
          </p>
        </a>
      </li>
      <li>
        <a href="./orderinquiry.php" class="status_in">
          <div class="status-cnt">0</div>
          <p class="status-txt">
            <?php if ($lang == "") { //(기본)영문
                            echo "Preparing for delivery";
                          } else if ($lang == "ko") { //국문
                            echo "";
                          }?>
          </p>
        </a>
      </li>
      <li>
        <a href="./orderinquiry.php" class="status_in">
          <div class="status-cnt">0</div>
          <p class="status-txt">
            <?php if ($lang == "") { //(기본)영문
                            echo "In transit";
                          } else if ($lang == "ko") { //국문
                            echo "";
                          }?>
          </p>
        </a>
      </li>
      <li>
        <a href="./orderinquiry.php" class="status_in">
          <div class="status-cnt">0</div>
          <p class="status-txt">
            <?php if ($lang == "") { //(기본)영문
                            echo "Delivered";
                          } else if ($lang == "ko") { //국문
                            echo "";
                          }?>
          </p>
        </a>
      </li>
    </ul>
  </div>
</div>

<script>
    $('.hd-snb-li').eq(0).addClass('on');
</script>