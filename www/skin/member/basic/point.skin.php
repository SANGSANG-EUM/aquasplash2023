<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once('./_head.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.EUM_CSS_URL.'/mypage.css">', 0);
?>

<div class="container">
  <div id="point" class="sb_container">
    <div class="wrapper">
      <div class="sb_top">
        <p class="sb-title">Mileage</p>
      </div>

      <div class="new_win_con2">
          <ul class="point_all">
            <li class="full_li">
              <?php if ($lang == "") { //(기본)영문
                echo "Total";
              } else if ($lang == "ko") { //국문
                echo "보유포인트";
              }?>
              <span class="po_tot"><b><?php echo number_format($member['mb_point']); ?></b>P</span>
            </li>
          </ul>
          <ul class="point_list">
              <?php
              $sum_point1 = $sum_point2 = $sum_point3 = 0;
              
              $i = 0;
              foreach((array) $list as $row){
                  $point1 = $point2 = 0;
                  $point_use_class = '';
                  if ($row['po_point'] > 0) {
                      $point1 = '+' .number_format($row['po_point']);
                      $sum_point1 += $row['po_point'];
                  } else {
                      $point2 = number_format($row['po_point']);
                      $sum_point2 += $row['po_point'];
                      $point_use_class = 'point_use';
                  }

                  $po_content = $row['po_content'];

                  $expr = '';
                  if($row['po_expired'] == 1)
                      $expr = ' txt_expired';
              ?>
              <li class="<?php echo $point_use_class; ?>">
                  <div class="point_top">
                      <span class="point_tit"><?php echo $po_content; ?></span>
                      <span class="point_num"><?php if ($point1) echo $point1; else echo $point2; ?></span>
                  </div>
                  <span class="point_date1"><?php echo $row['po_datetime']; ?></span>
                  <span class="point_date<?php echo $expr; ?>">
                    <?php if ($lang == "") { //(기본)영문
                      if ($row['po_expired'] == 1) { 
                        echo 'Expiration '.substr($row['po_expire_date'], 0);
                      } else {
                        $row['po_expire_date'] == '9999-12-31' ? '&nbsp;' : $row['po_expire_date'];
                      }
                    } else if ($lang == "ko") { //국문
                      if ($row['po_expired'] == 1) { 
                        echo '만료 '.substr($row['po_expire_date'], 0);
                      } else {
                        $row['po_expire_date'] == '9999-12-31' ? '&nbsp;' : $row['po_expire_date'];
                      }
                    }?>
                  </span>
              </li>
              <?php
                  $i++;
              }   // end foreach

              if ($i == 0)
                  echo '<li class="empty_li">자료가 없습니다.</li>';
              else {
                  if ($sum_point1 > 0)
                      $sum_point1 = "+" . number_format($sum_point1);
                  $sum_point2 = number_format($sum_point2);
              }
              ?>
              <!-- <li class="point_status">
                  소계
                  <span><?php //echo $sum_point1; ?></span>
                  <span><?php //echo $sum_point2; ?></span>
              </li> -->
          </ul>
      </div>

      <?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, $_SERVER['SCRIPT_NAME'].'?'.$qstr.'&amp;page='); ?>

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