<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>

<div id="display_pay_button" class="btn_confirm">
    <input type="button" value="<?php if ($lang == "") { //(기본)영문
        echo "Paying";
    } else if ($lang == "ko") { //국문
        echo "주문하기";
    }?>" onclick="forderform_check(this.form);" class="btn_submit">
    <a href="javascript:history.go(-1);" class="btn01"><?php if ($lang == "") { //(기본)영문
                    echo " Cancel";
                } else if ($lang == "ko") { //국문
                    echo "취소";
                }?></a>
</div>
<div id="display_pay_process" style="display:none">
    <img src="<?php echo G5_URL; ?>/shop/img/loading.gif" alt="">
    <span>주문완료 중입니다. 잠시만 기다려 주십시오.</span>
</div>