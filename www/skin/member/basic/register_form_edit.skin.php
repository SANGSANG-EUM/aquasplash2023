<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.register_form.js"></script>', 0);
if ($config['cf_cert_use'] && ($config['cf_cert_simple'] || $config['cf_cert_ipin'] || $config['cf_cert_hp']))
    add_javascript('<script src="'.G5_JS_URL.'/certify.js?v='.G5_JS_VER.'"></script>', 0);
?>

<!-- 회원정보 입력/수정 시작 { -->
<div class="container">
<div id="reg_edit" class="register register-edit sb_container">
  <div class="wrapper">

  <div class="sb_top">
        <a href="/shop/mypage.php" class="sb-title">
          <?php if ($lang == "") { //(기본)영문
              echo "My page";
          } else if ($lang == "ko") { //국문
              echo "마이페이지";
          }?>
        </a>
      </div>

      <?php include G5_THEME_SHOP_PATH.'/mypage_top.php'; ?>

      <div class="mypage-body">
        <!-- 마이페이지 메뉴 시작 { -->
        <?php include G5_THEME_SHOP_PATH.'/mypage_menu.php'; ?>
        <script>
        $('.my-information').addClass('active');
        </script>
        <!-- } 마이페이지 메뉴 끝 -->
          <div class="mypage-in">
            <p class="mypage-in-tit">
            <?php if ($lang == "") { //(기본)영문
                echo "Modifying information";
            } else if ($lang == "ko") { //국문
                echo "회원정보변경";
            }?>
            </p>

    <div class="mbskin_box">
	<form id="fregisterform" name="fregisterform" action="<?php echo $register_action_url ?>" onsubmit="return fregisterform_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
	<input type="hidden" name="w" value="<?php echo $w ?>">
	<input type="hidden" name="url" value="<?php echo $urlencode ?>">
    <!-- 20231012 회원가입 약관 페이지 스킵 -->
	<!-- <input type="hidden" name="agree" value="<?php //echo $agree ?>">
	<input type="hidden" name="agree2" value="<?php //echo $agree2 ?>"> -->
	<input type="hidden" name="cert_type" value="<?php echo $member['mb_certify']; ?>">
	<input type="hidden" name="cert_no" value="">
	<?php if (isset($member['mb_sex'])) {  ?><input type="hidden" name="mb_sex" value="<?php echo $member['mb_sex'] ?>"><?php }  ?>
	<?php if (isset($member['mb_nick_date']) && $member['mb_nick_date'] > date("Y-m-d", G5_SERVER_TIME - ($config['cf_nick_modify'] * 86400))) { // 닉네임수정일이 지나지 않았다면  ?>
	<input type="hidden" name="mb_nick_default" value="<?php echo get_text($member['mb_nick']) ?>">
	<input type="hidden" name="mb_nick" value="<?php echo get_text($member['mb_nick']) ?>">
	<?php }  ?>

    <table class="inquiry_tb">
        <tbody>
            <tr>
                <td>
                    <p>
                    <?php if ($lang == "") { //(기본)영문
                        echo "ID";
                    } else if ($lang == "ko") { //국문
                        echo "아이디";
                    }?> 
                    <span class="label_req">*</span>
                    </p>
                </td>
                <td>
                    <div class="inquiry_content">
                    <input type="text" name="mb_id" value="<?php echo $member['mb_id'] ?>" id="reg_mb_id" <?php echo $required ?> <?php echo $readonly ?> class="frm_input full_input <?php echo $required ?> <?php echo $readonly ?> aq-input" minlength="3" maxlength="20" placeholder="<?php if ($lang == "") { //(기본)영문
                        echo "Please enter your ID.";
                    } else if ($lang == "ko") { //국문
                        echo "아이디를 입력해주세요.";
                    }?> ">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                    <?php if ($lang == "") { //(기본)영문
                        echo "Password";
                    } else if ($lang == "ko") { //국문
                        echo "비밀번호";
                    }?> 
                    <span class="label_req">*</span>
                    </p>
                </td>
                <td>
                    <div class="inquiry_content">
                    <input type="password" name="mb_password" id="reg_mb_password" <?php echo $required ?> class="frm_input full_input <?php echo $required ?> aq-input" minlength="3" maxlength="20" placeholder="<?php if ($lang == "") { //(기본)영문
                        echo "Please enter your password.";
                    } else if ($lang == "ko") { //국문
                        echo "비밀번호를 입력해주세요.";
                    }?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                    <?php if ($lang == "") { //(기본)영문
                        echo "Confirm Password";
                    } else if ($lang == "ko") { //국문
                        echo "비밀번호 확인";
                    }?> 
                    <span class="label_req">*</span>
                    </p>
                </td>
                <td>
                    <div class="inquiry_content">
                    <input type="password" name="mb_password_re" id="reg_mb_password_re" <?php echo $required ?> class="frm_input full_input <?php echo $required ?> aq-input" minlength="3" maxlength="20" placeholder="<?php if ($lang == "") { //(기본)영문
                        echo "Please enter your password.";
                    } else if ($lang == "ko") { //국문
                        echo "비밀번호를 한번 더 입력해주세요.";
                    }?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                    <?php if ($lang == "") { //(기본)영문
                        echo "Name";
                    } else if ($lang == "ko") { //국문
                        echo "이름";
                    }?>
                    <span class="label_req">*</span>
                    <?php echo $desc_name ?>
                    </p>
                </td>
                <td>
                    <div class="inquiry_content">
                    <input type="text" id="reg_mb_name" name="mb_name" value="<?php echo get_text($member['mb_name']) ?>" <?php echo $required ?> <?php echo $name_readonly; ?> class="frm_input full_input <?php echo $required ?> <?php echo $name_readonly ?> aq-input" size="10" placeholder="<?php if ($lang == "") { //(기본)영문
                        echo "Please enter your Name.";
                    } else if ($lang == "ko") { //국문
                        echo "이름을 입력해주세요.";
                    }?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                    <?php if ($lang == "") { //(기본)영문
                        echo "Date of Birth";
                    } else if ($lang == "ko") { //국문
                        echo "생년월일";
                    }?> 
                    <span class="label_req">*</span>
                    </p>
                </td>
                <td>
                    <div class="inquiry_content">
                        <div class="reg-input-wr">
                            <input type="hidden" name="mb_birth" value="<?php echo $mb['mb_birth'] ?>">
                            <select name="yy" id="year" class="aq-select"></select>
                            <select name="mm" id="month" class="aq-select"></select>
                            <select name="dd" id="day" class="aq-select"></select>
                        </div>
                        <script>
                            $(document).ready(function(){            
                                var now = new Date();
                                var year = now.getFullYear();
                                var mon = (now.getMonth() + 1) > 9 ? ''+(now.getMonth() + 1) : '0'+(now.getMonth() + 1); 
                                var day = (now.getDate()) > 9 ? ''+(now.getDate()) : '0'+(now.getDate());           
                                //년도 selectbox만들기               
                                for(var i = 1900 ; i <= year ; i++) {
                                    $('#year').append('<option value="' + i + '">' + i + '</option>');    
                                }
                            
                                // 월별 selectbox 만들기            
                                for(var i=1; i <= 12; i++) {
                                    var mm = i > 9 ? i : "0"+i ;            
                                    $('#month').append('<option value="' + mm + '">' + mm + '</option>');    
                                }
                            
                                // 일별 selectbox 만들기
                                for(var i=1; i <= 31; i++) {
                                    var dd = i > 9 ? i : "0"+i ;            
                                    $('#day').append('<option value="' + dd + '">' + dd+ '</option>');    
                                }
                                $("#year  > option[value="+year+"]").attr("selected", "true");        
                                $("#month  > option[value="+mon+"]").attr("selected", "true");    
                                $("#day  > option[value="+day+"]").attr("selected", "true");    
                            
                            
                                $('input[name=mb_birth]').val(year + '년 ' + mon + '월 ' + day + '일' );
                            
                                $('.reg-li--birth select').on('change', function(){
                                    let birth1 = $('#year').val();
                                    let birth2 = $('#month').val();
                                    let birth3 = $('#day').val();
                                    $('input[name=mb_birth]').val(birth1 + '년 ' + birth2 + '월 ' + birth3 + '일' );
                                });
                            });
                        </script>
                    </div>
                </td>
            </tr>
            <?php if ($config['cf_use_tel']) {  ?>
            <tr>
                <td>
                    <p>
                    <?php if ($lang == "") { //(기본)영문
                        echo "Phone number";
                    } else if ($lang == "ko") { //국문
                        echo "연락처";
                    }?> 
                    <span class="label_req">*</span>
                    </p>
                </td>
                <td>
                    <div class="inquiry_content">
                    <?php if ($config['cf_req_tel']) { ?> <?php } ?>
                    <input type="text" name="mb_tel" value="<?php echo get_text($member['mb_tel']) ?>" id="reg_mb_tel" <?php echo $config['cf_req_tel']?"required":""; ?>      class="frm_input full_input <?php echo $config['cf_req_tel']?"required":""; ?> aq-input" maxlength="20" placeholder="<?php if ($lang == "") { //(기본)영문
                        echo "Please enter your phone number.";
                    } else if ($lang == "ko") { //국문
                        echo "연락처를 입력해주세요.";
                    }?> " onKeyup="this.value=this.value.replace(/[^0-9]/g,'')";>
                    </div>
                </td>
            </tr>
            <?php }  ?>
            
            <tr>
                <td>
                    <?php if ($config['cf_use_email_certify']) {  ?>
                    <button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
                    <span class="tooltip">
                    <?php if ($w=='') { echo "E-mail 로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다."; }  ?>
                    <?php if ($w=='u') { echo "E-mail 주소를 변경하시면 다시 인증하셔야 합니다."; }  ?>
                    </span>
                    <?php }  ?>
                    <p>
                    <?php if ($lang == "") { //(기본)영문
                        echo "E-mail";
                    } else if ($lang == "ko") { //국문
                        echo "이메일";
                    }?> 
                    <span class="label_req">*</span>
                    </p>
                </td>
                <td>
                    <div class="inquiry_content email">
                    <input type="hidden" name="old_email" value="<?php echo $member['mb_email'] ?>">
                    <input type="hidden" name="mb_email" value="<?php echo isset($member['mb_email'])?$member['mb_email']:''; ?>" id="reg_mb_email" required class="frm_input email full_input required" size="70" maxlength="100" placeholder="">
                    <div class="reg-input-wr">
                    <input type="text" id="regEmail1" class="aq-input">
                    @
                    <input type="text" id="regEmail2" class="aq-input">
                    </div>
                    <script>
                        let mbEmail = $('input[name="mb_email"]').val().split('@');
                        let mbEmail1 = mbEmail[0];
                        let mbEmail2 = mbEmail[1];
                        $('#regEmail1').val(mbEmail1);
                        $('#regEmail2').val(mbEmail2);

                        $('.inquiry_content.email input').on('change', function(){
                            let email1 = $('#regEmail1').val();
                            let email2 = $('#regEmail2').val();
                            $('input[name=mb_email]').val(email1+'@'+email2);
                        });
                    </script>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="info-edit-catpcha"><?php echo captcha_html(); ?></div>

    <div id="sod_ws_back" class="sod_back btn_confirm">
        <a href="https://aquasplash.eumsvr.com/shop/mypage.php" class="sod_back-btn">
        <img src="/source/img/icon-back_white.png" alt="">
        Back
        </a>
        <button type="submit" id="btn_submit" class="btn_submit btn-edit" accesskey="s">
        <?php if ($lang == "") { //(기본)영문
            echo "Confirm";
        } else if ($lang == "ko") { //국문
            echo "수정완료";
        }?>
        </button>
    </div>
    

    </div>
	
	<div id="register_form" class="form_01">   

      <!-- 하단 개인정보 입력 및 기타 개인 설정은 삭제 -->
	    <div class="tbl_frm01 tbl_wrap register_form_inner noshow">
	        <h2>개인정보 입력</h2>
	        <ul>
				<li>
                    <?php 
					$desc_name = '';
					$desc_phone = '';
	                if ($config['cf_cert_use']) {
                        $desc_name = '<span class="cert_desc"> 본인확인 시 자동입력</span>';
                        $desc_phone = '<span class="cert_desc"> 본인확인 시 자동입력</span>';

                        if (!$config['cf_cert_simple'] && !$config['cf_cert_hp'] && $config['cf_cert_ipin']) {
                            $desc_phone = '';
                        }

	                    if ($config['cf_cert_simple']) {
                            echo '<button type="button" id="win_sa_kakao_cert" class="btn_frmline win_sa_cert" data-type="">간편인증</button>'.PHP_EOL;
						}
						if($config['cf_cert_hp'])
							echo '<button type="button" id="win_hp_cert" class="btn_frmline">휴대폰 본인확인</button>'.PHP_EOL;
						if ($config['cf_cert_ipin'])
							echo '<button type="button" id="win_ipin_cert" class="btn_frmline">아이핀 본인확인</button>'.PHP_EOL;
	
                        echo '<span class="cert_req">(필수)</span>';
	                    echo '<noscript>본인확인을 위해서는 자바스크립트 사용이 가능해야합니다.</noscript>'.PHP_EOL;
	                }
	                ?>
	                <?php
	                if ($config['cf_cert_use'] && $member['mb_certify']) {
						switch  ($member['mb_certify']) {
							case "simple": 
								$mb_cert = "간편인증";
								break;
							case "ipin": 
								$mb_cert = "아이핀";
								break;
							case "hp": 
								$mb_cert = "휴대폰";
								break;
						}
	                ?>
	                <div id="msg_certify">
	                    <strong><?php echo $mb_cert; ?> 본인확인</strong><?php if ($member['mb_adult']) { ?> 및 <strong>성인인증</strong><?php } ?> 완료
	                </div>
				<?php } ?>
				</li>
	            <?php if ($req_nick) {  ?>
	            <li>
	                <label for="reg_mb_nick">
	                	닉네임 (필수)
	                	<button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
						<span class="tooltip">공백없이 한글,영문,숫자만 입력 가능 (한글2자, 영문4자 이상)<br> 닉네임을 바꾸시면 앞으로 <?php echo (int)$config['cf_nick_modify'] ?>일 이내에는 변경 할 수 없습니다.</span>
	                </label>
	                
                    <input type="hidden" name="mb_nick_default" value="<?php echo isset($member['mb_nick'])?get_text($member['mb_nick']):''; ?>">
                    <input type="text" name="mb_nick" value="<?php echo isset($member['mb_nick'])?get_text($member['mb_nick']):''; ?>" id="reg_mb_nick" required class="frm_input required nospace full_input" size="10" maxlength="20" placeholder="닉네임">
                    <span id="msg_mb_nick"></span>	                
	            </li>
	            <?php }  ?>

              <?php
                function generate_user_nick() {
                    global $g5, $config, $member;
 
                    // 다음 닉네임을 생성합니다.
                    $new_user_num = 1;
 
                    // 그누보드 환경 설정 파일 불러오기
                    include_once('../../../config.php');
 
                    $sql = "SELECT MAX(CAST(SUBSTRING(mb_nick, 5) AS UNSIGNED)) AS max_user_num FROM {$g5['member_table']}";
                    $row = sql_fetch($sql);
 
                    if ($row && $row['max_user_num']) {
                    $new_user_num = $row['max_user_num'] + 1;
                    }
 
                    // 형식에 맞는 닉네임 생성
                    $new_nick = 'user' . str_pad($new_user_num, 4, '0', STR_PAD_LEFT);
 
                    return $new_nick;
                }
                ?>
	
	            <?php if ($config['cf_use_homepage']) {  ?>
	            <li>
	                <label for="reg_mb_homepage">홈페이지<?php if ($config['cf_req_homepage']){ ?> (필수)<?php } ?></label>
	                <input type="text" name="mb_homepage" value="<?php echo get_text($member['mb_homepage']) ?>" id="reg_mb_homepage" <?php echo $config['cf_req_homepage']?"required":""; ?> class="frm_input full_input <?php echo $config['cf_req_homepage']?"required":""; ?>" size="70" maxlength="255" placeholder="홈페이지">
	            </li>
	            <?php }  ?>
	
	            
				<li>
	            <?php if ($config['cf_use_hp'] || ($config["cf_cert_use"] && ($config['cf_cert_hp'] || $config['cf_cert_simple']))) {  ?>
	                <label for="reg_mb_hp">휴대폰번호<?php if (!empty($hp_required)) { ?> (필수)<?php } ?><?php echo $desc_phone ?></label>
	                
	                <input type="text" name="mb_hp" value="<?php echo get_text($member['mb_hp']) ?>" id="reg_mb_hp" <?php echo $hp_required; ?> <?php echo $hp_readonly; ?> class="frm_input full_input <?php echo $hp_required; ?> <?php echo $hp_readonly; ?>" maxlength="20" placeholder="휴대폰번호">
	                <?php if ($config['cf_cert_use'] && ($config['cf_cert_hp'] || $config['cf_cert_simple'])) { ?>
	                <input type="hidden" name="old_mb_hp" value="<?php echo get_text($member['mb_hp']) ?>">
	                <?php } ?>
	            <?php }  ?>
	            </li>
	
	            <?php if ($config['cf_use_addr']) { ?>
	            <li>
	            	<label>주소</label>
					<?php if ($config['cf_req_addr']) { ?> (필수)<?php }  ?>
	                <label for="reg_mb_zip" class="sound_only">우편번호<?php echo $config['cf_req_addr']?' (필수)':''; ?></label>
	                <input type="text" name="mb_zip" value="<?php echo $member['mb_zip1'].$member['mb_zip2']; ?>" id="reg_mb_zip" <?php echo $config['cf_req_addr']?"required":""; ?> class="frm_input twopart_input <?php echo $config['cf_req_addr']?"required":""; ?>" size="5" maxlength="6"  placeholder="우편번호">
	                <button type="button" class="btn_frmline" onclick="win_zip('fregisterform', 'mb_zip', 'mb_addr1', 'mb_addr2', 'mb_addr3', 'mb_addr_jibeon');">주소 검색</button><br>
	                <input type="text" name="mb_addr1" value="<?php echo get_text($member['mb_addr1']) ?>" id="reg_mb_addr1" <?php echo $config['cf_req_addr']?"required":""; ?> class="frm_input frm_address full_input <?php echo $config['cf_req_addr']?"required":""; ?>" size="50"  placeholder="기본주소">
	                <label for="reg_mb_addr1" class="sound_only">기본주소<?php echo $config['cf_req_addr']?' (필수)':''; ?></label><br>
	                <input type="text" name="mb_addr2" value="<?php echo get_text($member['mb_addr2']) ?>" id="reg_mb_addr2" class="frm_input frm_address full_input" size="50" placeholder="상세주소">
	                <label for="reg_mb_addr2" class="sound_only">상세주소</label>
	                <br>
	                <input type="text" name="mb_addr3" value="<?php echo get_text($member['mb_addr3']) ?>" id="reg_mb_addr3" class="frm_input frm_address full_input" size="50" readonly="readonly" placeholder="참고항목">
	                <label for="reg_mb_addr3" class="sound_only">참고항목</label>
	                <input type="hidden" name="mb_addr_jibeon" value="<?php echo get_text($member['mb_addr_jibeon']); ?>">
	            </li>
	            <?php }  ?>
	        </ul>
	    </div>
	
	    <div class="tbl_frm01 tbl_wrap register_form_inner noshow">
	        <h2>기타 개인설정</h2>
	        <ul>
	            <?php if ($config['cf_use_signature']) {  ?>
	            <li>
	                <label for="reg_mb_signature">서명<?php if ($config['cf_req_signature']){ ?> (필수)<?php } ?></label>
	                <textarea name="mb_signature" id="reg_mb_signature" <?php echo $config['cf_req_signature']?"required":""; ?> class="<?php echo $config['cf_req_signature']?"required":""; ?>"   placeholder="서명"><?php echo $member['mb_signature'] ?></textarea>
	            </li>
	            <?php }  ?>
	
	            <?php if ($config['cf_use_profile']) {  ?>
	            <li>
	                <label for="reg_mb_profile">자기소개</label>
	                <textarea name="mb_profile" id="reg_mb_profile" <?php echo $config['cf_req_profile']?"required":""; ?> class="<?php echo $config['cf_req_profile']?"required":""; ?>" placeholder="자기소개"><?php echo $member['mb_profile'] ?></textarea>
	            </li>
	            <?php }  ?>
	
	            <?php if ($config['cf_use_member_icon'] && $member['mb_level'] >= $config['cf_icon_level']) {  ?>
	            <li>
	                <label for="reg_mb_icon" class="frm_label">
	                	회원아이콘
	                	<button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
	                	<span class="tooltip">이미지 크기는 가로 <?php echo $config['cf_member_icon_width'] ?>픽셀, 세로 <?php echo $config['cf_member_icon_height'] ?>픽셀 이하로 해주세요.<br>
gif, jpg, png파일만 가능하며 용량 <?php echo number_format($config['cf_member_icon_size']) ?>바이트 이하만 등록됩니다.</span>
	                </label>
	                <input type="file" name="mb_icon" id="reg_mb_icon">
	
	                <?php if ($w == 'u' && file_exists($mb_icon_path)) {  ?>
	                <img src="<?php echo $mb_icon_url ?>" alt="회원아이콘">
	                <input type="checkbox" name="del_mb_icon" value="1" id="del_mb_icon">
	                <label for="del_mb_icon" class="inline">삭제</label>
	                <?php }  ?>
	            
	            </li>
	            <?php }  ?>
	
	            <?php if ($member['mb_level'] >= $config['cf_icon_level'] && $config['cf_member_img_size'] && $config['cf_member_img_width'] && $config['cf_member_img_height']) {  ?>
	            <li class="reg_mb_img_file">
	                <label for="reg_mb_img" class="frm_label">
	                	회원이미지
	                	<button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
	                	<span class="tooltip">이미지 크기는 가로 <?php echo $config['cf_member_img_width'] ?>픽셀, 세로 <?php echo $config['cf_member_img_height'] ?>픽셀 이하로 해주세요.<br>
	                    gif, jpg, png파일만 가능하며 용량 <?php echo number_format($config['cf_member_img_size']) ?>바이트 이하만 등록됩니다.</span>
	                </label>
	                <input type="file" name="mb_img" id="reg_mb_img">
	
	                <?php if ($w == 'u' && file_exists($mb_img_path)) {  ?>
	                <img src="<?php echo $mb_img_url ?>" alt="회원이미지">
	                <input type="checkbox" name="del_mb_img" value="1" id="del_mb_img">
	                <label for="del_mb_img" class="inline">삭제</label>
	                <?php }  ?>
	            
	            </li>
	            <?php } ?>

	            <li class="chk_box">
		        	<input type="checkbox" name="mb_mailling" value="1" id="reg_mb_mailling" <?php echo ($w=='' || $member['mb_mailling'])?'checked':''; ?> class="selec_chk">
		            <label for="reg_mb_mailling">
		            	<span></span>
		            	<b class="sound_only">메일링서비스</b>
		            </label>
		            <span class="chk_li">정보 메일을 받겠습니다.</span>
		        </li>
	
				<?php if ($config['cf_use_hp']) { ?>
		        <li class="chk_box">
		            <input type="checkbox" name="mb_sms" value="1" id="reg_mb_sms" <?php echo ($w=='' || $member['mb_sms'])?'checked':''; ?> class="selec_chk">
		        	<label for="reg_mb_sms">
		            	<span></span>
		            	<b class="sound_only">SMS 수신여부</b>
		            </label>        
		            <span class="chk_li">휴대폰 문자메세지를 받겠습니다.</span>
		        </li>
		        <?php } ?>
	
		        <?php if (isset($member['mb_open_date']) && $member['mb_open_date'] <= date("Y-m-d", G5_SERVER_TIME - ($config['cf_open_modify'] * 86400)) || empty($member['mb_open_date'])) { // 정보공개 수정일이 지났다면 수정가능 ?>
		        <li class="chk_box">
		            <input type="checkbox" name="mb_open" value="1" id="reg_mb_open" <?php echo ($w=='' || $member['mb_open'])?'checked':''; ?> class="selec_chk">
		      		<label for="reg_mb_open">
		      			<span></span>
		      			<b class="sound_only">정보공개</b>
		      		</label>      
		            <span class="chk_li">다른분들이 나의 정보를 볼 수 있도록 합니다.</span>
		            <button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
		            <span class="tooltip">
		                정보공개를 바꾸시면 앞으로 <?php echo (int)$config['cf_open_modify'] ?>일 이내에는 변경이 안됩니다.
		            </span>
		            <input type="hidden" name="mb_open_default" value="<?php echo $member['mb_open'] ?>"> 
		        </li>		        
		        <?php } else { ?>
	            <li>
	                정보공개
	                <input type="hidden" name="mb_open" value="<?php echo $member['mb_open'] ?>">
	                <button type="button" class="tooltip_icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span class="sound_only">설명보기</span></button>
	                <span class="tooltip">
	                    정보공개는 수정후 <?php echo (int)$config['cf_open_modify'] ?>일 이내, <?php echo date("Y년 m월 j일", isset($member['mb_open_date']) ? strtotime("{$member['mb_open_date']} 00:00:00")+$config['cf_open_modify']*86400:G5_SERVER_TIME+$config['cf_open_modify']*86400); ?> 까지는 변경이 안됩니다.<br>
	                    이렇게 하는 이유는 잦은 정보공개 수정으로 인하여 쪽지를 보낸 후 받지 않는 경우를 막기 위해서 입니다.
	                </span>
	                
	            </li>
	            <?php }  ?>
	
	            <?php
	            //회원정보 수정인 경우 소셜 계정 출력
	            if( $w == 'u' && function_exists('social_member_provider_manage') ){
	                social_member_provider_manage();
	            }
	            ?>
	            
	            <?php if ($w == "" && $config['cf_use_recommend']) {  ?>
	            <li>
	                <label for="reg_mb_recommend" class="sound_only">추천인아이디</label>
	                <input type="text" name="mb_recommend" id="reg_mb_recommend" class="frm_input" placeholder="추천인아이디">
	            </li>
	            <?php }  ?>
	
	            
	        </ul>
	    </div>
	</div>
	</form>
</div>
</div>
</div>
</div>


<script>
$(function() {
    $("#reg_zip_find").css("display", "inline-block");
    var pageTypeParam = "pageType=register";

	<?php if($config['cf_cert_use'] && $config['cf_cert_simple']) { ?>
	// 이니시스 간편인증
	var url = "<?php echo G5_INICERT_URL; ?>/ini_request.php";
	var type = "";    
    var params = "";
    var request_url = "";

	$(".win_sa_cert").click(function() {
		if(!cert_confirm()) return false;
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
		if(!cert_confirm()) return false;
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
		if(!cert_confirm()) return false;
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

// submit 최종 폼체크
function fregisterform_submit(f)
{

    // 회원아이디 검사
    if (f.w.value == "") {
        var msg = reg_mb_id_check();
        if (msg) {
            alert(msg);
            f.mb_id.select();
            return false;
        }
    }

    if (f.w.value == "") {
        if (f.mb_password.value.length < 3) {
            alert("Please enter a password of at least 3 characters.");
            // alert("비밀번호를 3글자 이상 입력하십시오. hosu");
            f.mb_password.focus();
            return false;
        }
    }

    if (f.mb_password.value != f.mb_password_re.value) {
        alert("The passwords are not the same.");
        // alert("비밀번호가 같지 않습니다. hosu");
        f.mb_password_re.focus();
        return false;
    }

    if (f.mb_password.value.length > 0) {
        if (f.mb_password_re.value.length < 3) {
            alert("Please enter a password of at least 3 characters.");
            // alert("비밀번호를 3글자 이상 입력하십시오. hosu");
            f.mb_password_re.focus();
            return false;
        }
    }

    // 이름 검사
    if (f.w.value=="") {
        if (f.mb_name.value.length < 1) {
            alert("Please enter your name.");
            // alert("이름을 입력하십시오. hosu");
            f.mb_name.focus();
            return false;
        }

        /*
        var pattern = /([^가-힣\x20])/i;
        if (pattern.test(f.mb_name.value)) {
            alert("이름은 한글로 입력하십시오.");
            f.mb_name.select();
            return false;
        }
        */
    }

    <?php if($w == '' && $config['cf_cert_use'] && $config['cf_cert_req']) { ?>
    // 본인확인 체크
    if(f.cert_no.value=="") {
        alert("회원가입을 위해서는 본인확인을 해주셔야 합니다.");
        return false;
    }
    <?php } ?>

    // 닉네임 검사
    if ((f.w.value == "") || (f.w.value == "u" && f.mb_nick.defaultValue != f.mb_nick.value)) {
        var msg = reg_mb_nick_check();
        if (msg) {
            alert(msg);
            f.reg_mb_nick.select();
            return false;
        }
    }

    // E-mail 검사
    if ((f.w.value == "") || (f.w.value == "u" && f.mb_email.defaultValue != f.mb_email.value)) {
        var msg = reg_mb_email_check();
        if (msg) {
            alert(msg);
            f.reg_mb_email.select();
            return false;
        }
    }

    <?php if (($config['cf_use_hp'] || $config['cf_cert_hp']) && $config['cf_req_hp']) {  ?>
    // 휴대폰번호 체크
    var msg = reg_mb_hp_check();
    if (msg) {
        alert(msg);
        f.reg_mb_hp.select();
        return false;
    }
    <?php } ?>

    if (typeof f.mb_icon != "undefined") {
        if (f.mb_icon.value) {
            if (!f.mb_icon.value.toLowerCase().match(/.(gif|jpe?g|png)$/i)) {
                alert("회원아이콘이 이미지 파일이 아닙니다.");
                f.mb_icon.focus();
                return false;
            }
        }
    }

    if (typeof f.mb_img != "undefined") {
        if (f.mb_img.value) {
            if (!f.mb_img.value.toLowerCase().match(/.(gif|jpe?g|png)$/i)) {
                alert("회원이미지가 이미지 파일이 아닙니다.");
                f.mb_img.focus();
                return false;
            }
        }
    }

    if (typeof(f.mb_recommend) != "undefined" && f.mb_recommend.value) {
        if (f.mb_id.value == f.mb_recommend.value) {
            alert("본인을 추천할 수 없습니다.");
            f.mb_recommend.focus();
            return false;
        }

        var msg = reg_mb_recommend_check();
        if (msg) {
            alert(msg);
            f.mb_recommend.select();
            return false;
        }
    }

    <?php echo chk_captcha_js();  ?>

    document.getElementById("btn_submit").disabled = "disabled";

    return true;
}

jQuery(function($){
	//tooltip
    $(document).on("click", ".tooltip_icon", function(e){
        $(this).next(".tooltip").fadeIn(400).css("display","inline-block");
    }).on("mouseout", ".tooltip_icon", function(e){
        $(this).next(".tooltip").fadeOut();
    });
});

</script>

<!-- } 회원정보 입력/수정 끝 -->