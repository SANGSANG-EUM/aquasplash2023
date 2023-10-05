  /**
   * [공통] 모바일 브라우저 100vh 해결
   */
  const mobileHeight = () => {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    window.addEventListener('resize', () => {
      let vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty('--vh', `${vh}px`);
    });
  }

  // [plugin-Swiper] main visual
  const mainVisualTimebar = (state) => {
    if (state == 'init') {
      $(".mainvs-progress-inner").stop().css({
        "width": "0"
      });
    } else if (state == 'ing') {
      $(".mainvs-progress-inner").stop().animate({
        width: "100%"
      }, 5000);
    } else {
      $("mainvs-progress-inner").stop().css({
        "width": "0"
      });
    }
  }

  /**
   * [메인] 메인 비주얼 슬라이드
   */
  const mainVisualSlide = () => {
    let mvSwiper = new Swiper('.mainvs-slider', {
      slidesPerView: 1, // 한 슬라이드에 보여줄 갯수
      loop: true, // 슬라이드 반복 여부
      loopAdditionalSlides: 1,
      effect: 'fade', // 페이드 효과 사용
      autoplay: { //자동슬라이드 (false-비활성화)
        delay: 5000, // 시간 설정
        disableOnInteraction: false, // false-스와이프 후 자동 재생
      },
      pagination: {
        el: ".mainvs-ctr-wr .swiper-pagination",
        type: "custom", // custom pagination 사용
        renderCustom: function (swiper, current, total) {
          // current와 total은 현재 슬라이드와 전체 슬라이드 수입니다.

          // 현재 슬라이드와 전체 슬라이드 수를 문자열로 변환합니다.
          const currentStr = String(current);
          const totalStr = String(total);

          // 만약 현재 슬라이드 번호가 10 미만이면 숫자 앞에 0을 붙입니다.
          const currentDisplay = current < 10 ? `0${currentStr}` : currentStr;
          const totalDisplay = total < 10 ? `0${totalStr}` : totalStr;

          // pagination을 업데이트합니다.
          document.querySelector(".mainvs-pg.current").textContent = currentDisplay;
          document.querySelector(".mainvs-pg.total").textContent = totalDisplay;
        },
      },
      on: {
        init: function () {
          mainVisualTimebar('ing')
        },
        slideChangeTransitionEnd: function () {
          mainVisualTimebar('init')
          mainVisualTimebar('ing')
        },
      },
    });

    let mainVisualStopBtn = $(".mainvs-btn");

    mainVisualStopBtn.on("click", function () {
      if ($(this).hasClass('pause')) {
        $(this).removeClass('pause');
        mainVisualTimebar('ing');
        mvSwiper.autoplay.start();
        $(this).find('img').attr('src', '/source/img/icon-pause_white.png');
      } else {
        $(this).addClass('pause');
        mainVisualTimebar('init')
        mvSwiper.autoplay.stop();
        $(this).find('img').attr('src', '/source/img/icon-play_white.png');
      }
    });
  }


  // 메인 섹션 마우스휠 이벤트
  const mainWheel = () => {
    var win_h = $(window).height();

    $('.mainsec1').on("mousewheel", function (e) {
      if (e.originalEvent.wheelDelta >= 0) {
        $("html, body").stop().animate({
          scrollTop: -win_h
        }, 1000);
        return false;
      } else if (e.originalEvent.wheelDelta < 0) {
        $("html, body").stop().animate({
          scrollTop: +win_h
        }, 1000);
        return false;
      }
    });
  }

  // 메인 섹션2 컬러렌즈 버튼
  const mainCardBtn = () => {
    $('.mainsec2-li-btn').on('click', function () {
      $('.mainsec2-li').removeClass('on');
      $(this).parents('.mainsec2-li').addClass('on');
    });
  }

  // 메인 섹션2 렌즈 상품 슬라이드 및 카테고리
  const mainPrdSlider = () => {

    var mpSwiper = new Swiper(".mainsec3-slider", {
      slidesPerView: 5,
      grid: {
        rows: 2,
      },
      observer: true,
      observeParents: true,
      // loop: true,
      slidesPerColumnFill: 'row',
      spaceBetween: 30,
      navigation: {
        nextEl: ".mainsec3-btn.next",
        prevEl: ".mainsec3-btn.prev",
      },
    });

    $('.mainsec3-cate-li button').on('click', function () {

      let mainCateLi = $(this).closest('.mainsec3-cate-li');
      let mainCateLink = mainCateLi.attr('data-link');

      $('.mainsec3-cate-li').removeClass('on')
      mainCateLi.addClass('on');

      $('.mainsec3-slider').removeClass('on');
      $('#' + mainCateLink).addClass('on');

      // mpSwiper 배열의 각 요소에 대해 slideTo(0) 호출
      mpSwiper.forEach(function (swiper) {
        swiper.slideTo(0);
      });
    });

  }


  // document ready
  $(document).ready(function () {
    mobileHeight();
    mainVisualSlide();
    mainWheel();
    mainCardBtn();
    mainPrdSlider();
  }); // document ready end