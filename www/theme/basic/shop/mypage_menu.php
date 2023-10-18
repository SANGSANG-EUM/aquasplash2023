<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if ($lang == "") { //(기본)영문
  $g5['title'] = "Mypage";
} else if ($lang == "ko") { //국문
  $g5['title'] = "마이페이지";
}

add_stylesheet('<link rel="stylesheet" href="'.EUM_CSS_URL.'/mypage.css">', 0);
?>


<!-- 마이페이지 메뉴 시작 { -->
<section id="smb_my_ov">
  <!-- <h2>마이페이지 메뉴</h2> -->

  <ul id="smb_my_ov_nb">
    <li class="my-order">
      <a href="<?php echo G5_SHOP_URL ?>/orderinquiry.php">
        <?php if ($lang == "") { //(기본)영문
                    echo "Order details";
                  } else if ($lang == "ko") { //국문
                    echo "주문 내역";
                  }?>
      </a>
    </li>
    <li class="my-wish">
      <a href="<?php echo G5_SHOP_URL ?>/wishlist.php">
        <?php if ($lang == "") { //(기본)영문
                    echo "Wish";
                  } else if ($lang == "ko") { //국문
                    echo "관심상품";
                  }?>
      </a>
    </li>
    <li class="my-mileage">
      <a href="<?php echo G5_BBS_URL ?>/point.php">
        <?php if ($lang == "") { //(기본)영문
                    echo "Mileage";
                  } else if ($lang == "ko") { //국문
                    echo "포인트 내역";
                  }?>
      </a>
    </li>
    <li class="my-coupon">
      <a href="<?php echo G5_SHOP_URL ?>/coupon.php">
        <?php if ($lang == "") { //(기본)영문
                    echo "Coupon";
                  } else if ($lang == "ko") { //국문
                    echo "쿠폰 내역";
                  }?>
      </a>
    </li>
    <li class="my-inquiry">
      <a href="<?php echo G5_SHOP_URL ?>/inquiry.php">
        <?php if ($lang == "") { //(기본)영문
                    echo "Inquiry details";
                  } else if ($lang == "ko") { //국문
                    echo "문의 내역";
                  }?>
      </a>
    </li>
    <li class="my-destination">
      <a href="javascript:alert('Coming soon!');">
        <?php if ($lang == "") { //(기본)영문
                    echo "Shipping destination";
                  } else if ($lang == "ko") { //국문
                    echo "배송지 관리";
                  }?>
      </a>
    </li>
    <li class="my-information">
      <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=register_form.php">
        <?php if ($lang == "") { //(기본)영문
                    echo "Modifying information";
                  } else if ($lang == "ko") { //국문
                    echo "정보 수정";
                  }?>
      </a>
    </li>
  </ul>
</section>
<!-- } 마이페이지 메뉴 끝 -->