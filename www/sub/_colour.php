<?php 
include_once(EUM_INCLUDE_PATH.'/sub_top.php');
?>

<div class="container">
  <div class="contents sub category">
    <div class="prd-cate-wr">
      <ul class="prd-cate-ul">
        <li class="prd-cate-li">
          <div class="prd-cate-bg">
            <img src="/source/img/img-color_bg1.jpg" alt="">
          </div>
          <div class="prd-cate-hover">
            <div class="prd-cate-circle"></div>
            <div class="prd-cate-item">
              <img src="/source/img/img-mainsec2_prd1.png" alt="">
            </div>
          </div>
          <div class="prd-cate-info">
            <div class="prd-cate-txt">1 Colour</div>
            <a href="/shop/list-1010" class="main-link"><span>
                <?php if ($lang == "") { //(기본)영문
                  echo "Learn More";
                } else if ($lang == "ko") { //국문
                  echo "더보기";
                }?>
                </span><span>+</span></a>
          </div>
        </li>
        <li class="prd-cate-li">
          <div class="prd-cate-bg">
            <img src="/source/img/img-color_bg2.jpg" alt="">
          </div>
          <div class="prd-cate-hover">
            <div class="prd-cate-circle"></div>
            <div class="prd-cate-item">
              <img src="/source/img/img-mainsec2_prd2.png" alt="">
            </div>
          </div>
          <div class="prd-cate-info">
            <div class="prd-cate-txt">2 Colour</div>
            <a href="/shop/list-1020" class="main-link"><span>
                <?php if ($lang == "") { //(기본)영문
                  echo "Learn More";
                } else if ($lang == "ko") { //국문
                  echo "더보기";
                }?>
                </span><span>+</span></a>
          </div>
        </li>
        <li class="prd-cate-li">
          <div class="prd-cate-bg">
            <img src="/source/img/img-color_bg3.jpg" alt="">
          </div>
          <div class="prd-cate-hover">
            <div class="prd-cate-circle"></div>
            <div class="prd-cate-item">
              <img src="/source/img/img-mainsec2_prd3.png" alt="">
            </div>
          </div>
          <div class="prd-cate-info">
            <div class="prd-cate-txt">3 Colour</div>
            <a href="/shop/list-1030" class="main-link"><span>
                <?php if ($lang == "") { //(기본)영문
                  echo "Learn More";
                } else if ($lang == "ko") { //국문
                  echo "더보기";
                }?>
                </span><span>+</span></a>
          </div>
        </li>
        <li class="prd-cate-li">
          <div class="prd-cate-bg">
            <img src="/source/img/img-color_bg4.jpg" alt="">
          </div>
          <div class="prd-cate-hover">
            <div class="prd-cate-circle"></div>
            <div class="prd-cate-item">
              <img src="/source/img/img-mainsec2_prd4.png" alt="">
            </div>
          </div>
          <div class="prd-cate-info">
            <div class="prd-cate-txt">4 Colour</div>
            <a href="/shop/list-1040" class="main-link"><span>
                <?php if ($lang == "") { //(기본)영문
                  echo "Learn More";
                } else if ($lang == "ko") { //국문
                  echo "더보기";
                }?>
                </span><span>+</span></a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    $('.depth1-li').eq(0).addClass('on');
  });
</script>