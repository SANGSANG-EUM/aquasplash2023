function chk_captcha()
{
	if ( ! jQuery('#g-recaptcha-response').val()) {

		alert("Be sure to check automatic registration prevention.");         
		// alert("자동등록방지를 반드시 체크해 주세요.hosu");
		return false;
	}

	return true;
}