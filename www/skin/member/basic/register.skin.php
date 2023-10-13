<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 회원 구분 { -->
<div class="container">
    <div class="register mbskin">
        <div class="wrapper">
            <div class="member-tit-wr">
                <p class="member-tit">
                <?php if ($lang == "") { //(기본)영문
                    echo "Join";
                } else if ($lang == "ko") { //국문
                    echo "회원가입";
                }?>
            </div>
            <!-- 20231012 둘 다 일반 회원가입 링크로 넣어둠 -->
            <ul class="join-type-ul">
                <li class="join-type-li">
                    <a href="<?php echo $register_action_url ?>">
                        <div class="join-type-icon corporate">
                            <img src="/source/img/icon-join_corporate.png" alt="">
                        </div>
                        <p class="join-type-txt">Corporate member</p>
                    </a>
                </li>
                <li class="join-type-li">
                    <a href="<?php echo $register_action_url ?>">
                        <div class="join-type-icon individual">
                            <img src="/source/img/icon-join_individual.png" alt="">
                        </div>
                        <p class="join-type-txt">Individual member</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- } 회원가입 약관 동의 끝 -->
