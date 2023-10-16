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

if ($lang == "") { //(기본)영문
  $g5['title'] = "Coupon";
} else if ($lang == "ko") { //국문
  $g5['title'] = "쿠폰 내역";
}

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
  <div id="coupon" class="sb_container">
    <div class="wrapper">
      <div class="sb_top">
        <p class="sb-title">Coupon</p>
      </div>

      <div class="cou_wrap">
        <ul>
          <?php
          $cp_count = 0;
          for($i=0; $row=sql_fetch_array($result); $i++) {
              if(is_used_coupon($member['mb_id'], $row['cp_id']))
                  continue;

              if ($lang == "") { //(기본)영문
                if($row['cp_method'] == 1) {
                    $sql = " select ca_name from {$g5['g5_shop_category_table']} where ca_id = '{$row['cp_target']}' ";
                    $ca = sql_fetch($sql);
                    $cp_target = $ca['ca_name'].' Product Discount';
                } else if($row['cp_method'] == 2) {
                    $cp_target = 'payment amount';
                } else if($row['cp_method'] == 3) {
                    $cp_target = 'shipping fee';
                } else {
                    $it = get_shop_item($row['cp_target'], true);
                    $cp_target = $it['it_name'].' 상품할인';
                }
              } else if ($lang == "ko") { //국문
                if($row['cp_method'] == 1) {
                    $sql = " select ca_name from {$g5['g5_shop_category_table']} where ca_id = '{$row['cp_target']}' ";
                    $ca = sql_fetch($sql);
                    $cp_target = $ca['ca_name'].'의 상품할인';
                } else if($row['cp_method'] == 2) {
                    $cp_target = '결제금액 할인';
                } else if($row['cp_method'] == 3) {
                    $cp_target = '배송비 할인';
                } else {
                    $it = get_shop_item($row['cp_target'], true);
                    $cp_target = $it['it_name'].' 상품할인';
                }
              }

              if($row['cp_type'])
                  $cp_price = $row['cp_price'].'%';
              else
                  $cp_price = '￦ '.number_format($row['cp_price']);

              $cp_count++;
          ?>
          <li>
              <div class="cou_top">
                  <span class="cou_tit"><?php echo $row['cp_subject']; ?></span>
                  <span class="cou_pri"><?php echo $cp_price; ?></span>
              </div>
              <div>
                  <span class="cou_target"><?php echo $cp_target; ?></span>
                  <span class="cou_date"><?php echo substr($row['cp_start'], 0, 10); ?> ~ <?php echo substr($row['cp_end'], 0, 10); ?></span>
              </div>
          </li>
          <?php
          }

          if(!$cp_count)
              echo '<li class="empty_li">사용할 수 있는 쿠폰이 없습니다.</li>';
          ?>
        </ul>
      </div>
      
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

<?php
include_once(G5_PATH.'/tail.sub.php');