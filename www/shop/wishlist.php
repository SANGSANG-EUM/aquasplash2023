<?php
include_once('./_common.php');

if (!$is_member)
    goto_url(G5_BBS_URL."/login.php?url=".urlencode(G5_SHOP_URL.'/wishlist.php'));

if (G5_IS_MOBILE) {
    include_once(G5_MSHOP_PATH.'/wishlist.php');
    return;
}

// 테마에 wishlist.php 있으면 include
if(defined('G5_THEME_SHOP_PATH')) {
    $theme_wishlist_file = G5_THEME_SHOP_PATH.'/wishlist.php';
    if(is_file($theme_wishlist_file)) {
        include_once($theme_wishlist_file);
        return;
        unset($theme_wishlist_file);
    }
}

if ($lang == "") { //(기본)영문
  $g5['title'] = "Wish";
} else if ($lang == "ko") { //국문
  $g5['title'] = "위시리스트";
}
include_once('./_head.php');

add_stylesheet('<link rel="stylesheet" href="'.EUM_CSS_URL.'/mypage.css">', 0);
?>

<!-- 위시리스트 시작 { -->
<div class="container">
  <div id="sod_ws" class="sb_container">
    <div class="wrapper">
      <div class="sb_top">
        <p class="sb-title">
          <?php if ($lang == "") { //(기본)영문
              echo "My page";
          } else if ($lang == "ko") { //국문
              echo "마이페이지";
          }?>
        </p>
      </div>

      <?php include G5_THEME_SHOP_PATH.'/mypage_top.php'; ?>

      <div class="mypage-body">
        <!-- 마이페이지 메뉴 시작 { -->
        <?php include G5_THEME_SHOP_PATH.'/mypage_menu.php'; ?>
        <script>
        $('.my-wish').addClass('active');
        </script>
        <!-- } 마이페이지 메뉴 끝 -->
          <div class="mypage-in">
            <p class="mypage-in-tit">
            <?php if ($lang == "") { //(기본)영문
                echo "Wish";
            } else if ($lang == "ko") { //국문
                echo "관심상품";
            }?>
            </p>
            <form name="fwishlist" method="post" action="./cartupdate.php">
              <input type="hidden" name="act" value="multi">
              <input type="hidden" name="sw_direct" value="">
              <input type="hidden" name="prog" value="wish">
              <div id="smb_my_wish">
                  <ul>
                  <?php
                  $sql  = " select a.wi_id, a.wi_time, b.* from {$g5['g5_shop_wish_table']} a left join {$g5['g5_shop_item_table']} b on ( a.it_id = b.it_id ) ";
                  $sql .= " where a.mb_id = '{$member['mb_id']}' order by a.wi_id desc ";
                  $result = sql_query($sql);
                  for ($i=0; $row = sql_fetch_array($result); $i++) {
                      $out_cd = '';
                      $sql = " select count(*) as cnt from {$g5['g5_shop_item_option_table']} where it_id = '{$row['it_id']}' and io_type = '0' ";
                      $tmp = sql_fetch($sql);
                      if(isset($tmp['cnt']) && $tmp['cnt'])
                          $out_cd = 'no';
                      $it_price = get_price($row);
                      if ($row['it_tel_inq']) $out_cd = 'tel_inq';
                      $image = get_it_image($row['it_id'],325, 192);
                  ?>
                  <li>
                    <div class="smb_my_chk">
                      <?php
                      // 품절검사
                      if(is_soldout($row['it_id']))
                      {
                      ?>
                      품절
                      <?php } else { //품절이 아니면 체크할수 있도록한다 ?>
                      <div class="chk_box">
                        <input type="checkbox" name="chk_it_id[<?php echo $i; ?>]" value="1" id="chk_it_id_<?php echo $i; ?>" onclick="out_cd_check(this, '<?php echo $out_cd; ?>');" class="selec_chk">
                        <label for="chk_it_id_<?php echo $i; ?>"><span></span><b class="sound_only"><?php echo $row['it_name']; ?></b></label>
                      </div>
                      <?php } ?>
                      <input type="hidden" name="it_id[<?php echo $i; ?>]" value="<?php echo $row['it_id']; ?>">
                      <input type="hidden" name="io_type[<?php echo $row['it_id']; ?>][0]" value="0">
                      <input type="hidden" name="io_id[<?php echo $row['it_id']; ?>][0]" value="">
                      <input type="hidden" name="io_value[<?php echo $row['it_id']; ?>][0]" value="<?php echo $row['it_name']; ?>">
                      <input type="hidden" name="ct_qty[<?php echo $row['it_id']; ?>][0]" value="1">
                    </div>
                    <div class="smb_my_img">
                      <a href="<?php echo shop_item_url($row['it_id']); ?>"><?php echo $image; ?></a>
                      <a href="./wishupdate.php?w=d&amp;wi_id=<?php echo $row['wi_id']; ?>" class="wish_del"><span class="sound_only">삭제</span></a>
                    </div>
                    <a href="<?php echo shop_item_url($row['it_id']); ?>" class="smb_my_tit"><?php echo stripslashes($row['it_name']); ?></a>
                    <p class="smb_my_desc"><?php echo $row['it_basic']; ?></p>
                    <div class="smb_my_bot">
                      <div class="smb_my_price">￦ <?php echo display_price(get_price($row), $row['it_tel_inq']); ?></div>
                    </div>
                  </li>
                  <?php
                  }
                  if ($i == 0)
                      echo '<li class="empty_table">보관함이 비었습니다.</li>';
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
            </form>
          </div>
      </div>

    </div>
  </div>
</div>

<script>

    function out_cd_check(fld, out_cd)
    {
        if (out_cd == 'no'){
            alert("옵션이 있는 상품입니다.\n\n상품을 클릭하여 상품페이지에서 옵션을 선택한 후 주문하십시오.");
            fld.checked = false;
            return;
        }

        if (out_cd == 'tel_inq'){
            alert("이 상품은 전화로 문의해 주십시오.\n\n장바구니에 담아 구입하실 수 없습니다.");
            fld.checked = false;
            return;
        }
    }

    function fwishlist_check(f, act)
    {
        var k = 0;
        var length = f.elements.length;

        for(i=0; i<length; i++) {
            if (f.elements[i].checked) {
                k++;
            }
        }

        if(k == 0)
        {
            alert("상품을 하나 이상 체크 하십시오");
            return false;
        }

        if (act == "direct_buy")
        {
            f.sw_direct.value = 1;
        }
        else
        {
            f.sw_direct.value = 0;
        }

        return true;
    }

</script>
<!-- } 위시리스트 끝 -->

<?php
include_once('./_tail.php');