<?php
    include 'include/DBconnection.php';
    $sql = "SELECT name,cat_desc FROM sub_cat where en_name ='". trim($_GET['category'])."'"; 
        foreach($pdo->query($sql) as $row){}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Smeg Libya | Major appliances | <?php echo $_GET['category'];?></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" href="css/dinfont.css"> 
<link rel="shortcut icon" href="logo/faviconsmeg.png">
<link rel="stylesheet" type="text/css" href="css/style.css">

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


<section class="header_layout2 breadcrumbPadding">
    <div class="container">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <ul class="breadcrumb">
              <li><a href="index.html">الرئيسية</a></li>
              <li>منتجات</li>
              <li>منتجات رئيسية</li>
              <li class="active"><?php echo $row['name']; ?></li>
            </ul>
          </div>
        </div>
      </div>
      </div>
    </div>
</section>
<!-- black section -->
<section>
    <div class="container blackSection">
        <h1 class="blackSectionTitle">
        <?php
            echo $row['name'];
         ?></h1>
        <h6 class="blackSectionDesc"> <?php echo $row['cat_desc']; ?></h6>
    </div>
</section>
<!-- products section -->
<section>
    <div class="container-fluid allProductsListBG">
        <div class="container allProductsList" style="direction: rtl;">
            <div class="row productsContent">
                <div class="col-sm-2">
                        <h1 class="filterTitle">الفلاتر</h1>
                        <div class="filters" id="product_filters">
                                    <div class="filters__item">
                                        <div class="filters__item__header" data-attr="NEW_AESTHETICS">
                                            + خطوط جمالية
                                        </div>

                                        <div class="filters__item__content" data-attr="NEW_AESTHETICS" id="filter_index_4">

                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_2" type="checkbox" name="Classica" value="NEW_AESTHETICS_2" data-filter="NEW_AESTHETICS" data-filtervalue="2" id="Classica">

                                                        <label class="form-check-label" for="Classica">كلاسيكا</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_3" type="checkbox" name="Coloniale" value="NEW_AESTHETICS_3" data-filter="NEW_AESTHETICS" data-filtervalue="3" id="Coloniale">

                                                        <label class="form-check-label" for="Coloniale">كولونيال</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_4" type="checkbox" name="Contemporanea" value="NEW_AESTHETICS_4" data-filter="NEW_AESTHETICS" data-filtervalue="4" id="Contemporanea">

                                                        <label class="form-check-label" for="Contemporanea">Contemporanea</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_5" type="checkbox" name="Cortina" value="NEW_AESTHETICS_5" data-filter="NEW_AESTHETICS" data-filtervalue="5" id="Cortina">

                                                        <label class="form-check-label" for="Cortina">Cortina</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_6" type="checkbox" name="Dolce Stil Novo" value="NEW_AESTHETICS_6" data-filter="NEW_AESTHETICS" data-filtervalue="6" id="Dolce Stil Novo">

                                                        <label class="form-check-label" for="Dolce Stil Novo">Dolce Stil Novo</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_7" type="checkbox" name="Linea" value="NEW_AESTHETICS_7" data-filter="NEW_AESTHETICS" data-filtervalue="7" id="Linea">

                                                        <label class="form-check-label" for="Linea">Linea</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_9" type="checkbox" name="Piano Design" value="NEW_AESTHETICS_9" data-filter="NEW_AESTHETICS" data-filtervalue="9" id="Piano Design">

                                                        <label class="form-check-label" for="Piano Design">Piano Design</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_11" type="checkbox" name="Selezione" value="NEW_AESTHETICS_11" data-filter="NEW_AESTHETICS" data-filtervalue="11" id="Selezione">

                                                        <label class="form-check-label" for="Selezione">Selezione</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input class="filter-checkbox NEW_AESTHETICS_12" type="checkbox" name="Victoria" value="NEW_AESTHETICS_12" data-filter="NEW_AESTHETICS" data-filtervalue="12" id="Victoria">

                                                        <label class="form-check-label" for="Victoria">Victoria</label>
                                                    </div>
                                        </div>
                                    </div>
                        </div>
                </div>
                <div class="col-sm-10 " id="product-list-container">
                    <div class="row products-list">
                        <?php
                            $sql = "SELECT products.img_url'url', products.name'prod_name', sub_cat.name'cat_name', aes_lines.name'aes_name', products.color'color'\n"

                            . "FROM products\n"
                        
                            . "INNER JOIN sub_cat ON products.sub_cat_id = sub_cat.sub_cat_id\n"
                        
                            . "INNER JOIN aes_lines ON products.line_id = aes_lines.id\n"

                            . "WHERE sub_cat.en_name = :subcat ";

                            if($stmt = $pdo->prepare($sql))
                            {
                                $stmt->bindParam(":subcat",$subcat_param,PDO::PARAM_STR);
                                $subcat_param = trim($_GET['category']);
                                if($stmt->execute()){
                                    if($row = $stmt->fetchAll()){
                                        foreach($row as $product){?>
                                        <div id="<?php echo $product['prod_name'];?>" class="listItem col-12 col-sm-6 col-lg-4 product-preview">
                                            <div class="product-content">
                                                <a href="https://www.smeg.com/products/SFP6604PNRE">
                                                    <div class="product-preview__gallery">
                                                        <img src="<?php echo $product['url'];?>" alt="product picture" style="width:100%">
                                                    </div>
                                                    <div class="Productname"><?php echo $product['prod_name'];?></div>
                                                    <div class="product-preview__description">
                                                    <?php echo $product['cat_name'];?> |
                                                    <?php echo $product['aes_name'];?> |
                                                    <?php echo $product['color'];?>
                                                    
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                

                                
                        <?php           }
                                    }
                                }
                            }
                         ?>
                            
                            
                            
                    </div>
                </div>
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
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/kinetic.js"></script>
<script src="js/jquery.final-countdown.js"></script>

<script src="js/functions.js"></script>


</body>
</html>
