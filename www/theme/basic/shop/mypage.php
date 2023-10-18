<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if ($lang == "") { //(기본)영문
  $g5['title'] = "Mypage";
} else if ($lang == "ko") { //국문
  $g5['title'] = "마이페이지";
}

include_once('./_head.php');

// 쿠폰
$cp_count = 0;
$sql = " select cp_id
            from {$g5['g5_shop_coupon_table']}
            where mb_id IN ( '{$member['mb_id']}', '전체회원' )
              and cp_start <= '".G5_TIME_YMD."'
              and cp_end >= '".G5_TIME_YMD."' ";
$res = sql_query($sql);

for($k=0; $cp=sql_fetch_array($res); $k++) {
    if(!is_used_coupon($member['mb_id'], $cp['cp_id']))
        $cp_count++;
}

add_stylesheet('<link rel="stylesheet" href="'.EUM_CSS_URL.'/mypage.css">', 0);
?>

<div class="container">
    <!-- 마이페이지 시작 { -->
    <div id="smb_my" class="sb_container">
    
        <div class="wrapper">
            <div class="sb_top">
              <p class="sb-title">My page</p>
            </div>

            <?php include G5_THEME_SHOP_PATH.'/mypage_top.php'; ?>

            <div class="mypage-body">

                <!-- 마이페이지 메뉴 시작 { -->
                <?php include G5_THEME_SHOP_PATH.'/mypage_menu.php'; ?>
                <!-- } 마이페이지 메뉴 끝 -->
                
                <div id="smb_my_list" class="mypage-in">
                <!-- 최근 주문내역 시작 { -->
                <section id="smb_my_od">
                    <h2>
                    <?php if ($lang == "") { //(기본)영문
                        echo "Order details";
                    } else if ($lang == "ko") { //국문
                        echo "주문내역조회";
                    }?>
                    </h2>
                    <?php
                    // 최근 주문내역
                    define("_ORDERINQUIRY_", true);
                    $limit = " limit 0, 5 ";
                    include G5_SHOP_PATH.'/orderinquiry.sub.php';
                    ?>
                    <div class="smb_my_more">
                        <a href="./orderinquiry.php">
                        <?php if ($lang == "") { //(기본)영문
                          echo "Learn More +";
                        } else if ($lang == "ko") { //국문
                          echo "더보기 +";
                        }?>
                        </a>
                    </div>
                </section>
                <!-- } 최근 주문내역 끝 -->
                <!-- 최근 위시리스트 시작 { -->
                <section id="smb_my_wish">
                    <h2>
                    <?php if ($lang == "") { //(기본)영문
                        echo "Wish";
                    } else if ($lang == "ko") { //국문
                        echo "최근 위시리스트";
                    }?>
                    </h2>
                    <form name="fwishlist" method="post" action="./cartupdate.php">
                    <input type="hidden" name="act" value="multi">
                    <input type="hidden" name="sw_direct" value="">
                    <input type="hidden" name="prog" value="wish">
                        <ul>
                        <?php
                        $sql = " select *
                                   from {$g5['g5_shop_wish_table']} a,
                                        {$g5['g5_shop_item_table']} b
                                  where a.mb_id = '{$member['mb_id']}'
                                    and a.it_id  = b.it_id
                                  order by a.wi_id desc
                                  limit 0, 4 ";
                        $result = sql_query($sql);
                        for ($i=0; $row = sql_fetch_array($result); $i++)
                        {
                            $image = get_it_image($row['it_id'], 255, 150, true);
                            $sql = " select count(*) as cnt from {$g5['g5_shop_item_option_table']} where it_id = '{$row['it_id']}' and io_type = '0' ";
                            $tmp = sql_fetch($sql);
                            $out_cd = (isset($tmp['cnt']) && $tmp['cnt']) ? 'no' : '';
                        ?>
                        <li>
                            <div class="smb_my_chk">
                                <?php if(is_soldout($row['it_id'])) { //품절검사 ?> 품절
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
                              <?php echo $image; ?>
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
                        if ($i == 0) {
                            if ($lang == "") { //(기본)영문
                                echo '<li class="empty_li">There is no storage history.</li>';
                            } else if ($lang == "ko") { //국문
                                echo '<li class="empty_li">보관 내역이 없습니다.</li>';
                            }   
                        }
                            
                        ?>
                        </ul>
                        <div class="smb_my_more">
                            <a href="./wishlist.php">
                            <?php if ($lang == "") { //(기본)영문
                              echo "Learn More +";
                            } else if ($lang == "ko") { //국문
                              echo "더보기 +";
                            }?>
                            </a>
                        </div>
                    </form>
                </section>
                <!-- } 최근 위시리스트 끝 -->
                </div>
                            
            </div>

        </div>

    </div>
</div>

<script>
function member_leave()
{
    return confirm('정말 회원에서 탈퇴 하시겠습니까?')
}

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
<!-- } 마이페이지 끝 -->

<?php
include_once("./_tail.php");