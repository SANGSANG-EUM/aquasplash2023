<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div class="container">
  <div class="contents main">
    <!-- Main Visual { -->
    <div class="mainsec mainsec1">
      <div class="mainvs-slider">
        <div class="swiper-wrapper">

          <div class="swiper-slide mainvs-slide">
            <img src="/source/img/mainvs1.jpg" alt="">
            <div class="wrapper">
              <div class="mainvs-txt-wr">
                <p class="mainvs-tit">
                <?php if ($lang == "") { //(기본)영문
                    echo "BEYOND THE MOIST";
                } else if ($lang == "ko") { //국문
                    echo "";
                }?>
                </p>
                <p class="mainvs-txt mainvs-txt1">
                <?php if ($lang == "") { //(기본)영문
                    echo "Make your lifecomfortable and colorful";
                } else if ($lang == "ko") { //국문
                    echo "";
                }?>
                </p>
                <p class="mainvs-txt mainvs-txt2">
                <?php if ($lang == "") { //(기본)영문
                    echo "AQUASPLASH is the premium brand of contact lenses with exceptional
                    quality andreasonal price for your patients’ ocular health. <br> AQUASPLASH has the full product lines
                    to correct your vision and change your eye colorfor your comfortable and colorful life.";
                } else if ($lang == "ko") { //국문
                    echo "";
                }?>
                </p>
              </div>
            </div>
          </div>


          <div class="swiper-slide mainvs-slide">
            <img src="/source/img/mainvs2.jpg" alt="">
            <div class="wrapper">
            <div class="mainvs-txt-wr">
                <p class="mainvs-tit">
                <?php if ($lang == "") { //(기본)영문
                    echo "BEYOND THE MOIST";
                } else if ($lang == "ko") { //국문
                    echo "";
                }?>
                </p>
                <p class="mainvs-txt mainvs-txt1">
                <?php if ($lang == "") { //(기본)영문
                    echo "Make your lifecomfortable and colorful";
                } else if ($lang == "ko") { //국문
                    echo "";
                }?>
                </p>
                <p class="mainvs-txt mainvs-txt2">
                <?php if ($lang == "") { //(기본)영문
                    echo "AQUASPLASH is the premium brand of contact lenses with exceptional
                    quality andreasonal price for your patients’ ocular health. <br> AQUASPLASH has the full product lines
                    to correct your vision and change your eye colorfor your comfortable and colorful life.";
                } else if ($lang == "ko") { //국문
                    echo "";
                }?>
                </p>
              </div>
            </div>
          </div>

        </div>
        <div class="mainvs-ctr-wr">
          <div class="mainvs-pg-wr swiper-pagination">
            <span class="mainvs-pg current swiper-pagination-current"></span>
            <span>/</span>
            <span class="mainvs-pg total swiper-pagination-total"></span>
          </div>
          <div class="mainvs-progress-bar">
            <div class="mainvs-progress-inner"></div>
          </div>
          <button type="button" class="mainvs-btn pause">
            <img src="/source/img/icon-pause_white.png" alt="슬라이드 멈춤">
          </button>
        </div>
      </div>
    </div>
    <!-- } Main Visual -->
    <!-- Colour Lenses { -->
    <div class="mainsec mainsec2">
      <div class="wrapper">
        <div class="mainsec-tit-wr">
          <p class="mainsec-tit">Colour Lenses</p>
        </div>
        <div class="mainsec2-box">
          <ul class="mainsec2-ul">
            <li class="mainsec2-li mainsec2-li--1 on">
              <button type="button" class="mainsec2-li-btn">
                <div class="mainsec2-img-wr">
                  <div class="mainsec2-face-img">
                    <img src="/source/img/img-mainsec2_1.jpg" alt="">
                  </div>
                  <div class="mainsec2-prd-img">
                    <img src="/source/img/img-mainsec2_prd1.png" alt="">
                  </div>
                </div>
              </button>
              <div class="mainsec2-info-wr">
                <p class="mainsec2-info-tit main-info-tit">1 Colour</p>
                <p class="mainsec2-info-txt main-info-txt">
                <?php if ($lang == "") { //(기본)영문
                  echo "Simply have your new and natural eye colors. AQUASPLASH 1 COLOUR makes your eye color new with new and bold colors.";
                } else if ($lang == "ko") { //국문
                  echo "";
                }?>
                </p>
                <a href="/shop/list-1010" class="main-link">
                <span>
                <?php if ($lang == "") { //(기본)영문
                  echo "Learn More";
                } else if ($lang == "ko") { //국문
                  echo "더보기";
                }?>
                </span>
                <span>+</span></a>
              </div>
            </li>
            <li class="mainsec2-li mainsec2-li--2">
              <button type="button" class="mainsec2-li-btn">
                <div class="mainsec2-img-wr">
                  <div class="mainsec2-face-img">
                    <img src="/source/img/img-mainsec2_2.jpg" alt="">
                  </div>
                  <div class="mainsec2-prd-img">
                    <img src="/source/img/img-mainsec2_prd2.png" alt="">
                  </div>
                </div>
              </button>
              <div class="mainsec2-info-wr">
                <p class="mainsec2-info-tit main-info-tit">2 Colour</p>
                <p class="mainsec2-info-txt main-info-txt">
                <?php if ($lang == "") { //(기본)영문
                    echo "Upgrade your lovely and charming eyes with AQUASPLASH 2 COLOUR. Enhance your natural eye color with AQUASPLASH 2 COLOUR.";
                } else if ($lang == "ko") { //국문
                    echo "";
                }?>
                </p>
                <a href="/shop/list-1020" class="main-link"><span>
                <?php if ($lang == "") { //(기본)영문
                  echo "Learn More";
                } else if ($lang == "ko") { //국문
                  echo "더보기";
                }?>
                </span><span>+</span></a>
              </div>
            </li>
            <li class="mainsec2-li mainsec2-li--3">
              <button type="button" class="mainsec2-li-btn">
                <div class="mainsec2-img-wr">
                  <div class="mainsec2-face-img">
                    <img src="/source/img/img-mainsec2_3.jpg" alt="">
                  </div>
                  <div class="mainsec2-prd-img">
                    <img src="/source/img/img-mainsec2_prd3.png" alt="">
                  </div>
                </div>
              </button>
              <div class="mainsec2-info-wr">
                <p class="mainsec2-info-tit main-info-tit">3 Colour</p>
                <p class="mainsec2-info-txt main-info-txt">
                  <?php if ($lang == "") { //(기본)영문
                    echo "Experience the romantic and glamorous beauty. AQUASPLASH 3 COLOUR makes your eyes look more profound and luxurious with a naturally touched pupil design and glamorous colors.";
                  } else if ($lang == "ko") { //국문
                    echo "";
                  }?>
                </p>
                <a href="/shop/list-1030" class="main-link"><span>
                <?php if ($lang == "") { //(기본)영문
                  echo "Learn More";
                } else if ($lang == "ko") { //국문
                  echo "더보기";
                }?>
                </span><span>+</span></a>
              </div>
            </li>
            <li class="mainsec2-li mainsec2-li--4">
              <button type="button" class="mainsec2-li-btn">
                <div class="mainsec2-img-wr">
                  <div class="mainsec2-face-img">
                    <img src="/source/img/img-mainsec2_4.jpg" alt="">
                  </div>
                  <div class="mainsec2-prd-img">
                    <img src="/source/img/img-mainsec2_prd4.png" alt="">
                  </div>
                </div>
              </button>
              <div class="mainsec2-info-wr">
                <p class="mainsec2-info-tit main-info-tit">4 Colour</p>
                <p class="mainsec2-info-txt main-info-txt">
                <?php if ($lang == "") { //(기본)영문
                  echo "Create romantic eyes for the perfection of your beauty. AQUASPLASH 4 COLOUR makes your eyes romantic and elegant with sophiscated and natural pupil colors.";
                } else if ($lang == "ko") { //국문
                  echo "";
                }?>
                </p>
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
    <!-- } Colour Lenses -->
    <!-- Colour Option { -->
    <div class="mainsec mainsec3">
      <div class="wrapper">
        <div class="mainsec-tit-wr">
          <p class="mainsec-tit">Colour Option</p>
        </div>
        <div class="mainsec3-box">
          <div class="mainsec3-top">
            <!-- <ul class="mainsec3-cate-ul">
              <li class="mainsec3-cate-li on" data-link="colorAll">
                <button type="button">All Colour</button>
              </li>
              <li class="mainsec3-cate-li" data-link="color1">
                <button type="button">1 Colour</button>
              </li>
              <li class="mainsec3-cate-li" data-link="color2">
                <button type="button">2 Colour</button>
              </li>
              <li class="mainsec3-cate-li" data-link="color3">
                <button type="button">3 Colour</button>
              </li>
              <li class="mainsec3-cate-li" data-link="color4">
                <button type="button">4 Colour</button>
              </li>
            </ul> -->
            <ul class="mainsec3-cate-ul">
            </ul>
            <div class="mainsec3-btn-wr">
              <button type="button" class="mainsec3-btn prev">
                <img src="/source/img/icon-arrow_mainsec3_prev.png" alt="">
                <span>Prev</span>
              </button>
              <button type="button" class="mainsec3-btn next">
                <span>Next</span>
                <img src="/source/img/icon-arrow_mainsec3_next.png" alt="">
              </button>
            </div>
          </div>

          <div class="mainsec3-slider">
            <div class="swiper-wrapper">

              <!-- All Colour { -->
              <div class="mainsec3-slide swiper-slide">
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--1">
                      1 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                
              </div>
              <!-- } All Colour -->

              <!-- 1 Colour { -->
              <div class="mainsec3-slide swiper-slide">
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--1">
                      1 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--1">
                      1 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--1">
                      1 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--1">
                      1 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--1">
                      1 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--1">
                      1 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--1">
                      1 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--1">
                      1 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--1">
                      1 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--1">
                      1 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
              </div>
              <!-- } 1 Colour -->

              <!-- 2 Colour { -->
              <div class="mainsec3-slide swiper-slide">
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--2">
                      2 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--2">
                      2 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--2">
                      2 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--2">
                      2 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--2">
                      2 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--2">
                      2 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--2">
                      2 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--2">
                      2 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--2">
                      2 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--2">
                      2 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
              </div>
              <!-- } 2 Colour -->

              <!-- 3 Colour { -->
              <div class="mainsec3-slide swiper-slide">
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--3">
                      3 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--3">
                      3 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--3">
                      3 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--3">
                      3 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--3">
                      3 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--3">
                      3 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--3">
                      3 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--3">
                      3 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--3">
                      3 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--3">
                      3 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
              </div>
              <!-- } 3 Colour -->

              <!-- 3 Colour { -->
              <div class="mainsec3-slide swiper-slide">
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--4">
                      4 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--4">
                      4 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--4">
                      4 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--4">
                      4 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--4">
                      4 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--4">
                      4 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--4">
                      4 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--4">
                      4 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--4">
                      4 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
                <div class="list-item-box">
                  <div class="mainsec3-item-img list-item-img">
                    <img src="/source/img/sample-thumb.png" alt="">
                    <!-- 마우스 오버시 { -->
                    <a href="" class="mainsec3-item-hover list-item-hover">
                      <div class="list-item-hover-wr">
                        <span>MORE</span><img src="/source/img/icon-arrow_list_item.png" alt="">
                      </div>
                    </a>
                    <!-- } 마우스 오버시 -->
                    <!-- 찜하면 on 클래스 추가 -->
                    <a href="" class="list-item-wish on" title="찜하기"></a>
                    <!-- 컬러 카테고리에 따라 클래스 숫자 바뀜 : item-color--1 -->
                    <div class="mainsec3-item-color list-item-color item-color--4">
                      4 Colour
                    </div>
                  </div>
                  <a href="" class="mainsec3-item-info list-item-info">
                    <div class="mainsec3-item-txtwr list-item-txtwr">
                      <div class="mainsec3-item-name list-item-name">PURE HAZEL</div>
                      <div class="mainsec3-item-txt list-item-txt"> Product Info Product Info Product Info Product Info
                      </div>
                    </div>
                    <div class="mainsec3-item-price list-item-price">
                      <span>&#8361;30,000</span>
                    </div>
                  </a>
                </div>
              </div>
              <!-- } 3 Colour -->
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- } Colour Option -->
    <!-- The Others { -->
    <div class="mainsec mainsec4">
      <div class="wrapper">
        <div class="mainsec4-box">
          <ul class="mainsec4-ul">
            <li class="mainsec4-li mainsec4-imgwr">
              <div class="mainsec4-face-img">
                <img src="/source/img/img-mainsec4_1.jpg" alt="">
              </div>
              <div class="mainsec4-prd-img">
                <img src="/source/img/img-mainsec4_prd1.png" alt="">
              </div>
            </li>
            <li class="mainsec4-li mainsec4-txtwr">
              <p class="mainsec4-info-tit main-info-tit">Clear Lenses</p>
              <p class="mainsec4-info-txt main-info-txt">
              <?php if ($lang == "") { //(기본)영문
                    echo "AQUASPLASH 1-DAY SPHERE BENEFITSWORLD BEST SELLING HYDROGEL
                    MATERIAL, ETAFICON A WITH 55% WATER. HA(HYALURONICA ACIDE), THE BEST MOSITURIZING AGENT. ASPHERIC LENS
                    DESIGN FOR SUPERB VISION CORRECTION(HIGN DEFINITION). UV A&B PROTECTION.";
                } else if ($lang == "ko") { //국문
                    echo "";
                }?>
              </p>
              <a href="/shop/list-20" class="main-link"><span>
                <?php if ($lang == "") { //(기본)영문
                  echo "Learn More";
                } else if ($lang == "ko") { //국문
                  echo "더보기";
                }?>
                </span><span>+</span></a>
            </li>
          </ul>
          <ul class="mainsec4-ul">
            <li class="mainsec4-li mainsec4-imgwr">
              <div class="mainsec4-face-img">
                <img src="/source/img/img-mainsec4_2.jpg" alt="">
              </div>
              <div class="mainsec4-prd-img">
                <img src="/source/img/img-mainsec4_prd2.png" alt="">
              </div>
            </li>
            <li class="mainsec4-li mainsec4-txtwr">
              <p class="mainsec4-info-tit main-info-tit">MPS</p>
              <p class="mainsec4-info-txt main-info-txt">
              <?php if ($lang == "") { //(기본)영문
                    echo "MULTIPURPOSE CONTACT LENS CARE SOLUTION WITH SODIUM HYALURONATE
                    AQUASPLASH REFRESH MULTI-PURPOSE SOLUTION HELPS TO CLEAN, RINSE, DISINFECT, REMOVE IRRITATING PROTEIN
                    DEPOSITS AND REMOVE PROTEIN DAILY FROM YOUR SOFT CONTACT LENSES (HYDROGELS, SILICONE HYDROGELS AND RGP)
                    FOR YOUR FRESH LENS FEELING EVERY DAY.";
                } else if ($lang == "ko") { //국문
                    echo "";
                }?>
              </p>
              <a href="/shop/1696577552" class="main-link"><span>
                <?php if ($lang == "") { //(기본)영문
                  echo "Learn More";
                } else if ($lang == "ko") { //국문
                  echo "더보기";
                }?>
                </span><span>+</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- } The Others -->
  </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');