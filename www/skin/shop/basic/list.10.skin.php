<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_SHOP_SKIN_URL.'/style.css">', 0);

// 장바구니 또는 위시리스트 ajax 스크립트
add_javascript('<script src="'.G5_JS_URL.'/shop.list.action.js"></script>', 10);

include_once(G5_PATH.'/include/sub_visual.php');
?>



<div class="container sub_contents">

<!-- sub visual { -->
    <?php 
    $current_url = $_SERVER['REQUEST_URI'];
    if (preg_match('/\/shop\/list-(\d+)/', $current_url, $matches)) {
        if ($matches[1] == '1010') {
            sub_visual('colour1', 'back');
        } else if ($matches[1] == '1020') {
            sub_visual('colour2', 'back');
        } else if ($matches[1] == '1030') {
            sub_visual('colour3', 'back');
        } else if ($matches[1] == '1040') {
            sub_visual('colour4', 'back');
        } else if ($matches[1] == '20') {
            sub_visual('clear', '');
        } else if ($matches[1] == '30') {
            sub_visual('mps', '');
        }
    }
    ?>
<!-- } sub visual -->

<div class="wrapper">

<p class="prd-list-tit 
<?php if ($matches[1] == '1010') {
    echo 'prd-list-tit--1';
} else if ($matches[1] == '1020') {
    echo 'prd-list-tit--2';
} else if ($matches[1] == '1030') {
    echo 'prd-list-tit--3';
} else if ($matches[1] == '1040') {
    echo 'prd-list-tit--4';
}
?>">
<?php if ($matches[1] == '1010') {
    echo '1 Colour';
} else if ($matches[1] == '1020') {
    echo '2 Colour';
} else if ($matches[1] == '1030') {
    echo '3 Colour';
} else if ($matches[1] == '1040') {
    echo '4 Colour';
} else if ($matches[1] == '20') {
    echo 'CLEAR';
} else if ($matches[1] == '30') {
    echo 'MPS';
}
?>
</p>

<!-- 상품진열 10 시작 { -->
<?php
$i = 0;

$this->view_star = (method_exists($this, 'view_star')) ? $this->view_star : true;

foreach((array) $list as $row){
    if( empty($row) ) continue;

    $item_link_href = shop_item_url($row['it_id']);     // 상품링크
    $star_score = $row['it_use_avg'] ? (int) get_star($row['it_use_avg']) : '';     //사용자후기 평균별점
    $list_mod = $this->list_mod;    // 분류관리에서 1줄당 이미지 수 값 또는 파일에서 지정한 가로 수
    $is_soldout = is_soldout($row['it_id'], true);   // 품절인지 체크

    $classes = array();

    $classes[] = 'col-row-'.$list_mod;

    if( $i && ($i % $list_mod == 0) ){
        $classes[] = 'row-clear';
    }
    
    $i++;   // 변수 i 를 증가

    if ($i === 1) {
        if ($this->css) {
            echo "<ul class=\"{$this->css}\">\n";
        } else {
            echo "<ul class=\"sct sct_10 lists-row\">\n";
        }
    }
	
    echo "<li class=\"sct_li list-item-box ".implode(' ', $classes)."\" data-css=\"nocss\" style=\"height:auto\">\n";
	echo "<div class=\"sct_img list-item-img\">\n";

    if ($this->href) {
       // echo "<a href=\"{$item_link_href}\">\n";
    }

    if ($this->view_it_img) {
        echo get_it_image($row['it_id'], $this->img_width, $this->img_height, '', '', stripslashes($row['it_name']))."\n";
    }

    if ($this->href) {
       // echo "</a>\n";
    }
    
    if ($this->href) {
      // 마우스 오버시
        echo "<a href=\"{$item_link_href}\" class=\"mainsec3-item-hover list-item-hover\">
          <div class=\"list-item-hover-wr\">
            <span>MORE</span><img src=\"/source/img/icon-arrow_list_item.png\" alt=\"\">
          </div>
        </a>\n";
    }

    // 찜하면 on 클래스 추가
    echo "<button type=\"button\" class=\"list-item-wish btn_wish\" title=\"찜하기\" data-it_id=\"{$row['it_id']}\"></button>\n";
    
    //if ( !$is_soldout ){    // 품절 상태가 아니면 출력합니다.
       // echo "<div class=\"sct_btn list-10-btn\">
            //<button type=\"button\" class=\"btn_cart sct_cart\" data-it_id=\"{$row['it_id']}\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> 장바구니</button>\n";
        //echo "</div>\n";
	//}

	echo "<div class=\"cart-layer\"></div>\n";
	
	if ($this->view_it_icon) {
        // 품절
        if ($is_soldout) {
            echo '<span class="shop_icon_soldout"><span class="soldout_txt">SOLD OUT</span></span>';
        }
    }
    echo "</div>\n";
	
	echo "<div class=\"sct_ct_wrap list-item-info\">\n";
    
	// 사용후기 평점표시
	if ($this->view_star && $star_score) {
        echo "<div class=\"sct_star\"><span class=\"sound_only\">고객평점</span><img src=\"".G5_SHOP_URL."/img/s_star".$star_score.".png\" alt=\"별점 ".$star_score."점\" class=\"sit_star\"></div>\n";
    }
	
    if ($this->view_it_id) {
        echo "<div class=\"sct_id\">&lt;".stripslashes($row['it_id'])."&gt;</div>\n";
    }

    if ($this->href) {
        echo "<div class=\"list-item-txtwr\"><div class=\"list-item-name\"><a href=\"{$item_link_href}\">\n";
    }

    if ($this->view_it_name) {
        echo stripslashes($row['it_name'])."\n";
    }

    if ($this->href) {
        echo "</a></div>\n";
    }

    if ($this->view_it_basic && $row['it_basic']) {
      echo "<div class=\"list-item-txt\">".stripslashes($row['it_basic'])."</div>\n";
    }

    echo "</div>\n";

    echo "<div class=\"sct_bottom\">\n";

        if ($this->view_it_cust_price || $this->view_it_price) {

            echo "<div class=\"list-item-price\">\n";
            if ($this->view_it_price) {
                echo "<span>&#8361; ".display_price(get_price($row), $row['it_tel_inq'])."</span>\n";
            }
            if ($this->view_it_cust_price && $row['it_cust_price']) {
                //echo "<span class=\"sct_dict\">".display_price($row['it_cust_price'])."</span>\n";
            }
            echo "</div>\n";
        }
        
        // 위시리스트 + 공유 버튼 시작
        //echo "<div class=\"sct_op_btn\">\n";
        //echo "<button type=\"button\" class=\"btn_wish\" data-it_id=\"{$row['it_id']}\"><span class=\"sound_only\">위시리스트</span><i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i></button>\n";
        if ($this->view_sns) {
            //echo "<button type=\"button\" class=\"btn_share\"><span class=\"sound_only\">공유하기</span><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></button>\n";
        }
        
        //echo "<div class=\"sct_sns_wrap\">";
       // if ($this->view_sns) {
            //$sns_top = $this->img_height + 10;
            //$sns_url  = $item_link_href;
            //$sns_title = get_text($row['it_name']).' | '.get_text($config['cf_title']);
            //echo "<div class=\"sct_sns\">";
            //echo "<h3>SNS 공유</h3>";
            //echo get_sns_share_link('facebook', $sns_url, $sns_title, G5_SHOP_SKIN_URL.'/img/facebook.png');
            //echo get_sns_share_link('twitter', $sns_url, $sns_title, G5_SHOP_SKIN_URL.'/img/twitter.png');
            //echo "<button type=\"button\" class=\"sct_sns_cls\"><span class=\"sound_only\">닫기</span><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button>";
            //echo "</div>\n";
        //}
        //echo "<div class=\"sct_sns_bg\"></div>";
        //echo "</div></div>\n";
        // 위시리스트 + 공유 버튼 끝
	
    echo "</div>";

        if ($this->view_it_icon) {
            echo "<div class=\"sit_icon_li\">".item_icon($row)."</div>\n";
        }

	echo "</div>\n";
	
    echo "</li>\n";
}   //end foreach

if ($i >= 1) echo "</ul>\n";

if ($i === 0) echo "<p class=\"sct_noitem\">There is no registered product.</p>\n";
// if ($i === 0) echo "<p class=\"sct_noitem\">등록된 상품이 없습니다.hosu</p>\n";
?>
<!-- } 상품진열 10 끝 -->

</div>
</div>

<script>
//SNS 공유
$(function (){
	$(".btn_share").on("click", function() {
		$(this).parent("div").children(".sct_sns_wrap").show();
	});
    $('.sct_sns_bg, .sct_sns_cls').click(function(){
        $('.sct_sns_wrap').hide();
	});
});			
</script>