<div class="hompage_banner_container">
      <video autoplay muted loop id="myVideo">
        <source src="<?php echo get_template_directory_uri()?>/videos/Library - 846.mp4" type="video/mp4" />
      </video>
      <!-- content -->
      <div class="hompage_banner_content">
        <div
          id="carouselExampleFade"
          class="carousel slide carousel-fade hompage_banner_content_carousel"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
              <div class="d-block w-100">
                <div class="hompage_banner_carousel_title">
                  Dẫn đầu xu hướng, nắm bắt tương lai
                </div>
                <div class="hompage_banner_carousel_subtitle">
                  Giúp doanh nghiệp của bạn phát triển bằng công nghệ
                  <b>AI</b> và
                  <b>Big Data</b>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <div class="d-block w-100">
                <div class="hompage_banner_carousel_title">
                  Dẫn đầu xu hướng, nắm bắt tương lai2
                </div>
                <div class="hompage_banner_carousel_subtitle">
                  Giúp doanh nghiệp của bạn phát triển bằng công nghệ
                  <b>AI</b> và <b>Big Data</b>2
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hompage_banner_button">
          <b class="hompage_banner_button_title">KHÁM PHÁ NGAY</b>
          <img
            class="hompage_banner_button_icon"
            src="<?php echo get_template_directory_uri()?>/images/home/poiter.svg"
            alt=""
          />
        </div>
        <div class="hompage_banner_logo">
          <div class="hompage_banner_logo_left">
            <div class="number">+50</div>
            <div class="title">
              ĐỐI TÁC <br />
              TIN TƯỞNG
            </div>
          </div>
          <div class="justify-content-center hompage_banner_logo_right">
            <div
              id="recipeCarousel"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <div>
                    <img src="<?php echo get_template_directory_uri()?>/images/home/google.svg" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div>
                  <img src="<?php echo get_template_directory_uri()?>/images/home/microsoft.svg" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div>
                  <img src="<?php echo get_template_directory_uri()?>/images/home/google.svg" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div>
                  <img src="<?php echo get_template_directory_uri()?>/images/home/microsoft.svg" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div>
                  <img src="<?php echo get_template_directory_uri()?>/images/home/google.svg" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div>
                  <img src="<?php echo get_template_directory_uri()?>/images/home/google.svg" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel_cover"></div>
          </div>
        </div>
      </div>
    </div>
    <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: "Barlow", sans-serif;
    }

    .hompage_banner_container {
      width: 100vw;
      height: 100vh;
      background-color: white;
      /* background-image: url("https://png.pngtree.com/thumb_back/fw800/back_our/20190628/ourmid/pngtree-6-beautiful-background-photos-image_263872.jpg");
      background-size: cover; */
    }
    #myVideo {
      position: absolute;
      right: 0;
      height: 100%;
      z-index: -1;
    }
    
    .hompage_banner_content {
      height: 100vh;
      padding-left: 5.26%;
      padding-top: 231px;
    }

    .hompage_banner_content_carousel {
      width: 847px;
    }
    .hompage_banner_carousel_title {
      font-size: 110px;
      line-height: 110px;
      font-weight: bold;
      letter-spacing: -0.01em;
      margin: 40px 0;
    }
    .hompage_banner_carousel_subtitle {
      font-weight: 500;
      font-size: 40px;
      line-height: 50px;
      margin-top: 40px;
      font-weight: 300;
      letter-spacing: -0.01em;
    }
    .hompage_banner_button {
      width: 274px;
      height: 60px;
      border-radius: 5px;
      margin-top: 90px;

      background-color: #f8d000;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .hompage_banner_button_title {
      font-weight: 700px;
      font-size: 24px;
    }
    .hompage_banner_button_icon {
      margin-left: 10px;
    }
    .hompage_banner_logo {
      margin-top: 148px;
      display: flex;
      align-items: center;
    }
    .hompage_banner_logo_left {
      width: 105px;
    }
    .hompage_banner_logo_left .number {
      font-size: 64px;
      font-weight: 700;
      line-height: 77px;
    }
    .hompage_banner_logo_left .title {
      font-size: 14px;
      font-weight: bold;
      line-height: 17px;
      text-align: right;
      letter-spacing: -0.01em;
    }

    .hompage_banner_logo_right {
      width: 650px;
      margin-left: 45px;
      position: relative;
    }

    .hompage_banner_logo .carousel-inner .carousel-item > div {
      height: 50px;
      width: 20%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    @media (max-width: 767px) {
      .hompage_banner_logo .carousel-inner .carousel-item > div {
        display: none;
      }
      .hompage_banner_logo .carousel-inner .carousel-item > div:first-child {
        display: block;
      }
    }

    .hompage_banner_logo .carousel-inner .carousel-item.active,
    .hompage_banner_logo .carousel-inner .carousel-item-next,
    .hompage_banner_logo .carousel-inner .carousel-item-prev {
      display: flex;
    }

    /* medium and up screens */
    @media (min-width: 768px) {
      .hompage_banner_logo .carousel-inner .carousel-item-end.active,
      .hompage_banner_logo .carousel-inner .carousel-item-next {
        transform: translateX(20%);
      }

      .hompage_banner_logo .carousel-inner .carousel-item-start.active,
      .hompage_banner_logo .carousel-inner .carousel-item-prev {
        transform: translateX(-20%);
      }
    }

    .hompage_banner_logo .carousel-inner .carousel-item-end,
    .hompage_banner_logo .carousel-inner .carousel-item-start {
      transform: translateX(0);
    }
    .carousel_cover {
      position: absolute;
      top: 0;
      right: 0;
      height: 50px;
      width: 460px;
      /* background-color: #f8d000; */
      background: linear-gradient(
        270deg,
        #ffffff 0%,
        rgba(255, 255, 255, 0) 96.83%
      );
    }
  </style>
<script>
      let items = document.querySelectorAll(
        ".hompage_banner_logo .carousel .carousel-item"
      );

      items.forEach((el) => {
        const minPerSlide = 5;
        let next = el.nextElementSibling;
        for (var i = 1; i < minPerSlide; i++) {
          if (!next) {
            // wrap carousel by using first child
            next = items[0];
          }
          let cloneChild = next.cloneNode(true);
          el.appendChild(cloneChild.children[0]);
          next = next.nextElementSibling;
        }
      });
    </script>