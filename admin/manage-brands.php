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
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet"> 


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
                        <h3>لوحة التحكم <span> / إدارة الأصناف</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row">

                <!--Manage Product List Start-->
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-vertical-middle">
                            <thead>
                                <tr>
                                    <th>رقم الصنف</th>
                                    <th>صورة </th>
                                    <th>نوع</th>
                                    <th>وصف</th>
                                    <th>تعديل/حذف</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#22</td>
                                    <td><img src="assets/images/product/list-product-1.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">Spro 4 Laptop</a></td>
                                    <td>Description</td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="edit button button-box button-xs button-info" data-toggle="modal" data-target="#editModal"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#23</td>
                                    <td><img src="assets/images/product/list-product-2.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">Spro 4 Laptop</a></td>
                                    <td>Description</td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="edit button button-box button-xs button-info" data-toggle="modal" data-target="#editModal"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#24</td>
                                    <td><img src="assets/images/product/list-product-3.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">Spro 4 Laptop</a></td>
                                    <td>Description</td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="edit button button-box button-xs button-info" data-toggle="modal" data-target="#editModal"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#25</td>
                                    <td><img src="assets/images/product/list-product-4.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">Spro 4 Laptop</a></td>
                                    <td>Description</td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="edit button button-box button-xs button-info" data-toggle="modal" data-target="#editModal"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#26</td>
                                    <td><img src="assets/images/product/list-product-5.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">Spro 4 Laptop</a></td>
                                    <td>Description</td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#27</td>
                                    <td><img src="assets/images/product/list-product-4.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">Spro 4 Laptop</a></td>
                                    <td>Description</td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
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
    <div class="modal fade" id="editModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit this brand</h5>
                    <button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mbn-20">
                            <div class="col-12 mb-20">
                                <label for="formLayoutAddress1" dir="rtl">إسم الصنف</label>
                                <input type="text" id="formLayoutAddress1" class="form-control" placeholder="إسم الصنف" style="border: 1px solid #1b9fb6;">
                            </div>
                        
                            <div class="col-12 mb-20">
                                <label for="formLayoutMessage1">وصف</label>
                                <textarea id="formLayoutMessage1" class="form-control" placeholder="وصف" style="border: 1px solid #1b9fb6;"></textarea>
                            </div>

                            <div class="col-12 mb-20">
                                <label for="formLayoutFile2">رفع صورة</label>
                                <input type="file" id="formLayoutFile2" class="file-pond" height="50">
                            </div>

                            <div class="col-12 mb-20">
                                <input type="submit" value="تأكيد" class="button button-primary">
                                <input type="submit" value="إلغاء" class="button button-danger">
                            </div>

                        </div>
                    </form>             
                </div>
            </div>
        </div>
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
     <!-- Plugins & Activation JS For Only This Page -->
     <script src="assets/js/plugins/select2/select2.full.min.js"></script>
     <script src="assets/js/plugins/select2/select2.active.js"></script>
     <script src="assets/js/plugins/dropify/dropify.min.js"></script>
     <script src="assets/js/plugins/dropify/dropify.active.js"></script>
     <script src="assets/js/plugins/filepond/filepond.min.js"></script>
     <script src="assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js"></script>
     <script src="assets/js/plugins/filepond/filepond-plugin-image-preview.min.js"></script>
     <script src="assets/js/plugins/filepond/filepond.active.js"></script>

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