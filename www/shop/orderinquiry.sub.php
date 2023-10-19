<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if (!defined("_ORDERINQUIRY_")) exit; // 개별 페이지 접근 불가

include_once(G5_PLUGIN_PATH.'/jquery-ui/datepicker.php');

// 테마에 orderinquiry.sub.php 있으면 include
if(defined('G5_THEME_SHOP_PATH')) {
    $theme_inquiry_file = G5_THEME_SHOP_PATH.'/orderinquiry.sub.php';
    if(is_file($theme_inquiry_file)) {
        include_once($theme_inquiry_file);
        return;
        unset($theme_inquiry_file);
    }
}
?>

<div class="od-sch-box">
  <form action="" class="od-sch-form">
    <div class="od-sch-btns">
      <!-- 클릭되어 활성화 된 od-sch-btn 에 active 클래스 붙이기 -->
      <button type="button" class="od-sch-btn">
        <?php if ($lang == "") { //(기본)영문
          echo "Today";
        } else if ($lang == "ko") { //국문
          echo "오늘";
        }?>
      </button>
      <button type="button" class="od-sch-btn">
        <?php if ($lang == "") { //(기본)영문
          echo "7 days";
        } else if ($lang == "ko") { //국문
          echo "7일";
        }?>
      </button>
      <button type="button" class="od-sch-btn">
        <?php if ($lang == "") { //(기본)영문
          echo "15 days";
        } else if ($lang == "ko") { //국문
          echo "15일";
        }?>
      </button>
      <button type="button" class="od-sch-btn">
        <?php if ($lang == "") { //(기본)영문
          echo "1 month";
        } else if ($lang == "ko") { //국문
          echo "1달";
        }?>
      </button>
      <button type="button" class="od-sch-btn">
        <?php if ($lang == "") { //(기본)영문
          echo "3 months";
        } else if ($lang == "ko") { //국문
          echo "3달";
        }?>
      </button>
    </div>
    <div class="od-sch-date-wr">
      <?php if ($lang == "") { ?>
      <input type="text" class="aq-input od-sch-date1_en">
      ~
      <input type="text" class="aq-input od-sch-date2_en">
      <? } else if ($lang == "ko") {?>
      <input type="text" class="aq-input od-sch-date1_ko">
      ~
      <input type="text" class="aq-input od-sch-date2_ko">
      <? } ?>
    </div>
    <div class="od-sch-submit">
      <button type="submit">
        <?php if ($lang == "") { //(기본)영문
          echo "Search";
        } else if ($lang == "ko") { //국문
          echo "검색";
        }?>
      </button>
    </div>
  </form>
</div>

<!-- 주문 내역 목록 시작 { -->
<?php if (!$limit) { ?>총 <?php echo $cnt; ?> 건<?php } ?>

<div id="od_wrap" class="tbl_head03 tbl_wrap">
    <table>
    <thead>
    <tr>
        <th scope="col">
          <?php if ($lang == "") { //(기본)영문
            echo "Order Number/Date";
          } else if ($lang == "ko") { //국문
            echo "주문서번호";
          }?>
        </th>
        <!--  업체와 협의 필요
        <th scope="col">
          <?php if ($lang == "") { //(기본)영문
            echo "Product information";
          } else if ($lang == "ko") { //국문
            echo "상품정보";
          }?>
        </th>
        -->
        <th scope="col">
          <?php if ($lang == "") { //(기본)영문
            echo "Qty";
          } else if ($lang == "ko") { //국문
            echo "상품수";
          }?>
        </th>
        <th scope="col">
          <?php if ($lang == "") { //(기본)영문
            echo "Order amount";
          } else if ($lang == "ko") { //국문
            echo "주문금액";
          }?>
        </th>
        <th scope="col">
          <?php if ($lang == "") { //(기본)영문
            echo "Order Status";
          } else if ($lang == "ko") { //국문
            echo "상태";
          }?>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    $sql = " select *
               from {$g5['g5_shop_order_table']}
              where mb_id = '{$member['mb_id']}'
              order by od_id desc
              $limit ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++)
    {
        $uid = md5($row['od_id'].$row['od_time'].$row['od_ip']);

        if ($lang == "") { //(기본)영문
          switch($row['od_status']) {
            case '주문':
                $od_status = '<span class="od_status status_01">Waiting for deposit</span>';
                break;
            case '입금':
                $od_status = '<span class="od_status status_02">Payment completed</span>';
                break;
            case '준비':
                $od_status = '<span class="od_status status_03">Preparing for delivery</span>';
                break;
            case '배송':
                $od_status = '<span class="od_status status_04">In transit</span>';
                break;
            case '완료':
                $od_status = '<span class="od_status status_05">Delivered</span>';
                break;
            default:
                $od_status = '<span class="od_status status_06">withdraw</span>';
                break;
          }
        } else if ($lang == "ko") { //국문
          switch($row['od_status']) {
            case '주문':
                $od_status = '<span class="od_status status_01">입금확인중</span>';
                break;
            case '입금':
                $od_status = '<span class="od_status status_02">입금완료</span>';
                break;
            case '준비':
                $od_status = '<span class="od_status status_03">상품준비중</span>';
                break;
            case '배송':
                $od_status = '<span class="od_status status_04">상품배송</span>';
                break;
            case '완료':
                $od_status = '<span class="od_status status_05">배송완료</span>';
                break;
            default:
                $od_status = '<span class="od_status status_06">주문취소</span>';
                break;
          }
        }
    ?>

    <tr>
        <td class="od_inq-idx">
          <a href="<?php echo G5_SHOP_URL; ?>/orderinquiryview.php?od_id=<?php echo $row['od_id']; ?>&amp;uid=<?php echo $uid; ?>" class="od_id">
            <?php echo $row['od_id']; ?>
            <span class="od_inq-mo">(<?php echo date("Y.m.d", strtotime($row['od_time'])) ?>)</span>
          </a>
          <a href="<?php echo G5_SHOP_URL; ?>/orderinquiryview.php?od_id=<?php echo $row['od_id']; ?>&amp;uid=<?php echo $uid; ?>" class="od_date">
            <?php echo date("Y.m.d", strtotime($row['od_time'])) ?>
          </a>
          <div class="od_inq-mo od_inq_txtwr">
            <p class="od_inq-txt">
              <span>
                (
                  <?php echo $row['od_cart_count']; ?>
                  <?php if ($lang == "") { //(기본)영문
                    echo "pcs";
                  } else if ($lang == "ko") { //국문
                    echo "개";
                  }?>
                )
              </span>
              <span>
              <?php echo display_price($row['od_cart_price'] + $row['od_send_cost'] + $row['od_send_cost2']); ?>
              <?php if ($lang == "") { //(기본)영문
                echo "won";
              } else if ($lang == "ko") { //국문
                echo "원";
              }?>
              </span>
            </p>
            <p class="od_inq-txt">
              <span>
              <?php echo $od_status; ?>
              </span>
            </p>
          </div>
        </td>
        <!--  업체와 협의 필요
        <td class=""></td>
        -->
        <td class="td_numbig"><?php echo $row['od_cart_count']; ?></td>
        <td class="td_numbig"><?php echo display_price($row['od_cart_price'] + $row['od_send_cost'] + $row['od_send_cost2']); ?></td>
        <td><?php echo $od_status; ?></td>
    </tr>

    <?php
    }

    if ($i == 0) {
        if ($lang == "") { //(기본)영문
            echo '<tr><td colspan="7" class="empty_table">There is no order history.</td></tr>';
        } else if ($lang == "ko") { //국문
            echo '<tr><td colspan="7" class="empty_table">주문 내역이 없습니다.</td></tr>';
        }
    }
    ?>
    </tbody>
    </table>
</div>
<!-- } 주문 내역 목록 끝 -->


<script>
  $(function() {
    $(".od-sch-date1_en, .od-sch-date2_en").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy.mm.dd",
        showButtonPanel: true,
        yearRange: "c-99:c+99",
        maxDate: "+0d",
        prevText: 'Prev',
        nextText: 'Next',
        closeText: "Close",
        currentText: "Today",
        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
        dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        showMonthAfterYear: true
    });

    $(".od-sch-date1_ko, .od-sch-date2_ko").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy.mm.dd",
        showButtonPanel: true,
        yearRange: "c-99:c+99",
        maxDate: "+0d",
    });
});
</script>