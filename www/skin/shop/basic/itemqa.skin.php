<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_SHOP_SKIN_URL.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- 상품문의 목록 시작 { -->
<section id="sit_qa_list">
    <!-- <h3>등록된 상품문의</h3> -->

    <div class="sit_use_top2">
        <div class="sit_use_total">Total <span><?php echo $item_qa_count; ?></span></div>
    </div>

    <?php
    $thumbnail_width = 500;
    $iq_num     = $total_count - ($page - 1) * $rows;

    for ($i=0; $row=sql_fetch_array($result); $i++)
    {
        $iq_name    = get_text($row['iq_name']);
        $iq_subject = conv_subject($row['iq_subject'],50,"…");

        $is_secret = false;
        if($row['iq_secret']) {
            $iq_subject .= ' <img src="'.G5_SHOP_SKIN_URL.'/img/icon_secret.gif" alt="비밀글">';

            if($is_admin || $member['mb_id' ] == $row['mb_id']) {
                $iq_question = get_view_thumbnail(conv_content($row['iq_question'], 1), $thumbnail_width);
            } else {

                if($lang == "") { //(기본)영문
                    $iq_question = 'This is a confidential inquiry.';     
                } else if ($lang == "ko") { //국문
                    $iq_question = '비밀글로 보호된 문의입니다.';
                }
                
                $is_secret = true;
            }
        } else {
            $iq_question = get_view_thumbnail(conv_content($row['iq_question'], 1), $thumbnail_width);
        }
        $iq_time    = substr($row['iq_time'], 2, 8);

        $hash = md5($row['iq_id'].$row['iq_time'].$row['iq_ip']);

        $iq_stats = '';
        $iq_style = '';
        $iq_answer = '';

        if ($row['iq_answer'])
        {
            $iq_answer = get_view_thumbnail(conv_content($row['iq_answer'], 1), $thumbnail_width);
            if($lang == "") { //(기본)영문
                $iq_stats = 'Replied';   
            } else if ($lang == "ko") { //국문
                $iq_stats = '답변완료';
            }
            $iq_style = 'sit_qaa_done';
            $is_answer = true;
        } else {
            if($lang == "") { //(기본)영문
                $iq_stats = 'Waiting';   
            } else if ($lang == "ko") { //국문
                $iq_stats = '답변대기';
            }
            $iq_style = 'sit_qaa_yet';
            if($lang == "") { //(기본)영문
                $iq_answer = 'No reply has been registered.';
            } else if ($lang == "ko") { //국문
                $iq_answer = '답변이 등록되지 않았습니다.';
            }
            $is_answer = false;
        }

        if ($i == 0) echo '<ol id="sit_qa_ol">';
    ?>

        <li class="sit_qa_li">
            <button type="button" class="sit_qa_li_title"><span class="<?php echo $iq_style; ?>"><?php echo $iq_stats; ?></span><?php echo $iq_subject; ?></button>
            <dl class="sit_qa_dl">
                <dt>작성자/작성일</dt>
                <dd><?php echo $iq_name; ?><span class="st_bg"></span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $iq_time; ?></dd>
            </dl>

            <div id="sit_qa_con_<?php echo $i; ?>" class="sit_qa_con">
                <div class="sit_qa_p">
                    <div class="sit_qa_qaq">
                        <strong class="sound_only">문의내용</strong>
                        <!-- <span class="qa_alp">Q</span> -->
                        <?php echo $iq_question; // 상품 문의 내용 ?>
                    </div>
                    <?php if(!$is_secret) { ?>
                    <div class="sit_qa_qaa">
                        <span class="sit_qa_qaa_icon">
                        <?php if ($lang == "") { //(기본)영문
                            echo "Reply";
                        } else if ($lang == "ko") { //국문
                            echo "답변";
                        }?>
                        </span>
                        <strong class="sound_only">답변</strong>
                        <!-- <span class="qa_alp">A</span> -->
                        <?php echo $iq_answer; ?>
                    </div>
                    <?php } ?>
                </div>

                <?php if ($is_admin || ($row['mb_id'] == $member['mb_id'] && !$is_answer)) { ?>
                <div class="sit_qa_cmd">
                    <a href="<?php echo $itemqa_form."&amp;iq_id={$row['iq_id']}&amp;w=u"; ?>" class="itemqa_form btn01" onclick="return false;">수정</a>
                    <a href="<?php echo $itemqa_formupdate."&amp;iq_id={$row['iq_id']}&amp;w=d&amp;hash={$hash}"; ?>" class="itemqa_delete btn01">삭제</a>
                </div>
                <?php } ?>
            </div>
        </li>

    <?php
        $iq_num--;
    }

    if ($i > 0) echo '</ol>';

    if (!$i && $lang == "") echo '<p class="sit_empty">There are no inquiries.</p>';

    if (!$i && $lang == "ko") echo '<p class="sit_empty">상품문의가 없습니다.</p>';
    ?>
</section>

<div id="sit_qa_wbtn">
        <a href="<?php echo $itemqa_form; ?>" class="btn02 itemqa_form">
        <?php if ($lang == "") { //(기본)영문
            echo "Write";
        } else if ($lang == "ko") { //국문
            echo "상품문의";
        }?>
        <span class="sound_only">
            <?php if ($lang == "") { //(기본)영문
                echo "Opens in new window";
            } else if ($lang == "ko") { //국문
                echo "새 창";
            }?>
        </span>
    </a>
        <!-- <a href="<?php //echo $itemqa_list; ?>" id="itemqa_list" class="btn01">더보기</a> -->
    </div>

<?php
echo itemqa_page($config['cf_write_pages'], $page, $total_page, G5_SHOP_URL."/itemqa.php?it_id=$it_id&amp;page=", "");
?>

<script>
$(function(){
    $(".itemqa_form").click(function(){
        window.open(this.href, "itemqa_form", "width=810,height=700,scrollbars=1");
        return false;
    });

    $(".itemqa_delete").click(function(){
        return confirm("정말 삭제 하시겠습니까?\n\n삭제후에는 되돌릴수 없습니다.");
    });

    $(".sit_qa_li_title").click(function(){
        var $con = $(this).siblings(".sit_qa_con");
        if($con.is(":visible")) {
            $con.slideUp();
            $(this).closest('.sit_qa_li').removeClass('on');
        } else {
            $(".sit_qa_con:visible").slideUp();
            $con.slideDown(
                function() {
                    // 이미지 리사이즈
                    $con.viewimageresize2();
                }
            );
            $('.sit_qa_li').removeClass('on');
            $(this).closest('.sit_qa_li').addClass('on');
        }
    });

    $(".qa_page").click(function(){
        $("#itemqa").load($(this).attr("href"));
        return false;
    });
});
</script>
<!-- } 상품문의 목록 끝 -->