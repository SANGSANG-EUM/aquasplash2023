<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_PATH.'/include/sub_visual.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

/*
#회원관리 > 최고관리자(admin) 메일 주소로 발송됨
#기본환경설정 > 글작성메일: 최고솬리자 사용 체크
#게시판관리 > 해당 게시판 수정모드 > 기능설정: 메일발송 사용 체크
#스팸메일함으로 수신될 수 있음
*/
?>

<div id="qa_write" class="sub qa">


  <!-- sub contents { -->
  <div class="container sub_contents">

    <!-- sub visual { -->
    <?php sub_visual('community', 'back'); ?>
    <!-- } sub visual -->

    <div class="wrapper">
      <!-- 회원 유형에 따라 Business Inquiry / General inquiry 나뉨 -->
      <p class="prd-list-tit community-tit">
        <?php if ($lang == "") { //(기본)영문
            echo "Inquiry";
        } else if ($lang == "ko") { //국문
            echo "문의";
        }?>
      </p>
      <p class="prd-list-subtit">
        <?php if ($lang == "") { //(기본)영문
            echo "If you have any questions, please fill out the following and press the Ask button.";
        } else if ($lang == "ko") { //국문
            echo "";
        }?>
        </p>

      <!-- 게시물 작성/수정 시작 { -->
      <section id="bo_w">
        <h2 class="sound_only"><?php echo $g5['title'] ?></h2>

        <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
          <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
          <input type="hidden" name="w" value="<?php echo $w ?>">
          <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
          <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
          <input type="hidden" name="sca" value="<?php echo $sca ?>">
          <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
          <input type="hidden" name="stx" value="<?php echo $stx ?>">
          <input type="hidden" name="spt" value="<?php echo $spt ?>">
          <input type="hidden" name="sst" value="<?php echo $sst ?>">
          <input type="hidden" name="sod" value="<?php echo $sod ?>">
          <input type="hidden" name="page" value="<?php echo $page ?>">
          <input type="hidden" name="wr_3" value="<?php echo $write['wr_3'] ?>">
          <input type="hidden" name="wr_subject" value="<?php if ($lang == "") { //(기본)영문
            echo "Inquiry";
        } else if ($lang == "ko") { //국문
            echo "상담문의";
        }?>">

          <?php
          $option = '';
          $option_hidden = '';
          if ($is_notice || $is_html || $is_secret || $is_mail) { 
            $option = '';
            if ($is_notice) {
              $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="notice" name="notice"  class="selec_chk" value="1" '.$notice_checked.'>'.PHP_EOL.'<label for="notice"><span></span>공지</label></li>';
            }
            if ($is_html) {
                if ($is_dhtml_editor) {
                  $option_hidden .= '<input type="hidden" value="html1" name="html">';
                } else {
                  $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" class="selec_chk" value="'.$html_value.'" '.$html_checked.'>'.PHP_EOL.'<label for="html"><span></span>html</label></li>';
                }
            }
            if ($is_secret) {
                if ($is_admin || $is_secret==1) {
                  $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="secret" name="secret"  class="selec_chk" value="secret" '.$secret_checked.'>'.PHP_EOL.'<label for="secret"><span></span>비밀글</label></li>';
                } else {
                  $option_hidden .= '<input type="hidden" name="secret" value="secret">';
                }
            }
            if ($is_mail) {
              $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="mail" name="mail"  class="selec_chk" value="mail" '.$recv_email_checked.'>'.PHP_EOL.'<label for="mail"><span></span>답변메일받기</label></li>';
            }
          }
          echo $option_hidden;
          ?>


          <div class="inquiry_ct">
            <!-- <div class="inquiry_top">
              <p class="inquiry_title1">기본정보 입력</p>
              <p class="inquiry_title2">(<span class="red">*</span>은 필수 입력사항입니다.)</p>
            </div> -->
            <table class="inquiry_tb">
              <tbody>
                <tr>
                  <td>
                    <p class="inquiry_requiretxt">
                    <?php if ($lang == "") { //(기본)영문
                        echo "Inquiry type";
                    } else if ($lang == "ko") { //국문
                        echo "문의 유형";
                    }?>
                    </p>
                  </td>
                  <td>
                    <div class="inquiry_content">
                      <div class="inq-input-wr inq-input-wr--type">
                        <div class="radio_wrap">
                          <input type="radio" name="wr_1" id="genInqType1" value="type1"<?php echo ($write['wr_1'] === "type1") ? " checked" : ""; ?>>
                          <label for="genInqType1">type1</label>
                        </div>
                        <div class="radio_wrap">
                          <input type="radio" name="wr_1" id="genInqType2" value="type2"<?php echo ($write['wr_1'] === "type2") ? " checked" : ""; ?>>
                          <label for="genInqType2">type2</label>
                        </div>
                        <div class="radio_wrap">
                          <input type="radio" name="wr_1" id="genInqType3" value="type3"<?php echo ($write['wr_1'] === "type3") ? " checked" : ""; ?>>
                          <label for="genInqType3">type3</label>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="inquiry_requiretxt">
                    <?php if ($lang == "") { //(기본)영문
                        echo "Name";
                    } else if ($lang == "ko") { //국문
                        echo "이름";
                    }?>
                    </p>
                  </td>
                  <td>
                    <div class="inquiry_content">
                      <input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input full_input">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="inquiry_requiretxt">
                      <?php if ($lang == "") { //(기본)영문
                          echo "Phone number";
                      } else if ($lang == "ko") { //국문
                          echo "연락처";
                      }?>
                    </p>
                  </td>
                  <td>
                    <div class="inquiry_content">
                      <input type="text" name="wr_2" id="wr_2" value="<?=$write['wr_2']?>" required class="frm_input half_input">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="inquiry_requiretxt">
                      <?php if ($lang == "") { //(기본)영문
                          echo "E-mail";
                      } else if ($lang == "ko") { //국문
                          echo "이메일";
                      }?>
                      </p>
                  </td>
                  <td>
                    <div class="inquiry_content">
                      <ul class="i-col-0 email_ul">
                        <li>
                          <input type="text" name="wr_email1" id="wr_email1" required>
                        </li>
                        <li>
                          <span>@</span>
                        </li>
                        <li>
                          <input type="text" name="wr_email2" id="wr_email2" required>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      <?php if ($lang == "") { //(기본)영문
                          echo "The attached file";
                      } else if ($lang == "ko") { //국문
                          echo "파일첨부";
                      }?>
                      </p>
                  </td>
                  <td>
                    <div class="inquiry_content">
                      <div class="file-box">
                        <!-- 파일 인풋 추가 -->
                        <div class="upload_box_wr">
                          <input class="upload_box frm_input full_input">
                          <div class="file_cancel">
                            <span></span>
                            <span></span>
                          </div>
                        </div>
                        <label for="bf_file_1" class="btn_file">
                        <?php if ($lang == "") { //(기본)영문
                          echo "File Attachment";
                        } else if ($lang == "ko") { //국문
                            echo "파일첨부";
                        }?>
                      </label>
                        <input type="file" name="bf_file[]" id="bf_file_1" onchange="checkSize(this)" class="inq_file">
                      </div>
                      <?php //for ($i=0; $is_file && $i<$file_count; $i++) { ?>
                      <!-- <div class="bo_w_flie">
                        <div class="file_wr">
                          <label for="bf_file_<?php echo $i+1 ?>" class="lb_icon"><i class="fa fa-folder-open" aria-hidden="true"></i><span class="sound_only"> 파일 #<?php echo $i+1 ?></span></label>
                          <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
                        </div>
                        <?php if ($is_file_content) { ?>
                        <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
                        <?php } ?>

                        <?php if($w == 'u' && $file[$i]['file']) { ?>
                        <span class="file_del">
                          <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
                        </span>
                        <?php } ?>
                      </div> -->
                      <?php// } ?>
                    </div>
                    <script>
                      // 견적문의 - 파일첨부 커스텀
                      $("input.inq_file").on('change',function(){
                        var fileName = $(this).val().split('/').pop().split('\\').pop();
                        var fileLength = fileName.length;
                        $(this).siblings($(".upload_box_wr")).children('.upload_box').val(fileName);
                        $('.upload_box').attr('size', fileLength + 5);
                        $('.file_cancel').css('display','block');
                      });

                      $('.file_cancel').click(function(){
                        $("input.inq_file").val('')
                        $('.upload_box').val('');
                        $(this).css('display','none')
                      });
                    </script>
                  </td>
                </tr>
                <tr>
                  <td class="txt-top">
                    <p class="inquiry_requiretxt">
                      <?php if ($lang == "") { //(기본)영문
                          echo "Inquiry details";
                      } else if ($lang == "ko") { //국문
                          echo "문의내용";
                      }?>
                    </p>
                  </td>
                  <td>
                    <div class="inquiry_content">
                      <textarea name="wr_content" id="wr_content" value="<?php echo $wr_content ?>" cols="30" rows="10" required></textarea>
                    </div>
                  </td>
                </tr>
                <!-- <tr>
                  <td>
                    <p>관련링크</p>
                  </td>
                  <td>
                    <div class="inquiry_content">
                      <?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
                      <div class="bo_w_link">
                        <label for="wr_link<?php echo $i ?>"><i class="fa fa-link" aria-hidden="true"></i><span class="sound_only"> 링크  #<?php echo $i ?></span></label>
                        <input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){ echo $write['wr_link'.$i]; } ?>" id="wr_link<?php echo $i ?>" class="frm_input full_input" size="50">
                      </div>
                      <?php } ?>
                    </div>
                  </td>
                </tr> -->
                <?php if ($is_use_captcha) { //자동등록방지  ?>
                <tr>
                  <td>
                    <p class="inquiry_requiretxt">
                    <?php if ($lang == "") { //(기본)영문
                        echo "Captcha";
                    } else if ($lang == "ko") { //국문
                        echo "자동등록방지";
                    }?>
                    </p>
                  </td>
                  <td>
                    <div class="inquiry_content">
                      <?php echo $captcha_html ?>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>

          <!-- <div class="inquiry_privacy_ct">
            <p class="inquiry_title1">개인정보 수집 및 활용 동의</p>
            <div class="policybox">
              <div class="policy_wrap">
                <ul>
                  <li>
                    <p>1. 개인정보의 수집 및 이용 목적 <br>가맹 관련 문의 확인 및 답변을 위한 연락통지, 처리결과 통보 등을 목적으로 개인정보를 처리합니다.</p>
                  </li>
                  <li>
                    <p>2. 처리하는 개인정보 항목 <br>- 필수항목 : 이름, 연락처 (접속 IP 정보, 쿠키, 서비스 이용 기록, 접속 로그), 점포보유유무, 문의내용 <br>- 선택항목 : 이메일, 창업희망지역, 예상창업비용</p>
                  </li>
                  <li>
                    <p>3. 개인정보의 처리 및 보유 기간 <br>① 법령에 따른 개인정보 보유.이용기간 또는 정보주체로부터 개인정보를 수집 시에 동의받은 개인정보 보유, 이용기간 내에서 개인정보를 처리, 보유합니다. <br>② 개인정보의 보유 기간은 5년입니다.</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="policy_chkbox polic_consult">
              <input type="checkbox" id="po_ck1" class="required" required="">
              <label for="po_ck1">위 개인정보 수집 및 활용에 동의합니다</label>
            </div>
          </div> -->

          <?php if ($is_category) { ?>
          <div class="bo_w_select write_div">
            <label for="ca_name" class="sound_only">분류<strong>필수</strong></label>
            <select name="ca_name" id="ca_name" required>
              <option value="">분류를 선택하세요</option>
              <?php echo $category_option ?>
            </select>
          </div>
          <?php } ?>

          

          <div class="btn_confirm">
            <ul class="i-col-0 btn_confirm_ul">
              <?php if($is_admin){ ?>
              <li>
                <a href="<?php echo get_pretty_url($bo_table); ?>" class="btn_cancel bo_btn2">목록</a>
              </li>
              <?php } ?>
              <li>
                <button type="submit" id="btn_submit" accesskey="s" class="btn_submit bo_btn1">
                <?php if ($lang == "") { //(기본)영문
                    echo "Send";
                } else if ($lang == "ko") { //국문
                    echo "문의하기";
                }?>
                </button>
              </li>
            </ul>
          </div>
        </form>

        <script>
        <?php if($write_min || $write_max) { ?>
        // 글자수 제한
        var char_min = parseInt(<?php echo $write_min; ?>); // 최소
        var char_max = parseInt(<?php echo $write_max; ?>); // 최대
        check_byte("wr_content", "char_count");

        $(function() {
            $("#wr_content").on("keyup", function() {
                check_byte("wr_content", "char_count");
            });
        });

        <?php } ?>
        function html_auto_br(obj)
        {
            if (obj.checked) {
                result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
                if (result)
                    obj.value = "html2";
                else
                    obj.value = "html1";
            }
            else
                obj.value = "";
        }

        var email1 = "",
            email2 = "";

        function fwrite_submit(f)
        {
            <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

            var subject = "";
            var content = "";
            $.ajax({
                url: g5_bbs_url+"/ajax.filter.php",
                type: "POST",
                data: {
                    "subject": f.wr_subject.value,
                    "content": f.wr_content.value
                },
                dataType: "json",
                async: false,
                cache: false,
                success: function(data, textStatus) {
                    subject = data.subject;
                    content = data.content;
                }
            });

            if (subject) {
                alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
                f.wr_subject.focus();
                return false;
            }

            if (content) {
                alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
                if (typeof(ed_wr_content) != "undefined")
                    ed_wr_content.returnFalse();
                else
                    f.wr_content.focus();
                return false;
            }

            if (document.getElementById("char_count")) {
                if (char_min > 0 || char_max > 0) {
                    var cnt = parseInt(check_byte("wr_content", "char_count"));
                    if (char_min > 0 && char_min > cnt) {
                        alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                        return false;
                    }
                    else if (char_max > 0 && char_max < cnt) {
                        alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                        return false;
                    }
                }
            }

            email1 = $("#wr_email1").val(),
            email2 = $("#wr_email2").val();

            $("input[name='wr_3']").val(email1+"@"+email2);

            <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

            document.getElementById("btn_submit").disabled = "disabled";

            return true;
        }
        </script>
      </section>
      <!-- } 게시물 작성/수정 끝 -->

    </div>
  </div>
  <!-- } sub contents -->
</div>