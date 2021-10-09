<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<section class="section">
  <div class="container">
    <div class="home_containerServices">
      <small class="home_titleServices">DỊCH VỤ</small>
      <h1 class="home_underTitleServices"> Dịch vụ của chúng tôi </h1>
      <p class="home_contentOfTitleServices">Tekup cam kết mang lại dịch vụ tốt nhất nhằm giúp doanh nghiệp của bạn
        phát
        triển thần tốc</p>
      <div class="containerTab">
        <div class="tab">
          <div class="row tablinks" onclick="openCity(event, 'London')" id="defaultOpen">
            <div class="col-md-3 home_containerImagesTabs">
              <img class="home_imageTabs"
                src="<?php echo get_template_directory_uri() . '/images/home/fingerprint.png'; ?>" />
            </div>
            <p class="col-md-9 home_containerTitleTabs">
              <a class="home_titleTabs">Trí tuệ nhân tạo & Tầm nhìn máy tính
              </a>
            </p>
          </div>
          <div class="row tablinks" onclick="openCity(event, 'Paris')">
            <div class="col-md-3 home_containerImagesTabs">
              <img class="home_imageTabs"
                src="<?php echo get_template_directory_uri() . '/images/home/fingerprint.png'; ?>" />
            </div>
            <p class="col-md-9 home_containerTitleTabs">
              <a class="home_titleTabs">Phát triển ứng dụng di động và web
              </a>
            </p>
          </div>
          <div class="row tablinks" onclick="openCity(event, 'Tokyo')">
            <div class="col-md-3 home_containerImagesTabs">
              <img class="home_imageTabs"
                src="<?php echo get_template_directory_uri() . '/images/home/fingerprint.png'; ?>" />
            </div>
            <p class="col-md-9 home_containerTitleTabs">
              <a class="home_titleTabs">Tư vấn quản lý
              </a>
            </p>
          </div>
        </div>

        <div id="London" class="tabcontent">
          <div class="home_tabs">
            <img class="home_imageTabs"
              src="<?php echo get_template_directory_uri() . '/images/home/Rectangle.png'; ?>" />
            <div class="text-block">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem provident architecto eligendi
                excepturi, laudantium, quibusdam nesciunt cupiditate omnis quisquam nihil cum quis explicabo quam
                nulla, odio eum laborum cumque repudiandae.</p>
              <div class="frame">
                <button class="custom-btn btn-1"> <a class="home_textBTN" style="color: black;">TÌM HIỂU THÊM</a>
                  <img class="" src="<?php echo get_template_directory_uri() . '/images/home/Vector.png'; ?>">
                </button>
              </div>
            </div>
          </div>
        </div>

        <div id="Paris" class="tabcontent">
          <div class="home_tabs">
            <img class="home_imageTabs"
              src="<?php echo get_template_directory_uri() . '/images/home/Rectangle.png'; ?>" />
            <div class="text-block">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem provident architecto eligendi
                excepturi, laudantium, quibusdam nesciunt cupiditate omnis quisquam nihil cum quis explicabo quam
                nulla, odio eum laborum cumque repudiandae.</p>
              <div class="frame">
                <button class="custom-btn btn-1"> <a class="home_textBTN" style="color: black;">TÌM HIỂU THÊM</a>
                  <img class="" src="<?php echo get_template_directory_uri() . '/images/home/Vector.png'; ?>">
                </button>
              </div>
            </div>
          </div>
        </div>

        <div id="Tokyo" class="tabcontent">
          <div class="home_tabs">
            <img class="home_imageTabs"
              src="<?php echo get_template_directory_uri() . '/images/home/Rectangle.png'; ?>" />
            <div class="text-block">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem provident architecto eligendi
                excepturi, laudantium, quibusdam nesciunt cupiditate omnis quisquam nihil cum quis explicabo quam
                nulla, odio eum laborum cumque repudiandae.</p>
              <div class="frame">
                <button class="custom-btn btn-1"> <a class="home_textBTN" style="color: black;">TÌM HIỂU THÊM</a> <img
                    class="" src="<?php echo get_template_directory_uri() . '/images/home/Vector.png'; ?>">
                </button>
              </div>
            </div>
          </div>

        </div>
        <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>
      </div>
    </div>
  </div>
  <!--  -->
  <div class="container-fluid">
    <div class="videoServices ">
      <video class="videoo" autoplay loop muted>
        <source width="1820" src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
      </video>
      <!-- <video autoplay loop muted>
        <source class="videoo" src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
      </video> -->
    </div>
    <div class="container bbb">
      <div class="row counter_homeServices">
        <div class="col-md-3 counter-boxImProducts">
          <!-- <div class="counter-boxImProducts"> -->
          <span class="counter counterNumImProducts">100</span>
          <p class="titleCounterNumImProducts">Impactful Products</p>
          <!-- </div> -->
        </div>
        <div class="col-md-3 counter-boxSucceProjects">
          <!-- <div class="counter-boxSucceProjects"> -->
          <span class="counter counterSucceProjects">450</span><i class="fa fa-plus" aria-hidden="true"></i>
          <p class="titleCounterSucceProjects">Successful Projects
          </p>
          <!-- </div> -->
        </div>
        <div class="col-md-3 counter-boxHaClients">
          <!-- <div class="counter-boxHaClients"> -->
          <span class="counter counterHaClients">50</span><i class="fa fa-plus iconPlus" aria-hidden="true"></i>
          <p class="titleCounterHaClients">Happy Clients
          </p>
          <!-- </div> -->
        </div>
        <div class="col-md-3 counter-boxComAwards">
          <!-- <div class="counter-boxComAwards"> -->
          <span class="counter counterComAwards">80
          </span> <i class="fa fa-plus" aria-hidden="true"></i>
          <p class="titleCounterComAwards">Company Awards
          </p>
          <!-- </div> -->
        </div>
      </div>
      <script>
      $(document).ready(function() {
        $('.counter').each(function() {
          $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
          }, {
            duration: 4000,
            easing: 'swing',
            step: function(now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
      });
      </script>
      <div class="containerTitleProject">
        <h6 class="titleProject">DỰ ÁN NỔI BẬT</h6>
        <h1 class="contentProject">Chúng tôi coi trọng mối quan hệ làm việc lâu dài</h1>
      </div>
    </div>
  </div>

</section>
