<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
    include("../include/DBconnection.php");
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>smeg Dashboard | Manage Products</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/Aslam Symbol.svg">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/cryptocurrency-icons.css">
    <link rel="stylesheet" href="../css/dinfont.css">


    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body dir="RTL">

    <div class="main-wrapper">


        <!-- Header Section Start -->
         <!-- Header Section Start -->
         <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <div class="col-2"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-8">
                        <a href="index.php">
                            <img src="../logo/Smeg-Logo-06.svg" alt="" width="185">
                        </a>
                    </div><!-- Header Logo (Header Left) End -->

                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-2">
                        <div class="row justify-content-between align-items-center">                            

                            <!-- Header Notifications Area Start -->
                            <div class="col-auto">

                                <ul class="header-notification-area">


                                    <!--User-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                                <span class="ti-angle-down dropdownarrow"></span>
                                        <span>
                                            <img src="../logo/user.png" alt="">
                                            </span>
                                            <span class="name"> محمد يوسف</span>
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            <div class="head">
                                                <h5 class="name"><a href="#">Mohammed Yousef</a></h5>
                                                <a class="mail" href="#">m.yousef@smeg.ly</a>
                                            </div>
                                            <div class="body">
                                                <ul>
                                                    <li><a href="login.php"><i class="zmdi zmdi-lock-open"></i>Sign out</a></li>
                                                </ul>
                                              
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div><!-- Header Notifications Area End -->

                        </div>
                    </div><!-- Header Right End -->

                </div>
            </div>
        </div><!-- Header Section End -->
        <!-- Side Header Start -->
        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>
                        <li><a href="index.php"><i class="ti-home"></i> <span>لوحة التحكم</span></a>
                        </li>                          
                        <li><a href="manage-products.php"><i class="ti-shopping-cart"></i> <span>إدارة المنتجات</span></a>
                        </li>
                        <li><a href="manage-brands.php"><i class="ti-layers"></i> <span>إدارة الأصناف</span></a>
                        </li>
                        <li><a href="#"><i class="ti-stamp"></i> <span>ملفي الشخصي</span></a>
                        </li>
                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div><!-- Side Header End -->

        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>لوحة التحكم <span> / إدارة المنتجات</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->


            <!-- modal for adding products -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addingModal">
            +إضافة منتج
            </button>

            <!-- Modal -->
            <div class="modal" id="addingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">إضافة منتج</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding-top: 30px;">
                    <form>
                        <label>إسم المنتج</label>
                        <input class="form-control" type="text" placeholder="إسم المنتج">
                        <label>الخط الجمالي</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <?php
                                $sql = "SELECT `name` from `aes_lines`";
                                foreach ($pdo->query($sql) as $row) { ?>
                                    <option><?php echo $row['name'];?></option>
                            <?php }?>
                        </select>
                        <label>النوع</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <?php
                                $sSQL = 'SET CHARACTER SET utf8'; 
                                $pdo->query($sSQL);
                                    $sql = "SELECT `name` from `sub_cat`";
                                    foreach ($pdo->query($sql) as $row) { ?>
                                    <option><?php echo ($row['name']);?></option>
                                <?php }?>
                        </select>
                        <label>اللون</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>أسود</option>
                        <option>أبيض</option>
                        <option>فضي</option>
                        <option>أحمر</option>
                        <option>أخضر</option>
                        </select>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">صورة المنتج</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                    <button type="button" class="btn btn-primary">إضافة منتج</button>
                </div>
                </div>
            </div>
            </div>
            <div class="row">

                <!--Manage Product List Start-->
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-vertical-middle">
                            <thead>
                                <tr>
                                    <th>رقم المنتج</th>
                                    <th>إسم المنتج</th>
                                    <th>الخط الجمالي</th>
                                    <th>النوع</th>
                                    <th>اللون</th>
                                    <th>تعديل/حذف</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM `products` ";
                                    foreach ($pdo->query($sql) as $row) { ?>
                                    <tr>
                                    <td><?php echo $row['product_id'];  ?></td>
                                    <td><a href="#"><?php echo $row['product_name']; ?></a></td>
                                    <td><?php echo $row['line_id'];  ?></td>
                                    <td><?php echo $row['sub_cat_id'];  ?></td>
                                    <td><?php echo $row['color'];  ?></td>
                                    <td>
                                    <div class="table-action-buttons">
                                        <a class="edit button button-box button-xs button-info" data-toggle="modal" data-target="#editModal"><i class="zmdi zmdi-edit"></i></a>
                                        <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                        </td>                                      
                                        </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Manage Product List End-->

            </div>

        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">
                <div class="footer-copyright text-center">
                    <p class="text-body-light">2020 &copy; All rights reserverd to Almotamiza Co.</p>
                </div>
            </div>
        </div><!-- Footer Section End -->


    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $('.delete ').on('click', function(){
            swal({
                title: "هل أنت متأكد؟",
                text: " بعدما تقوم بالمسح لن يمكنك إسترداد الملف!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    swal("تم مسح الملف!", {
                    icon: "success",
                    });
                } else {
                    swal("ملفك بإمان");
                }
                });
                        }); 
    </script>


</body>

</html>