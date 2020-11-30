<?php include 'include/DBconnection.php'; ?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Smeg Libya | Cortina </title>
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" href="logo/faviconsmeg.png">
<link rel="stylesheet" type="text/css" href="css/loader.css">


<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

<!--Loader-->
<div class="loader">
  <div class="spinner-load">
    <div class="dot1"></div>
    <div class="dot2"></div>
  </div>
</div>


<!-- header start-->
<?php include('include/heading.php');?>
<!-- header end -->



<!--Page Header-->
<section class="header_layout2 padding cortinaBG">
  <div class="container">
    <div class="container">      <!-- edit out later -->
      <div class="row">
        <div class="col-sm-12 col-md-5">
          <ul class="breadcrumbAes">
            <li><a href="index.php">الرئيسية</a></li>
            <li>خطوط جمالية</li>
            <li>كورتينا</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="aesHeader padding">
      <div class="row">
        <div class="col-md-5">
          <h4>خـــط</h4>
          <h1>كورتينا</h1>
          <h3>استحضار أجواء الأيام الماضية.
          </h3>
          <a href="products.php?category=oven" class="prodLink">مشاهدة المنتجات</a>
          <!-- scroll animation -->
          <div class="center">
            <label style="font-size: 16px;">
            مرر لأسفل
            </label>
            <div class="scrollCont" style="height: 60px;overflow: hidden;width: 40px;">
              <div class="scroll">
              </div>
            </div>
          </div>
          <!-- scroll anim end -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Page header end -->


<!--Page Nav-->
<section class="PageNav">
    <div class="flexHeader">
        <div class="border">
        </div>
        <p class="firstPara">
        يميز جماليات كورتينا التوازن الدقيق للميزات والجمع الدقيق للمواد. مستوحاة من أساتذة الحرفيين الذين صنعوا إبداعات راقية بمعرفة قديمة ، المجموعة الجديدة تبعث على سحر الحرف اليدوية المصنوعة من الحديد المطاوع في الأجهزة المنزلية.
        </p>
    </div>
    <div class="container-fluid">
          <img width="100%" src="images/aeslines/cortina/cortinacover.jpg" alt="">
    </div>
    
<div class="container descContainerBS">
    <div class="row" >
        <div class="col-md-8 descContainer">
        تتميز بتوازن متناغم بين الميزات ومجموعة مدروسة من المواد ، مستوحاة من أساتذة الحرفيين الذين يصوغون إبداعات راقية باستخدام المعرفة القديمة. تعكس المجموعة الجديدة من الأجهزة المنزلية الفريدة سحر الحرف اليدوية المصنوعة من الحديد المطاوع. يخلق الاختيار الواعي للمواد جنبًا إلى جنب مع التشطيبات اللامعة المختلفة تأثيرًا جماليًا غنيًا ومتطورًا. يمنح الاستخدام الواسع للألوان الحياة للمنتجات الأنيقة ذات الطراز الخالد.
          
          </div>
        <div class="col-md-4 descContaineralign">
          <h4>سلسلة كورتينا
          </h4>
        </div>
        
    </div>
</div>

</section>

<!-- footing start-->
<?php include('include/footing.php');?>
<!-- footing end -->

<script src="js/jquery-2.2.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/functions.js"></script>



</body>
</html>
