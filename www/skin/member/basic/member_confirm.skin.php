<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once('./_head.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<div class="container">
    <!-- 회원 비밀번호 확인 시작 { -->
    <div id="mb_confirm" class="mbskin">
        <div class="wrapper">
            <div class="mbskin_box">
                <!-- <h1><?php //echo $g5['title'] ?></h1> -->
                <div class="member-tit-wr">
                    <p class="member-tit">
                    <?php if ($lang == "") { //(기본)영문
                        echo "Check password";
                    } else if ($lang == "ko") { //국문
                        echo "회원 비밀번호 확인";
                    }?>
                    </p>
                </div>

                <div class="psw-confirm-box">
                    
                    <strong class="psw-confirm-txt1">
                    <?php if ($lang == "") { //(기본)영문
                        echo "Please enter your password again.";
                    } else if ($lang == "ko") { //국문
                        echo "비밀번호를 한번 더 입력해주세요.";
                    }?>
                    </strong>
                    <p class="psw-confirm-txt2">
                        <?php if ($url == 'member_leave.php') { ?>
                        <?php if ($lang == "") { //(기본)영문
                            echo "Once you enter your password, your membership withdrawal will be completed.";
                        } else if ($lang == "ko") { //국문
                            echo "비밀번호를 입력하시면 회원탈퇴가 완료됩니다.";
                        }?>
                        <?php }else{ ?>
                        <?php if ($lang == "") { //(기본)영문
                            echo "To keep your information safe, we will check your password again.";
                        } else if ($lang == "ko") { //국문
                            echo "회원님의 정보를 안전하게 보호하기 위해 비밀번호를 한번 더 확인합니다.";
                        }?>
                        <?php }  ?>
                    </p>
                    <form name="fmemberconfirm" action="<?php echo $url ?>" onsubmit="return fmemberconfirm_submit(this);" method="post">
                    <input type="hidden" name="mb_id" value="<?php echo $member['mb_id'] ?>">
                    <input type="hidden" name="w" value="u">
                    <fieldset>
                        <span class="confirm_id">
                        <?php if ($lang == "") { //(기본)영문
                            echo "ID";
                        } else if ($lang == "ko") { //국문
                            echo "회원아이디";
                        }?>
                        :
                        </span>
                        <span id="mb_confirm_id"><?php echo $member['mb_id'] ?></span>
                        <label for="confirm_mb_password" class="sound_only">비밀번호<strong>필수</strong></label>
                        <input type="password" name="mb_password" id="confirm_mb_password" required class="required frm_input aq-input" size="15" maxLength="20" placeholder="<?php if ($lang == "") { //(기본)영문
                            echo "Password";
                        } else if ($lang == "ko") { //국문
                            echo "비밀번호";
                        }?>">
                        <div class="psw-confirm-submit-wr"><input type="submit" value="<?php if ($lang == "") { //(기본)영문
                            echo "Confirm";
                        } else if ($lang == "ko") { //국문
                            echo "확인";
                        }?>" id="btn_submit" class="btn_submit"></div>
                        </fieldset>
                    </form>
                </div>

            </div>
        </div>
    
    </div>
</div>

<script>
function fmemberconfirm_submit(f)
{
    document.getElementById("btn_submit").disabled = true;

    return true;
}
</script>
<!-- } 회원 비밀번호 확인 끝 -->


<?php
    include_once(G5_PATH.'/tail.php');