    <!--HEADER-->
    <header> 
      <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container navContainer"> <!--m.yousef navContainer class added-->
          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
              <i class="fa fa-bars burgermenu">
              </i>
            </button>
            <a class="navbar-brand" href="index.php">
              <div class="logohead">
                <img src="logo/Smeg-Logo-06.svg" 
                style="margin-top:20px;
                margin-bottom:10px;" width="200px" height="40px" alt="">
              </div>
            </a>
          </div>
          <!-- End Header Navigation -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right flexnav" data-in="fadeIn" data-out="fadeOut"> <!--m.yousef flexnav added to display menu in arabic-->
              <li class="dropdown active"> <!--m.yousef language changes-->
                <a href="index.php"> الرئيسية
                </a>
              </li>
              <li class="dropdown">
                <a href="#."  class="dropdown-toggle" data-toggle="dropdown">المنتجات
                </a>
                <ul class="dropdown-menu">
                  <div class="flexDropDown">
                    <div class="appliances majorAppl">
                      <a href="grid.php"><span class="productLabel">منتجات رئيسية</span></a>
                      <ul>
                        <!-- do fetching for categories from database with MAIN cats id and give the link to them here -->
                        <?php 
                        $sql = "SELECT name ,en_name  FROM sub_cat where main_cat_id = 1"; 
                        foreach($pdo->query($sql) as $grab){  ?>
                        
                        <a href="products.php?category=<?php echo $grab['en_name']; ?>"><li> <?php echo $grab['name']; ?> </li></a>

                        <?php } ?>
                      </ul>
                    </div>
                    <div class="appliances smallAppl">
                      <a href="grid2.php"><span class="productLabel">منتجات صغيرة</span></a>
                      <ul>
                        <!-- fetching small products -->
                        <?php 
                        $sql = "SELECT name ,en_name  FROM sub_cat where main_cat_id = 2"; 
                        foreach($pdo->query($sql) as $grab){  ?>
                        
                        <a href="products.php?category=<?php echo $grab['en_name']; ?>"><li> <?php echo $grab['name']; ?> </li></a>

                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                </ul>
              </li>
              <li  class="dropdown megamenu-fw">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown"> خطوط جمالية
                </a>
                <ul class="dropdown-menu">
                  <div class="flexDropDown">
                    <div class="appliances aesLinesList">
                      <span class="productLabel" id="smegAesTitle">إكتشف خطوط تصنيع سميج الجمالية</span>
                      <ul>
                        <a href="classica.php"><li>كلاسيكا</li></a>
                        <a href="colonial.php"><li>كولونيال</li></a>
                        <a href="victoria.php"><li>فيكتوريا</li></a>
                        <a href="cortina.php"><li>كورتينا</li></a>
                        <a href="dolcestilnovo.php"><li>دولتشي ستيل نوفو</li></a>
                        <a href="linea.php"><li>لينيا</li></a>
                        <a href="portofino.php"><li>بورتوفينو</li></a>
                        <a href="piano.php"><li>تصميم البيانو</li></a>
                        <a href="selezione.php"><li>إختياري</li></a>
                        <a href="50sStyle.php"><li>ستايل الـ50s</li></a>
                        <a href="contemporary.php"><li>معاصر</li></a>
                      </ul>
                    </div>
                  </div>
                </ul>
              </li>
              <li class="dropdown">
                <a href="about.php"> عن الشركة
                </a>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
          <div class=" search-toggle">
            <div class="top-search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon">
                  <i class="fa fa-search">
                  </i>
                </span>
              </div>
            </div>
          </div>
          
        </div>   
      </nav>
    </header>