<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
    include("../include/DBconnection.php");
    
    

    if(isset($_POST["aes_line"]))
    {
        $sql = "INSERT INTO `aes_lines` (`id`, `name`) VALUES ('', '{$_POST['aes_line']}') ";
        $pdo->query($sql);
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>smeg Dashboard</title>
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
                                            <span class="name"><?php echo $_SESSION["username"];?></span>
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
                                                    <li><a href="logout.php"><i class="zmdi zmdi-lock-open"></i>Logout</a></li>
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
                        <h3>لوحة التحكم <span>/ الرئيسية</span></h3>
                    </div>
                </div><!-- Page Heading End -->

                

            </div><!-- Page Headings End -->

            <!-- Top Report Wrap Start -->
            <div class="row">
                <!-- Top Report Start -->
                <div class="col-xlg-3 col-md-4 col-12 mb-30">
                    <div class="top-report">

                        <!-- Head -->
                        <div class="head">
                            <h4>جميع المنتجات</h4>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            <h2>
                                <?php $sql = "SELECT * FROM products";
                                echo $pdo->query($sql)->rowCount();
                                ?>
                             </h2>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 92%;"></div>
                            </div>
                            <p>92% of unique visitor</p>
                        </div>

                    </div>
                </div><!-- Top Report End -->

                <!-- Top Report Start -->
                <div class="col-xlg-3 col-md-4 col-12 mb-30">
                    <div class="top-report">

                        <!-- Head -->
                        <div class="head">
                            <h4>جميع الخطوط الجمالية</h4>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            <h2 id="lines">
                                <?php $sql = "SELECT * FROM aes_lines";
                                echo $pdo->query($sql)->rowCount();
                                ?>
                            </h2>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 98%;"></div>
                            </div>
                            <p>98% of unique visitor</p>
                        </div>

                    </div>
                </div><!-- Top Report End -->

                <!-- Top Report Start -->
                <div class="col-xlg-3 col-md-4 col-12 mb-30">
                    <div class="top-report">

                        <!-- Head -->
                        <div class="head">
                            <h4>جميع الأصناف</h4>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            <h2>5,000</h2>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 88%;"></div>
                            </div>
                            <p>88% of unique visitor</p>
                        </div>

                    </div>
                </div><!-- Top Report End -->

              
            </div><!-- Top Report Wrap End -->

            <div class="row mbn-30">

               

                <!-- Recent Transaction Start -->
                <div class="col-4 mb-30">
                    <div class="box">
                        <div class="box-body"><br><br>

                            <form>

                                <div class="row mbn-20">
                                    <div class="col-12 mb-20"><br>
                                    
                                        <h4 class="title"> إضافة خط جمالي جديد</h4>

                                        <h6 for="formLayoutUsername1">
                                            
                                            * ملاحظة: سوف الفئات تساعدك على طلب المنتجات وتجعل من السهل على المستخدم للبحث.
                                            <br> الرجاء كتابة اسم الفئة أدناه:
                                        </h6>

                                        <input type="text" name="aes_line" id="formLayoutUsername1" class="form-control" placeholder="إسم الخط">
                                    </div>
                                   
                                    <div class="col-12 mb-20">
                                            <input onclick="addItem($('#formLayoutUsername1').val())" type="reset" value="إضافة" class="button button-primary">
                                            <input type="reset" value="إلغاء" class="button button-danger">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- Recent Transaction End -->
                <!-- Recent Transaction Start -->
                <div class="col-8 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">إدارة الخطوط الجمالية</h4>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-vertical-middle table-selectable">

                                    <!-- Table Head Start -->
                                    <thead>
                                        <tr>
                                            <th><span> رقم الصنف</span></th>
                                            <th><span>إسم الصنف</span></th>
                                            <th>تعديل/حذف</th>
                                        </tr>
                                    </thead><!-- Table Head End -->

                                    <!-- Table Body Start -->
                                    <tbody id="aes_lines_table">
                                        <?php
                                            $sql = "SELECT * FROM `aes_lines` ";
                                            foreach ($pdo->query($sql) as $row) { ?>
                                                <tr id="<?php echo $row['id'];?>">
                                                <td><?php echo $row['id'];  ?></td>
                                                <td><a href="#" id="<?php echo $row['id'];?>name"><?php echo $row['name']; ?></a></td>
                                                <td>
                                                    <div class="table-action-buttons">
                                                        <a id="<?php echo $row['id'];?>" name="<?php echo $row['name'];?>" onclick="editFrom(this.id,this.name)" class="edit button button-box button-xs button-info" data-toggle="modal" data-target="#editModal"><i class="zmdi zmdi-edit"></i></a>
                                                        <a id="<?php echo $row['id'];?>" onclick="deleteFrom(this.id)" class="delete button button-box button-xs button-danger"><i class="zmdi zmdi-delete"></i></a>
                                                    </div>
                                                </td>                                      
                                            </tr>
                                        <?php }?>
                                        
                                    </tbody><!-- Table Body End -->

                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- Recent Transaction End -->
            </div>
            <div class="row mbn-30">
                <!-- Market Trends Chart Start -->
                <div class="col-md-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">إدارة الإعلانات</h4>
                        </div>
                        <div class="box-body">
                            <form>
                                <div class="row mbn-20">
                                    <div class="col-6 mb-20">
                                        <label for="formLayoutAddress3">العنوان</label>
                                        <input type="text" id="formLayoutAddress3" class="form-control" placeholder="من فضلك اكتب عنوان الإعلان هنا">
                                    </div>
                                    <div class="col-6 mb-20">
                                        <label for="formLayoutAddress4">عنوان جانبي  ( إختياري )</label> 
                                        <input type="text" id="formLayoutAddress4" class="form-control" placeholder="من فضلك اكتب عنوان جانبي للإعلان هنا">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutMessage2">الوصف</label>
                                        <textarea id="formLayoutMessage2" class="form-control" placeholder="من فضلك اكتب وصف الإعلان هنا"></textarea>
                                    </div>

                                    <div class="col-12 mb-30">
                                        <label for="formLayoutMessage2">رفع صورة أو أكثر</label>

                                        <div class="box">
                                            <div class="box-body">
                                                <input class="file-pond" type="file" multiple>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 mb-20">
                                        <input type="submit" value="تأكيد" class="button button-primary">
                                        <input type="reset" value="إلغاء" class="button button-danger">
                                    </div>

                                </div>
                            </form>
                        </div>
                       
                    </div>
                </div><!-- Market Trends Chart End -->
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

    <!-- EDITING MODAL  
        <div class="modal fade" id="editModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">عدل هذا الصنف </h5>
                    <button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form> 
                        <input type="text" id="formLayoutUsername1" class="form-control" placeholder="إسم النصف" style="border: 1px solid #1b9fb6;">
                    </form>              
                </div>
                <div class="modal-footer">
                    <button class="button button-danger" data-dismiss="modal">إغلاق</button>
                    <button class="button button-primary">حفظ التغييرات</button>
                </div>
            </div>
        </div>
    </div> -->

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

    <!-- Plugins & Activation JS For Only This Page -->

    <!--Moment-->
    <script src="assets/js/plugins/moment/moment.min.js"></script>

    <!--Daterange Picker-->
    <script src="assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/plugins/daterangepicker/daterangepicker.active.js"></script>

    <!--Echarts-->
    <script src="assets/js/plugins/chartjs/Chart.min.js"></script>
    <script src="assets/js/plugins/chartjs/chartjs.active.js"></script>

    <!--VMap-->
    <script src="assets/js/plugins/vmap/jquery.vmap.min.js"></script>
    <script src="assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
    <script src="assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/plugins/vmap/vmap.active.js"></script>

    <!-- Plugins & Activation JS For Only This Page -->
    <script src="assets/js/plugins/select2/select2.full.min.js"></script>
    <script src="assets/js/plugins/select2/select2.active.js"></script>
    <script src="assets/js/plugins/filepond/filepond.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond-plugin-image-preview.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond.active.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>

        function deleteFrom(id){//this functions passes the php id from the database
            event.preventDefault();
            swal({
                title: "هل أنت متأكد؟",
                text: " بعدما تقوم بالمسح لن يمكنك إسترداد الملف!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                    if(willDelete)
                    {
                        $.ajax({
                            method: 'POST',
                            data: {'delete':true, 'id':id},
                            url: '../admin/DBalt/delete.php',
                            success: function(data)
                            {
                                $('#lines').text($('#lines').text() - 1) ;

                            }
                        });
                        $("tr[id ="+id+"]").remove();
                        swal("تم مسح الملف!", {
                                icon: "success",
                                });
                    }
                    else 
                    {
                    swal("ملفك بإمان");
                    }
            });
        }


        function editFrom(id,line_name)
        {
            var input;
            swal({
                
                    content:{
                        element:"input",
                        attributes: {
                            value: line_name
                        }
                    },
                    title: 'قم بالتعديل:',
                    button:{
                        text: "تعديل",
                        value: true,
                        visible : true,
                        closeModal: true
                    }
                }//,()=>{input = inputValue;}
                )
                .then(willEdit =>{
                    if(willEdit)
                    {
                        $.ajax({
                            method: 'POST',
                            data: {'edit':true, 'id':id, 'linename':willEdit},
                            url: '../admin/DBalt/edit.php',
                            success: function(data){
                                swal("تم تعديل الملف!", {
                                icon: "success",
                                });
                                $("#"+id+"name").text(willEdit);
                                
                            }
                        });
                    }
                    else
                    {
                        swal({
                            title: 'تم إلغاء التعديل',
                            icon:"warning",
                            button:{
                                text: "حسناً",
                                value: true,
                                visible : true,
                                closeModal: true
                            }
                        });
                    }
                })
        }

        function addItem(line_name)
        {
            $.ajax({
                method: 'POST',
                data:{'add':true, 'linename':line_name},
                url: '../admin/DBalt/add.php',
                success: function(data){
                    swal("تمت الإضافة بنجاح!", {
                                icon: "success",
                        });

                     $("#aes_lines_table").append("<tr id="+data+"><td>"+data+"</td><td><a href='#' id="+data+"name>"+line_name+"</a></td>"+
                     "<td>"+
                     "<div class='table-action-buttons'>"+
                     "<a id="+data+" name="+line_name+" onclick='editFrom(this.id,this.name)' class='edit button button-box button-xs button-info' data-toggle='modal' data-target='#editModal'><i class='zmdi zmdi-edit'></i></a>"+
                     "<a id="+data+" onclick='deleteFrom(this.id)' class='delete button button-box button-xs button-danger'><i class='zmdi zmdi-delete'></i></a>"+
                     "</div></td></tr>");
                    
                }
            });
        }


/*
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
                    $.ajax({
                        method: 'POST',
                        data: {'delete':true, 'id': id},
                        url: 'delete.php',
                        success: function(data){

                        }
                    })
                    swal("تم مسح الملف!", {
                    icon: "success",
                    });
                } else {
                    swal("ملفك بإمان");
                }
                });
                        }); */
    </script>

</body>

</html>