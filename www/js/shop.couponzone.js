$(function() {
    $("button.coupon_download").on("click", function() {
        if(g5_is_member != "1") {
            alert("Please use after logging in as a member.");
            // alert("회원 로그인 후 이용해 주십시오.hosu");
            return false;
        }

        var $this = $(this);
        var cz_id = $this.data("cid");

        if($this.hasClass("disabled")) {
            alert("This coupon has already been downloaded.");
            // alert("이미 다운로드하신 쿠폰입니다.hosu");
            return false;
        }

        $this.addClass("disabled").attr("disabled", true);

        $.ajax({
            type: "GET",
            data: { cz_id: cz_id },
            url: g5_url+"/shop/ajax.coupondownload.php",
            cache: false,
            async: true,
            dataType: "json",
            success: function(data) {
                if(data.error != "") {
                    $this.removeClass("disabled").attr("disabled", false);
                    alert(data.error);
                    return false;
                }

                $this.attr("disabled", false);
                alert("A coupon has been issued.");
                // alert("쿠폰이 발급됐습니다.hosu");
            }
        });
    });
});