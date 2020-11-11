<?php include 'include/DBconnection.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Smeg Libya
    </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link rel="stylesheet" type="text/css" href="css/loader.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">  <!--font's here-->
    <link rel="shortcut icon" href="logo/faviconsmeg.png">
    <!-- animation on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  </head>
  <body>
    <!--Loader-->
    <div class="loader">
      <div class="spinner-load">
        <div class="dot1">
        </div>
        <div class="dot2">
        </div>
      </div>
    </div>

    
    <!-- header start-->
    <?php include('include/heading.php');?>
    <!-- header end -->


    <!-- bootstrap slider M.Yousef-->
    <div id="myCarousel" class="carousel slide carousel-fade rtl" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/slider.jpg">
          
        </div>
    
        <div class="item">
          <img src="images/slider.jpg">
        </div>
    
        <div class="item">
          <img src="images/slider.jpg">
        </div>
      </div>
    </div>
    <!-- end boostrap -->
    
    <!--Three Box Products-->
    <section id="grid_box">
      <div class="container-fluid blacksection" > <!--M.yousef changed container to container-fluid to get a fitscreen-->
        <div class="row">
          <div class="col-md-6">
            <a class="grid_box clearfix" href="grid2.php">
              <div class="grid_body">
                <h2 class="productsHeader">
                  منتجات صغيرة
                </h2>
                <div class="insideGridBox">
                  <img src="images/small_main.png" alt="Product" width="500">
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6">
            <a class="grid_box clearfix" href="grid.php">
              <div class="grid_body">
                <h2 class="productsHeader"> 
                  منتجات رئيسية
                </h2>
                <div class="insideGridBox">
                  <img src="images/major_main.png" alt="Product" width="500">
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    
  
  <!-- Video section -->
  <section>

    <div class="container-fluid videoContParent">
      <div class="row" >
          <div class="col-md-8 smegVideoContainer">
            <iframe class="smegVideo" src="https://www.youtube.com/embed/GIdOlKh16Rc"> <!--?autoplay=1&mute=1 for autoplaying-->
            </iframe>
          </div>
          <div class="col-md-4 videoSubText">
            <h4 class="videoHeader">
            طحن مثالي لجميع الأذواق
            </h4>
            <h6 class="videoDesc">
              مطحنة القهوة CGF01 هي الأداة المثالية لطحن عالي الجودة ، دون التضحية بالعملية والأناقة.
            </h6>
            <a href="products.php?category=coffee-machines" class="prodLink">
              مشاهدة المنتجات
            </a>
          </div>
          
      </div>
    </div>
  </section>
  <!-- video section end -->

  <!-- fridges demo -->
  <section>

<div class="container videoContParent fridgeDemoHover">
  <div class="row" >
      <div class="col-md-8 ">
        <div class="img-hover-zoom">
          <img  class = "img-responsive" width = "100%" src="images\fridgesBG.jpg" alt="">
        </div>
      </div>
      <div class="col-md-4 fridgeDesc">
        <h4 class="videoHeader">
          إكتشف طرازك
        </h4>
        <h6 class="videoDesc">
        أسلوب Smeg هو الطريقة التي يتواصل بها المنتج مع محيطه ويمكّن المستخدمين من التفاعل معه، وبالتالي إقامة علاقة مع المستخدم تتجاوز مجرد الاهتمامات العملية.

بهذه الفكرة ، أجرى Smeg بحثًا مضنيًا في الجماليات والأسلوب.
        </h6>
        <a href="classica.php" class="prodLink">
          إختر طرازك
        </a>
      </div>
      
  </div>
</div>
</section>
<!-- fridge demo end -->

<!--Services (Gurantee section)-->
    <section class="servicesSection">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <div data-aos="fade-right"  data-aos-duration="2000">
                <div class="design_img img-hover-zoom">
                  <img src="images/services.png" alt="desing Product" width="100%">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="descrp">
                  <div data-aos="fade-left" data-aos-duration="2000"><span class="subheader"> خدماتنا </span>
                    <p>خدمات الصيانة مع الضمانة
                      الصيانة الفورية لجميع منتجات سميج مع نخبة مختارة من الفنيين المتخصصين المدربين على الصيانة مع الخدمة المميزة التي تهدف لارضاء زبائننا، للإبلاغ عن أي أعطال إتصلوا بالقسم التقني.
                      <br><br><br>
                      Tel: 21 478 1861
                      <br>
                      tech@almotamiza.ly
                    </p>
                    <img src="logo/mechanical-gears-.png" alt="gears">
                  </div>
                </div>
            </div>  
           </div>
        </div>
    </section>
  <!-- </div> -->

    <!--Contact us-->
      <section dir="rtl" id="contact" class="tm-bg-color-5 tm-mb-3 ">
        <h2 dir="rtl" class="tm-text-white tm-contact-title" style="font-size: 40px; color: white;">تواصل معنا</h2>
        <div class="tm-bg-color-white tm-contact-main contactUS">
            <!-- cityX -->
              <div class="contactBorder">
                <span class="subheader">فروعنا</span>
                  <div class="cityTabs">
                      <button class="cityButton active" onclick="openCity(event, 'Tripoli')" id="defaultOpen"> طرابلس</button>
                      <button class="cityButton" onclick="openCity(event, 'Misrata')"> مصراته</button>
                  </div>
                  <div id="Tripoli" class="tabContent" style="color: white;">
                      <div class="flexContents">
                        <div class="contactInfo">
                          <div class="numbers">
                             <div class="contactLabel">
                              <img src="logo/call.png" class="contactIcon" width="24px" height="24px" alt="">
                              <h2>الأرقام</h2>
                            </div> 
                              <div class="borderRight">
                              <ul>
                                <li>+218 91 313 9615</li>
                                <li>+218 92 613 9615</li>
                              </ul>
                              </div>
                          </div>
                          <div class="emails">
                            <div class="contactLabel">
                              <img src="logo/email.png" class="contactIcon" width="24px" height="24px" alt="">
                            <h2>البريد الالكتروني</h2>
                            </div>
                            <div class="borderRight">
                            <ul>
                              <li>info@almotamiza.ly</li>
                              <li>almotamisa@yahoo.com</li>
                            </ul>
                            </div>
                          </div>
                          <div class="location">
                            <div class="contactLabel">
                              <img src="logo/pin.png" class="contactIcon" width="24px" height="24px" alt="">
                            <h2>وصف الموقع</h2>
                            </div>
                            <div class="borderRight">
                            <ul>
                              <li>طرابلس طريق قرجي بعد صالات العربية حوالي 200 متر</li>
                            </ul>
                            </div>
                          </div>
                        </div>
                        <div class="map-outer ">  
                          <div class="gmap-canvas">
                              <iframe id="gmap-canvas"
                                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3351.2474330569516!2d13.122321384731283!3d32.86517218679223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13a8eddd31064341%3A0xc28ab06d774719b5!2ssmeg.libya!5e0!3m2!1sar!2sly!4v1601375839884!5m2!1sar!2sly"
                                  frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                              </iframe>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div id="Misrata" class="tabContent" style="color: white;">
                    <div class="flexContents">
                      <div class="contactInfo">
                        <div class="numbers">
                           <div class="contactLabel">
                            <img src="logo/call.png" class="contactIcon" width="24px" height="24px" alt="">
                            <h2>الأرقام</h2>
                          </div> 
                            <div class="borderRight">
                            <ul>
                              <li>+218021010</li>
                              <li>+218021010</li>
                            </ul>
                            </div>
                        </div>
                        <div class="emails">
                          <div class="contactLabel">
                            <img src="logo/email.png" class="contactIcon" width="24px" height="24px" alt="">
                          <h2>البريد الالكتروني</h2>
                          </div>
                          <div class="borderRight">
                          <ul>
                            <li>email@site.com</li>
                            <li>email@site.com</li>
                          </ul>
                          </div>
                        </div>
                        <div class="location">
                          <div class="contactLabel">
                            <img src="logo/pin.png" class="contactIcon" width="24px" height="24px" alt="">
                          <h2>وصف الموقع</h2>
                          </div>
                          <div class="borderRight">
                          <ul>
                            <li>مصراته، شارع بنغازي بالقرب من مكتب ترخيص مصراته.</li>
                          </ul>
                          </div>
                        </div>
                      </div>
                      <div class="map-outer ">  
                        <div class="gmap-canvas">
                            <iframe id="gmap-canvas"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3351.2474330569516!2d13.122321384731283!3d32.86517218679223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13a8eddd31064341%3A0xc28ab06d774719b5!2ssmeg.libya!5e0!3m2!1sar!2sly!4v1601375839884!5m2!1sar!2sly"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            <div class="contactFormFlex">
              <span class="subheader">أرسل رسالة</span>
              <div class="contactContentFlex">
                <div class="descrp">
                  نحن دائما على استعداد لتزويدك بأعلى مستوى من الدعم. العلاقة بيننا وبين كل عميل مهمة للغاية بالنسبة لنا، لذلك يمكنك ملئ النموذج الخاص بالتواصل وسوف نقوم بالاتصال بك في أقرب وقت.
                  <div class="sendMessage">
                    <img src="logo/send-message.png" alt="">
                  </div>
                </div>
                <div class="contact-form-outer">
                    <form id="contact-form" action="" method="POST" class="tm-bg-color-6 tm-contact-form contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="اسمك" required="" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="بريد الإلكتروني" required="" />
                        </div>
                        <div class="form-group">
                            <textarea rows="4" name="message"  class="form-control" placeholder="رسالتك..."
                                required=""></textarea>
                        </div>
                        <div style="text-align: center;">
                            <button type="submit" class="ml-auto tm-btn tm-btn-3">
                                إرسال
                            </button>
                        </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
      </section>
    

    <!-- footing start-->
    <?php include('include/footing.php');?>
    <!-- footing end -->
    



    <script>
      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabContent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("cityButton");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }
      document.getElementById("defaultOpen").click(); /*default click on tripoli*/
      </script>
    <script src="js/jquery-2.2.3.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U">
    </script>
    <script src="js/gmap3.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <script src="js/bootsnav.js">
    </script>
    <script src="js/jquery.parallax-1.1.3.js">
    </script>
    <script src="js/jquery.appear.js">
    </script>
    <script src="js/owl.carousel.min.js">
    </script>
    <script src="js/jquery.cubeportfolio.min.js">
    </script>
    <script src="js/jquery.fancybox.js">
    </script>
    <script src="js/jquery.themepunch.tools.min.js">
    </script>
    <script src="js/jquery.themepunch.revolution.min.js">
    </script>
    <script src="js/revolution.extension.layeranimation.min.js">
    </script>
    <script src="js/revolution.extension.navigation.min.js">
    </script>
    <script src="js/revolution.extension.parallax.min.js">
    </script>
    <script src="js/revolution.extension.slideanims.min.js">
    </script>
    <script src="js/revolution.extension.video.min.js">
    </script>
    <script src="js/kinetic.js">
    </script>
    <script src="js/jquery.final-countdown.js">
    </script>
    <script src="js/functions.js">
    </script>
    <!-- animate on scroll library  -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
