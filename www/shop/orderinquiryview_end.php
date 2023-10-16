<?
include_once('./_common.php');

$compPrice = $_POST['compPrice'];
$compId = $_POST['compId'];
$compUid = $_POST['compUid'];


// if(!$comPrice) {
//   if($lang == "") { //(기본)영문
//     alert('There is no order information.', G5_URL);     
//   } else if ($lang == "ko") { //국문
//     alert('주문정보가 없습니다.', G5_URL);
//   }
// }


$g5['title'] = '주문완료';
include_once('./_head.php');
?>



<div class="container">
  <div id="order_end">

    <div class="wrapper">
      <div class="join-fin">
        <div class="join-fin-icon"><img src="/source/img/icon-join_fin.png" alt=""></div>
        <p class="reg_result_p join-fin-txt1">
          Order completed
        </p>
        <p class="result_txt">
          Your order has been successfully completed.
        </p>
        <ul class="order-end-info-ul">
          <li class="order-end-info-li">
            <p class="order-end-info-txt order-end-info-txt--1">
              <?php if ($lang == "") { //(기본)영문
                  echo "Order number";
              } else if ($lang == "ko") { //국문
                  echo "주문번호";
              }?>
            </p>
            <p class="order-end-info-txt order-end-info-txt--2"><?php echo $compId?></p>
          </li>
          <li class="order-end-info-li">
            <p class="order-end-info-txt order-end-info-txt--1">
              <?php if ($lang == "") { //(기본)영문
                  echo "Payment amount";
              } else if ($lang == "ko") { //국문
                  echo "주문금액";
              }?></p>
            <p class="order-end-info-txt order-end-info-txt--2">
              <?php echo $compPrice; ?>
              <?php if ($lang == "") { //(기본)영문
                  echo "won";
              } else if ($lang == "ko") { //국문
                  echo "원";
              }?></p>
          </li>
        </ul>
        <div class="btn_confirm_reg">
          <a href="<?php echo '/shop/orderinquiryview.php?od_id=' . $compId . '&amp;uid=' . $compUid; ?>" class="reg_btn_submit">
          <?php if ($lang == "") { //(기본)영문
              echo "Check order details";
          } else if ($lang == "ko") { //국문
              echo "주문내역확인";
          }?>
          </a>
        </div>
      </div>
    </div>

  </div>
</div>




<?php
include_once('./_tail.php');
?>