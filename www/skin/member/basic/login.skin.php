<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);

// 아이디 자동저장 
$ck_id_save = get_cookie("ck_id_save"); 

if ($ck_id_save) { 
$ch_id_save_chk = "checked"; 
} 
?>


<!-- 로그인 시작 { -->
<div class="container">
    <div id="mb_login" class="mbskin">
        <div class="wrapper">
            <div class="mbskin_box">
                <h1><?php echo $g5['title'] ?></h1>
                <div class="member-tit-wr">
                    <p class="member-tit">
                    <?php if ($lang == "") { //(기본)영문
                        echo "Login";
                    } else if ($lang == "ko") { //국문
                        echo "로그인";
                    }?>
                    </p>
                </div>
                <!-- <div class="mb_log_cate">
                    <h2><span class="sound_only">회원</span>로그인</h2>
                    <a href="<?php echo G5_BBS_URL ?>/register.php" class="join">회원가입</a>
                </div> -->
                <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
                <input type="hidden" name="url" value="<?php echo $login_url ?>">
    
                <fieldset id="login_fs">
                    <legend>회원로그인</legend>
                    <ul class="login-input-ul">
                        <li class="login-input-li">
                            <label for="login_id" class="login-txt">
                            <?php if ($lang == "") { //(기본)영문
                                echo "ID";
                            } else if ($lang == "ko") { //국문
                                echo "아이디";
                            }?>
                            </label>
                            <input type="text" name="mb_id" id="login_id" required class="frm_input required aq-input" size="20" maxLength="20" placeholder="<?php if ($lang == "") { //(기본)영문
                                echo "Please enter your ID.";
                            } else if ($lang == "ko") { //국문
                                echo "아이디를 입력해 주세요.";
                            }?>" onMouseOver='chkReset(this.form);' onFocus='chkReset(this.form);' value='<?=$ck_id_save?>'>
                        </li>
                        <li class="login-input-li">
                            <label for="login_pw" class="login-txt">
                            <?php if ($lang == "") { //(기본)영문
                                echo "Password";
                            } else if ($lang == "ko") { //국문
                                echo "비밀번호";
                            }?>
                            </label>
                            <input type="password" name="mb_password" id="login_pw" required class="frm_input required aq-input" size="20" maxLength="20" placeholder="<?php if ($lang == "") { //(기본)영문
                                echo "Please enter your password.";
                            } else if ($lang == "ko") { //국문
                                echo "비밀번호를 입력해 주세요.";
                            }?>">
                        </li>
                    </ul>
                    <div id="login_info">
                        <div class="login_if_auto chk_box">
                            <!-- <input type="checkbox" name="auto_login" id="login_auto_login" class="selec_chk">
                            <label for="login_auto_login"><span></span> 자동로그인</label> -->
                            <div class="check_wrap">
                                <input type='checkbox' id='id_save' name='id_save' <?=$ch_id_save_chk?>>
                                <label for="id_save">
                                <?php if ($lang == "") { //(기본)영문
                                    echo "Save ID";
                                } else if ($lang == "ko") { //국문
                                    echo "아이디저장";
                                }?>
                                </label>
                            </div>
                        </div>
                        <div class="login_if_lpl">
                            <a href="<?php echo G5_BBS_URL ?>/password_lost.php">
                            <?php if ($lang == "") { //(기본)영문
                                echo "Find ID/password";
                            } else if ($lang == "ko") { //국문
                                echo "아이디/비밀번호 찾기";
                            }?>
                            </a>
                        </div>
                    </div>
                    <ul class="login-btn-ul">
                        <li class="login-btn-li"><button type="submit" class="btn_submit">
                            <?php if ($lang == "") { //(기본)영문
                                echo "Login";
                            } else if ($lang == "ko") { //국문
                                echo "로그인";
                            }?>
                        </button></li>    
                        <li class="login-btn-li">
                            <a href="<?php echo G5_BBS_URL ?>/register.php" class="join">
                            <!-- <a href="<?php //echo G5_BBS_URL ?>/register.php" class="join"> -->
                            <?php if ($lang == "") { //(기본)영문
                                echo "Join";
                            } else if ($lang == "ko") { //국문
                                echo "회원가입";
                            }?>
                            </a>
                        </li>    
                    </ul>
                </fieldset>
                </form>
                <?php @include_once(get_social_skin_path().'/social_login.skin.php'); // 소셜로그인 사용시 소셜로그인 버튼 ?>
            </div>
            <?php // 쇼핑몰 사용시 여기부터 ?>
            <?php if (isset($default['de_level_sell']) && $default['de_level_sell'] == 1) { // 상품구입 권한 ?>
    
                <!-- 주문하기, 신청하기 -->
                <?php if (preg_match("/orderform.php/", $url)) { ?>
            <!-- <section id="mb_login_notmb">
                <h2>비회원 구매</h2>
                <p>비회원으로 주문하시는 경우 포인트는 지급하지 않습니다.</p>
                <div id="guest_privacy">
                    <?php echo conv_content($default['de_guest_privacy'], $config['cf_editor']); ?>
                </div>
    
                    <div class="chk_box">
                        <input type="checkbox" id="agree" value="1" class="selec_chk">
                    <label for="agree"><span></span> 개인정보수집에 대한 내용을 읽었으며 이에 동의합니다.</label>
                    </div>
                <div class="btn_confirm">
                    <a href="javascript:guest_submit(document.flogin);" class="btn_submit">비회원으로 구매하기</a>
                </div>
                <script>
                function guest_submit(f)
                {
                    if (document.getElementById('agree')) {
                        if (!document.getElementById('agree').checked) {
                            alert("개인정보수집에 대한 내용을 읽고 이에 동의하셔야 합니다.");
                            return;
                        }
                    }
                    f.url.value = "<?php echo $url; ?>";
                    f.action = "<?php echo $url; ?>";
                    f.submit();
                }
                </script>
            </section> -->
            <?php } else if (preg_match("/orderinquiry.php$/", $url)) { ?>
            <div id="mb_login_od_wr">
                <h2>비회원 주문조회</h2>
                <fieldset id="mb_login_od">
                    <legend>비회원 주문조회</legend>
                    <form name="forderinquiry" method="post" action="<?php echo urldecode($url); ?>" autocomplete="off">
                    <label for="od_id" class="od_id sound_only">주문서번호<strong class="sound_only"> 필수</strong></label>
                    <input type="text" name="od_id" value="<?php echo $od_id; ?>" id="od_id" required class="frm_input required" size="20" placeholder="주문서번호">
                    <label for="od_pwd" class="od_pwd sound_only">비밀번호 <strong>필수</strong></label>
                    <input type="password" name="od_pwd" size="20" id="od_pwd" required class="frm_input required" placeholder="비밀번호">
                    <button type="submit" class="btn_submit">확인</button>
                    </form>
                </fieldset>
                <section id="mb_login_odinfo">
                    <p>메일로 발송해드린 주문서의 <strong>주문번호</strong> 및 주문 시 입력하신 <strong>비밀번호</strong>를 정확히 입력해주십시오.</p>
                </section>
            </div>
            <?php } ?>
            <?php } ?>
            <?php // 쇼핑몰 사용시 여기까지 반드시 복사해 넣으세요 ?>
        </div>
    
    </div>
</div>

<script>
jQuery(function($){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    if( $( document.body ).triggerHandler( 'login_sumit', [f, 'flogin'] ) !== false ){
        return true;
    }
    return false;
}
</script>
<!-- } 로그인 끝 -->

