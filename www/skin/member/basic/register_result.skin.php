<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 회원가입결과 시작 { -->
<div class="container">
    <div id="reg_result" class="register mbskin">
        <div class="wrapper">
            <div class="join-fin">
                <div class="join-fin-icon"><img src="/source/img/icon-join_fin.png" alt=""></div>
                <p class="reg_result_p join-fin-txt1">
                <?php if ($lang == "") { //(기본)영문
                    echo "Congratulations on joining us!";
                } else if ($lang == "ko") { //국문
                    echo "회원가입을 축하합니다!";
                }?>
                    <!-- <strong><?php //echo get_text($mb['mb_name']); ?></strong>님의 회원가입을 진심으로 축하합니다. -->
                </p>
                <?php if (is_use_email_certify()) {  ?>
                <p class="result_txt">
                    회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.<br>
                    발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.
                </p>
                <div id="result_email">
                    <span>ID</span>
                    <strong><?php echo $mb['mb_id'] ?></strong><br>
                    <span>E-mail</span>
                    <strong><?php echo $mb['mb_email'] ?></strong>
                </div>
                <p>
                    이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.
                </p>
                <?php }  ?>
                <p class="result_txt">
                <?php if ($lang == "") { //(기본)영문
                    echo "Your subscription to Aquasflash has been completed.";
                } else if ($lang == "ko") { //국문
                    echo "아쿠아스플래시 회원가입이 완료되었습니다.";
                }?>
                    
                </p>
                <!-- } 회원가입결과 끝 -->
                <div class="btn_confirm_reg">
                    <a href="<?php echo G5_URL ?>/" class="reg_btn_submit">
                    <?php if ($lang == "") { //(기본)영문
                        echo "Home";
                    } else if ($lang == "ko") { //국문
                        echo "메인으로";
                    }?>
                </a>
                </div>
            </div>
        </div>
    </div>
</div>