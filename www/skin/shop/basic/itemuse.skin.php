<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_SHOP_SKIN_URL.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- 상품 사용후기 시작 { -->
<section id="sit_use_list">
    <h3>등록된 사용후기</h3>

    <div class="sit_use_top">
        <div class="sit_use_star">
            <?php// if ($star_score) { ?>
            <h4>
                <?php if ($lang == "") { //(기본)영문
                    echo "Total Review";
                } else if ($lang == "ko") { //국문
                    echo "구매고객 총평점";
                }?>
                <!-- <span>(총 <strong><?php //echo $total_count; ?></strong> 건 상품평 기준)</span> -->
            </h4>
            <div class="sit_use_score">
                <img src="/source/img/s_star<?php echo $star_score?>.png" alt="" class="sit_star">
                <span class="sit_use_num">
                <?php
                $sql = "select (SUM(is_score) / COUNT(*)) as score from {$g5['g5_shop_item_use_table']} where it_id = '$it_id' and is_confirm = 1 ";
                $row = sql_fetch($sql);
                echo round($row['score'], 1);
                ?>
                <?php //} ?>
                </span>
            </div>
        </div>
        <div id="sit_use_wbtn">
            <a href="<?php echo $itemuse_form; ?>" class="btn02 itemuse_form " onclick="return false;">
            <?php if ($lang == "") { //(기본)영문
                echo "Write";
            } else if ($lang == "ko") { //국문
                echo "후기작성";
            }?>
                <span class="sound_only">
                <?php if ($lang == "") { //(기본)영문
                    echo "Opens in new window";
                } else if ($lang == "ko") { //국문
                    echo "새 창";
                }?>
                </span>
            </a>
            <!-- <a href="<?php //echo $itemuse_list; ?>" class="btn01 itemuse_list">더보기</a> -->
        </div>
    </div>
    
    <div class="sit_use_top2">
        <div class="sit_use_total">Total <span><?php echo $total_count; ?></span></div>
        <ul class="sit_use_order_ul">
            <li class="sit_use_order_li active">
                <a href="">Latest order</a>
            </li>
            <li class="sit_use_order_li">
                <a href="">Rating High order</a>
            </li>
            <li class="sit_use_order_li">
                <a href="">Rating Low order</a>
            </li>
        </ul>
    </div>

    <?php
    $thumbnail_width = 500;

    for ($i=0; $row=sql_fetch_array($result); $i++)
    {
        $is_num     = $total_count - ($page - 1) * $rows - $i;
        $is_star    = get_star($row['is_score']);
        $is_name    = get_text($row['is_name']);
        $is_subject = conv_subject($row['is_subject'],50,"…");
        $is_content = get_view_thumbnail(conv_content($row['is_content'], 1), $thumbnail_width);
        $is_img = @preg_match("/img src/", $is_content);
        $is_reply_name = !empty($row['is_reply_name']) ? get_text($row['is_reply_name']) : '';
        $is_reply_subject = !empty($row['is_reply_subject']) ? conv_subject($row['is_reply_subject'],50,"…") : '';
        $is_reply_content = !empty($row['is_reply_content']) ? get_view_thumbnail(conv_content($row['is_reply_content'], 1), $thumbnail_width) : '';
        $is_time    = substr($row['is_time'], 2, 8);

        $hash = md5($row['is_id'].$row['is_time'].$row['is_ip']);

        if ($i == 0) echo '<ol id="sit_use_ol">';
    ?>

        <li class="sit_use_li <?php if($is_img) {echo 'use_img';}?>">
			<!-- <span class="sit_thum">
                <?php //if($is_content) { echo get_itemuselist_thumbnail($row['it_id'], $row['is_content'], 100, 100);} ?>
            </span>  -->
            <!-- <dl class="sit_use_dl">
                <dt></dt>
                <dd class="sit_use_tit"><?php //echo $is_subject; ?></dd>
                <dt>작성자/작성일</dt>
                <dd><?php //echo $is_name; ?><span class="st_bg"></span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php //echo $is_time; ?></dd>
                <dt>평점<dt>
                <dd class="sit_use_star"></dd>
            </dl> -->
            <button type="button" class="sit_use_in">
                <p class="sit_use_tit"><?php echo $is_subject; ?></p>
                <div class="sit_use_info">
                    <p class="sit_use_writer"><?php echo preg_replace('/(?<=.{2})./u','*',$is_name); ?></p>
                    <p class="sit_use_date"><?php echo date("Y.m.d", strtotime($is_time)); ?></p>
                    <p class="sit_use_rate"><img src="/source/img/s_star<?php echo $is_star; ?>.png" alt="<?php echo $is_star; ?>"></p>
                </div>
            </button>
			<!-- <button type="button" class="sit_use_li_title">내용보기 <i class="fa fa-caret-down" aria-hidden="true"></i></button> -->

            <div id="sit_use_con_<?php echo $i; ?>" class="sit_use_con">
                <div class="sit_use_p">
                    <?php echo $is_content; // 사용후기 내용 ?> 
                </div>

                <?php if ($is_admin || $row['mb_id'] == $member['mb_id']) { ?>
                <div class="sit_use_cmd">
                    <a href="<?php echo $itemuse_form."&amp;is_id={$row['is_id']}&amp;w=u"; ?>" class="itemuse_form btn01" onclick="return false;">
                    <?php if ($lang == "") { //(기본)영문
                        echo "Edit";
                    } else if ($lang == "ko") { //국문
                        echo "수정";
                    }?>
                    </a>
                    <a href="<?php echo $itemuse_formupdate."&amp;is_id={$row['is_id']}&amp;w=d&amp;hash={$hash}"; ?>" class="
                    <?php if ($lang == "") { //(기본)영문
                        echo "itemuse_delete_en";
                    } else if ($lang == "ko") { //국문
                        echo "itemuse_delete_ko";
                    }?> itemuse_delete btn01">
                    <?php if ($lang == "") { //(기본)영문
                        echo "Delete";
                    } else if ($lang == "ko") { //국문
                        echo "삭제";
                    }?>
                    </a>
                </div>
                <?php } ?>

                <?php if( $is_reply_subject ){  //  사용후기 답변 내용이 있다면 ?>
                <div class="sit_use_reply">
                    <div class="use_reply_icon">Reply</div>
                    <div class="use_reply_tit">
                        <?php echo $is_reply_subject; // 답변 제목 ?>
                    </div>
                    <div class="use_reply_name">
                        <?php echo $is_reply_name; // 답변자 이름 ?>
                    </div>
                    <div class="use_reply_p">
                        <?php echo $is_reply_content; // 답변 내용 ?>
                    </div>
                </div>
                <?php } //end if ?>
            </div>
        </li>

    <?php }

    if ($i > 0) echo '</ol>';


    if (!$i && $lang == "") echo '<p class="sit_empty">There are no reviews.</p>';

    if (!$i && $lang == "ko") echo '<p class="sit_empty">사용후기가 없습니다.</p>';

    ?>
</section>

<?php
echo itemuse_page($config['cf_write_pages'], $page, $total_page, G5_SHOP_URL."/itemuse.php?it_id=$it_id&amp;page=", "");
?>

<script>
$(function(){
    $(".itemuse_form").click(function(){
        window.open(this.href, "itemuse_form", "width=810,height=680,scrollbars=1");
        return false;
    });

    $(".itemuse_delete_en").click(function(){
        if (confirm("Are you sure you want to delete?\n\nOnce deleted, it cannot be restored.")) {
            return true;
        } else {
            return false;
        }
    });

    $(".itemuse_delete_ko").click(function(){
        if (confirm("정말 삭제 하시겠습니까?\n\n삭제후에는 되돌릴수 없습니다.ddd")) {
            return true;
        } else {
            return false;
        }
    });

    $(".sit_use_in").click(function(){
        var $con = $(this).siblings(".sit_use_con");
        if($con.is(":visible")) {
            $(this).parents('.sit_use_li').removeClass('on');
            $con.slideUp();
        } else {
            $(".sit_use_con:visible").slideUp();
            $(".sit_use_li").removeClass('on');
            $(this).parents('.sit_use_li').addClass('on');
            $con.slideDown(
                function() {
                    // 이미지 리사이즈
                    $con.viewimageresize2();
                }
            );
        }
    });

    $(".pg_page").click(function(){
        $("#itemuse").load($(this).attr("href"));
        return false;
    });
});
</script>
<!-- } 상품 사용후기 끝 -->