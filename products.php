<?php
    include 'include/DBconnection.php';
    $sql = "SELECT main_cat_id'maincat',name,cat_desc FROM sub_cat where en_name ='". trim($_GET['category'])."'"; 
        foreach($pdo->query($sql) as $row){}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Smeg Libya | Major appliances | <?php echo $_GET['category'];?></title>

<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="shortcut icon" href="logo/faviconsmeg.png">
<link rel="stylesheet" type="text/css" href="css/loader.css">


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
              <li><a href="index.php">الرئيسية</a></li>
              <li>منتجات</li>
              <li><?php  switch($row['maincat']){case 1: echo 'منتجات رئيسية'; break; case 2: echo 'منتجات صغيرة';} ?></li>
              <li class="active"><?php echo isset($row)?$row['name']:"خطاً"; ?></li>
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
            echo isset($row)?$row['name']:"المنتج غير متوفر";
         ?></h1>
        <h6 class="blackSectionDesc"> <?php echo isset($row)?$row['cat_desc']:""; ?></h6>
    </div>
</section>
<!-- products section -->
<section>
    <div class="container-fluid allProductsListBG">
        <div class="container allProductsList" style="direction: rtl;">
            <div class="row productsContent">
                <div class="col-sm-12 col-md-3-fluid col-xl-3 col-lg-3 col-3 ">
                        <h1 class="filterTitle">الفلاتر</h1>
                        <div class="filters" id="product_filters">
                                    <div class="filters__item">
                                        <div class="filters__item__header" data-attr="NEW_AESTHETICS">
                                            + خطوط جمالية
                                        </div>

                                        <div class="filters__item__content" data-attr="NEW_AESTHETICS" id="filter_index_4">

                                                    <div class="form-check">

                                                        <input onclick="($(this).prop('checked'))?addSelected(7):removeSelected(7);" class="filter-checkbox" type="checkbox" id="Classica">

                                                        <label class="aesCheckBox" for="Classica">كلاسيكا</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input onclick="($(this).prop('checked'))?addSelected(3):removeSelected(3);" class="filter-checkbox" type="checkbox" id="Coloniale">

                                                        <label class="aesCheckBox" for="Coloniale">كولونيال</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input onclick="($(this).prop('checked'))?addSelected(6):removeSelected(6);" class="filter-checkbox" type="checkbox" id="Contemporanea">

                                                        <label class="aesCheckBox" for="Contemporanea">معاصر</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input onclick="($(this).prop('checked'))?addSelected(11):removeSelected(11);" class="filter-checkbox" type="checkbox"  id="Cortina">

                                                        <label class="aesCheckBox" for="Cortina">كورتينا</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input onclick="($(this).prop('checked'))?addSelected(1):removeSelected(1);" class="filter-checkbox" type="checkbox" id="Dolce Stil Novo">

                                                        <label class="aesCheckBox" for="Dolce Stil Novo">دولتشي ستيل نوفو</label>
                                                    </div>
                                                    <div class="form-check">

                                                    <input onclick="($(this).prop('checked'))?addSelected(8):removeSelected(8);" class="filter-checkbox" type="checkbox" id="style50s">

                                                    <label class="aesCheckBox" for="style50s">ستايل الـ50s</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input onclick="($(this).prop('checked'))?addSelected(4):removeSelected(4);" class="filter-checkbox" type="checkbox" id="Piano Design">

                                                        <label class="aesCheckBox" for="Piano Design">تصميم البيانو</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input onclick="($(this).prop('checked'))?addSelected(9):removeSelected(9);" class="filter-checkbox" type="checkbox" id="Selezione">

                                                        <label class="aesCheckBox" for="Selezione">اختياري</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input onclick="($(this).prop('checked'))?addSelected(5):removeSelected(5);" class="filter-checkbox" type="checkbox" id="Linea">

                                                        <label class="aesCheckBox" for="Linea">لينيا</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input onclick="($(this).prop('checked'))?addSelected(10):removeSelected(10);" class="filter-checkbox" type="checkbox" id="Victoria">

                                                        <label class="aesCheckBox" for="Victoria">فيكتوريا</label>
                                                    </div>
                                                    <div class="form-check">

                                                        <input onclick="($(this).prop('checked'))?addSelected(2):removeSelected(2);" class="filter-checkbox" type="checkbox" id="Portofino">

                                                        <label class="aesCheckBox" for="Portofino">بورتوفينو</label>
                                                    </div>
                                                    
                                        </div>
                                    </div>
                        </div>
                </div>
                <div class="col-sm-4-fluid col-md-9-fluid col-xl-9 col-lg-9 col-9 " id="product-list-container">
                    <div class="row products-list filter-lines">
                        <?php
                            $sql = "SELECT products.img_url'url', products.name'prod_name', sub_cat.name'cat_name', aes_lines.name'aes_name', products.color'color', aes_lines.id'line_id'  \n"

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
                                        <div id="<?php echo $product['line_id'];?>" class="listItem col-12 col-sm-6 col-lg-4 product-preview">
                                            <div class="product-content">
                                                <a href="https://www.smeg.com/products/<?php echo $product['prod_name'];?>">
                                                    <div class="product-preview__gallery">
                                                        <img loading="lazy" src="<?php echo $product['url'];?>" alt="product picture" style="width:100%">
                                                    </div>
                                                    <div class="Productname"><?php echo $product['prod_name'];?></div>
                                                    <div class="product-preview__description">
                                                    <?php echo $product['cat_name'];?> ،
                                                    <?php echo $product['aes_name'];?> ،
                                                    <?php echo $product['color'];?>
                                                    
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                

                                
                        <?php           }
                                    }
                                    else{
                                        echo "<h1 style='font-size:30px;
                                        margin-right:auto;
                                        margin-left:auto;
                                        margin-top:5%;
                                        '> لا يوجد منتجات حالياً  </h1>";
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

<script src="js/functions.js"></script>
<script src="js/filterScript.js"></script>


</body>
</html>
