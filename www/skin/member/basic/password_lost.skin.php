<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);

if($config['cf_cert_use'] && ($config['cf_cert_simple'] || $config['cf_cert_ipin'] || $config['cf_cert_hp'])) { ?>
    <script src="<?php echo G5_JS_URL ?>/certify.js?v=<?php echo G5_JS_VER; ?>"></script>    
<?php } ?>

<div class="container">
    <!-- 회원정보 찾기 시작 { -->
    <div id="find_info" class="new_win<?php if($config['cf_cert_use'] != 0 && $config['cf_cert_find'] != 0) { ?> cert<?php } ?> mbskin">
        <div class="wrapper">
            <div class="mbskin_box">
                <div class="member-tit-wr">
                    <p class="member-tit">
                    Find ID/Password
                    </p>
                </div>
                <ul class="mb-find-tab-ul comu-menu-ul">
                    <li class="mb-find-tab-li comu-menu-li active" data-link="findIdBox">
                        <a href="javascript:void(0);" class="mb-find-tab-btn">Find ID</a>
                    </li>
                    <li class="mb-find-tab-li comu-menu-li" data-link="findPwBox">
                        <a href="javascript:void(0);" class="mb-find-tab-btn">Find Password</a>
                    </li>
                </ul>
                <!-- 아래 라디오 인풋 id 값 바꿔도 됨 -->
                <div class="mb-find-tab-box">
                    <div id="findIdBox" class="mb-find-tab-in find-id active">
                        <div class="mb-find-info">
                            <?php if ($lang == "") { //(기본)영문
                                echo "Please provide your email address or telephone number to find your ID.";
                            } else if ($lang == "ko") { //국문
                                echo "아이디를 찾기 위해 이메일 주소 혹은 전화번호를 입력해주세요.";
                            }?>
                        </div>
                        <form action="">
                            <ul class="mb-find-cnt-ul">
                                <li class="mb-find-cnt-li">
                                    <div class="mb-find-cnt-tit">
                                    <?php if ($lang == "") { //(기본)영문
                                        echo "Member type";
                                    } else if ($lang == "ko") { //국문
                                        echo "회원 유형";
                                    }?>
                                    <span class="label_req">*</span>
                                    </div>
                                    <div class="mb-find-cnt-sel">
                                        <div class="radio_wrap">
                                            <input type="radio" name="fdType" id="fdType1" checked>
                                            <label for="fdType1">
                                            <?php if ($lang == "") { //(기본)영문
                                                echo "Corporate member";
                                            } else if ($lang == "ko") { //국문
                                                echo "기업회원";
                                            }?>
                                            </label>
                                        </div>
                                        <div class="radio_wrap">
                                            <input type="radio" name="fdType" id="fdType2">
                                            <label for="fdType2">
                                            <?php if ($lang == "") { //(기본)영문
                                                echo "Individual member";
                                            } else if ($lang == "ko") { //국문
                                                echo "일반회원";
                                            }?>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-find-cnt-li ">
                                    <div class="mb-find-cnt-tit">
                                    <?php if ($lang == "") { //(기본)영문
                                        echo "Authentication method";
                                    } else if ($lang == "ko") { //국문
                                        echo "인증방법";
                                    }?>
                                    <span class="label_req">*</span>
                                    </div>
                                    <div class="mb-find-cnt-sel">
                                        <div class="radio_wrap">
                                            <input type="radio" name="fdMethodId" id="fdMethodId1" class="fdRadio fdEmail" checked>
                                            <label for="fdMethodId1">
                                            <?php if ($lang == "") { //(기본)영문
                                                echo "E-mail";
                                            } else if ($lang == "ko") { //국문
                                                echo "이메일";
                                            }?>
                                            </label>
                                        </div>
                                        <div class="radio_wrap">
                                            <input type="radio" name="fdMethodId" id="fdMethodId2" class="fdRadio fdTel">
                                            <label for="fdMethodId2">
                                            <?php if ($lang == "") { //(기본)영문
                                                echo "Cell phone";
                                            } else if ($lang == "ko") { //국문
                                                echo "연락처";
                                            }?>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-find-cnt-li mb-find-cnt-li--opt email checked">
                                    <div class="mb-find-cnt-tit">
                                    <?php if ($lang == "") { //(기본)영문
                                        echo "E-mail";
                                    } else if ($lang == "ko") { //국문
                                        echo "이메일";
                                    }?>
                                    <span class="label_req">*</span>
                                    </div>
                                    <div class="mb-find-cnt-sel">
                                        <div class="reg-input-wr"><input type="text" id="" name="" value="" class="aq-input">@<input type="text" id="" name="" value="" class="aq-input"></div>
                                    </div>
                                </li>
                                <li class="mb-find-cnt-li mb-find-cnt-li--opt tel">
                                    <div class="mb-find-cnt-tit">
                                    <?php if ($lang == "") { //(기본)영문
                                        echo "Cell phone";
                                    } else if ($lang == "ko") { //국문
                                        echo "연락처";
                                    }?>
                                    <span class="label_req">*</span>
                                    </div>
                                    <div class="mb-find-cnt-sel">
                                        <input type="text" class="aq-input" id="" name="" value="" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
                                    </div>
                                </li>
                            </ul>
                            <div class="mb-find-btn-wr">
                                <button type="" class="mb-find-btn">
                                <?php if ($lang == "") { //(기본)영문
                                    echo "Find ID";
                                } else if ($lang == "ko") { //국문
                                    echo "아이디 찾기";
                                }?>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div id="findPwBox" class="mb-find-tab-in find-pw">
                        <div class="mb-find-info">
                            <?php if ($lang == "") { //(기본)영문
                                echo "Please provide your ID and email address or telephone number to find your Password.";
                            } else if ($lang == "ko") { //국문
                                echo "비밀번호를 찾기 위해 아이디와 이메일 주소 혹은 전화번호를 입력해주세요.";
                            }?>
                        </div>
                        <form action="">
                            <ul class="mb-find-cnt-ul">
                                <li class="mb-find-cnt-li">
                                    <div class="mb-find-cnt-tit">
                                    <?php if ($lang == "") { //(기본)영문
                                        echo "ID";
                                    } else if ($lang == "ko") { //국문
                                        echo "아이디";
                                    }?>
                                    <span class="label_req">*</span>
                                    </div>
                                    <div class="mb-find-cnt-sel">
                                        <input type="text" id="" name="" value="" class="aq-input">
                                    </div>
                                </li>
                                <li class="mb-find-cnt-li">
                                    <div class="mb-find-cnt-tit">
                                    <?php if ($lang == "") { //(기본)영문
                                        echo "Authentication method";
                                    } else if ($lang == "ko") { //국문
                                        echo "인증방법";
                                    }?>
                                    <span class="label_req">*</span>
                                    </div>
                                    <div class="mb-find-cnt-sel">
                                        <div class="radio_wrap">
                                            <input type="radio" name="fdMethodPw" id="fdMethodPw1" class="fdRadio fdEmail" checked>
                                            <label for="fdMethodPw1">
                                            <?php if ($lang == "") { //(기본)영문
                                                echo "E-mail";
                                            } else if ($lang == "ko") { //국문
                                                echo "이메일";
                                            }?>
                                            </label>
                                        </div>
                                        <div class="radio_wrap">
                                            <input type="radio" name="fdMethodPw" id="fdMethodPw2" class="fdRadio fdTel">
                                            <label for="fdMethodPw2">
                                            <?php if ($lang == "") { //(기본)영문
                                                echo "Cell phone";
                                            } else if ($lang == "ko") { //국문
                                                echo "연락처";
                                            }?>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-find-cnt-li mb-find-cnt-li--opt email checked">
                                    <div class="mb-find-cnt-tit">
                                    <?php if ($lang == "") { //(기본)영문
                                        echo "E-mail";
                                    } else if ($lang == "ko") { //국문
                                        echo "이메일";
                                    }?>
                                    <span class="label_req">*</span>
                                    </div>
                                    <div class="mb-find-cnt-sel">
                                        <div class="reg-input-wr"><input type="text" id="" name="" value="" class="aq-input">@<input type="text" id="" name="" value="" class="aq-input"></div>
                                    </div>
                                </li>
                                <li class="mb-find-cnt-li mb-find-cnt-li--opt tel">
                                    <div class="mb-find-cnt-tit">
                                    <?php if ($lang == "") { //(기본)영문
                                        echo "Cell phone";
                                    } else if ($lang == "ko") { //국문
                                        echo "연락처";
                                    }?>
                                    <span class="label_req">*</span>
                                    </div>
                                    <div class="mb-find-cnt-sel">
                                        <input type="text" class="aq-input" id="" name="" value="" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
                                    </div>
                                </li>
                            </ul>
                            <div class="mb-find-btn-wr">
                                <button type="" class="mb-find-btn">
                                <?php if ($lang == "") { //(기본)영문
                                    echo "Find Password";
                                } else if ($lang == "ko") { //국문
                                    echo "비밀번호 찾기";
                                }?>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- <div class="new_win_con">
                <form name="fpasswordlost" action="<?php echo $action_url ?>" onsubmit="return fpasswordlost_submit(this);" method="post" autocomplete="off">
                <input type="hidden" name="cert_no" value="">
                <h3>이메일로 찾기</h3>
                <fieldset id="info_fs">
                    <p>
                        회원가입 시 등록하신 이메일 주소를 입력해 주세요.<br>
                        해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.
                    </p>
                    <label for="mb_email" class="sound_only">E-mail 주소<strong class="sound_only">필수</strong></label>
                    <input type="text" name="mb_email" id="mb_email" required class="required frm_input full_input email" size="30" placeholder="E-mail 주소">
                </fieldset>
                <?php echo captcha_html();  ?>
                <div class="win_btn">
                    <button type="submit" class="btn_submit">인증메일 보내기</button>
                </div>
                </form>
            </div> -->
            <?php if($config['cf_cert_use'] != 0 && $config['cf_cert_find'] != 0) { ?>
            <div class="new_win_con find_btn">
                <h3>본인인증으로 찾기</h3>
                <div class="cert_btn">
                <?php if(!empty($config['cf_cert_simple'])) { ?>
                    <button type="button" id="win_sa_kakao_cert" class="btn_submit win_sa_cert" data-type="">간편인증</button>
                <?php } if(!empty($config['cf_cert_hp']) || !empty($config['cf_cert_ipin'])) { ?>
                    <?php if(!empty($config['cf_cert_hp'])) { ?>
                    <button type="button" id="win_hp_cert" class="btn_submit">휴대폰 본인확인</button>
                    <?php } if(!empty($config['cf_cert_ipin'])) { ?>
                    <button type="button" id="win_ipin_cert" class="btn_submit">아이핀 본인확인</button>
                    <?php } ?>
                <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<script>
    // 탭
    $('.mb-find-tab-li .mb-find-tab-btn').on('click', function(){
        let findTab = $(this).parents('.mb-find-tab-li');
        let findLink = findTab.attr('data-link');
        $('.mb-find-tab-li').removeClass('active');
        findTab.addClass('active');
        $('.mb-find-tab-in').removeClass('active');
        $('#' + findLink).addClass('active');
    });

    // 라디오 버튼
    $('.fdRadio').on('click', function(){
        $('.mb-find-cnt-li--opt').removeClass('checked');
        if ($('.fdTel').is(':checked')) {
            $('.mb-find-cnt-li--opt.tel').addClass('checked');
        } else if ($('.fdEmail').is(':checked')) {
            $('.mb-find-cnt-li--opt.email').addClass('checked');
        }
    });
</script>

<script>    
$(function() {
    $("#reg_zip_find").css("display", "inline-block");
    var pageTypeParam = "pageType=find";

	<?php if($config['cf_cert_use'] && $config['cf_cert_simple']) { ?>
	// TOSS 간편인증
	var url = "<?php echo G5_INICERT_URL; ?>/ini_request.php";
	var type = "";    
    var params = "";
    var request_url = "";
    
	
	$(".win_sa_cert").click(function() {
		type = $(this).data("type");
		params = "?directAgency=" + type + "&" + pageTypeParam;
        request_url = url + params;
        call_sa(request_url);
	});
    <?php } ?>
    <?php if($config['cf_cert_use'] && $config['cf_cert_ipin']) { ?>
    // 아이핀인증
    var params = "";
    $("#win_ipin_cert").click(function() {
        params = "?" + pageTypeParam;
        var url = "<?php echo G5_OKNAME_URL; ?>/ipin1.php"+params;
        certify_win_open('kcb-ipin', url);
        return;
    });

    <?php } ?>
    <?php if($config['cf_cert_use'] && $config['cf_cert_hp']) { ?>
    // 휴대폰인증
    var params = "";
    $("#win_hp_cert").click(function() {
        params = "?" + pageTypeParam;
        <?php     
        switch($config['cf_cert_hp']) {
            case 'kcb':                
                $cert_url = G5_OKNAME_URL.'/hpcert1.php';
                $cert_type = 'kcb-hp';
                break;
            case 'kcp':
                $cert_url = G5_KCPCERT_URL.'/kcpcert_form.php';
                $cert_type = 'kcp-hp';
                break;
            case 'lg':
                $cert_url = G5_LGXPAY_URL.'/AuthOnlyReq.php';
                $cert_type = 'lg-hp';
                break;
            default:
                echo 'alert("기본환경설정에서 휴대폰 본인확인 설정을 해주십시오");';
                echo 'return false;';
                break;
        }
        ?>
        
        certify_win_open("<?php echo $cert_type; ?>", "<?php echo $cert_url; ?>"+params);
        return;
    });
    <?php } ?>
});
function fpasswordlost_submit(f)
{
    <?php echo chk_captcha_js();  ?>

    return true;
}
</script>
<!-- } 회원정보 찾기 끝 -->