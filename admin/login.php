<?php
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: index.php");
        exit;
    }
    
    include("../include/DBconnection.php"); //db connection 
    $username = $password = "";
    $username_err = $password_err = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //check if the username is empty
        if(empty(trim($_POST["username"])))
        {
            $username_err = "من فضلك أدخل إسم المستخدم";
        }
        else
        {
            $username = trim($_POST["username"]);
        }
        //check if the password is empty
        if(empty(trim($_POST["password"])))
        {
            $password_err = "من فضلك أدخل كلمة المرور";
        }
        else
        {
            $password = trim($_POST["password"]);
        }


        //validation
        if(empty($username_err) && empty($password_err))
        {
            //preparing the sql statment to see wether we have a match
            $sql = "SELECT * FROM admins WHERE username = :username";
            if($stmt = $pdo->prepare($sql))
            {
                //binding  variables to the sql statment above
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

                //set the parameter
                $param_username = trim($_POST["username"]);

                if($stmt->execute())
                {
                    //Check if username exists, if yes then verify password
                    if($stmt->rowCount() == 1)
                    {
                        if($row = $stmt->fetch())
                        {
                            $id = $row["id"];
                            $username = $row["username"];
                            if($password  == $row["password"] )
                            {
                                session_start();
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;

                                //redirect to home index
                                header("location: index.php");
                            }
                            else
                            {
                                $password_err = "كلمة السر التي أدخلتها غير صحيحة";
                            }
                            
                        }
                    }
                    else
                    {
                        $username_err = "إسم المستخدم غير موجود";
                    }
                }
                unset($stmt);
            }
        }
        unset($pdo);
    }

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Smeg dashboard</title>
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

<body dir="RTL" class="bgLogin">

    <div class="main-wrapper">

        <!-- Content Body Start -->
        <div class="login-content-body m-0 p-0">

            <div class="login-register-wrap">
                <div class="row">

                    <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-12 col-12">
                        <div class="login-register-form-wrap">
                            <img src="../logo/Smeg-Logo-06.svg" alt="" width="360">
                            <span style="color: white;">Dashboard</span>
                            <br><br><hr class="login-hr"><br>
                            <div class="content">
                                <p> من فضلك أدخل إسم المستخدم و كلمة المرور لتسجيل الدخول </p>
                            </div>

                            <div class="login-register-form">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                    <div class="row loginBlock">
                                        <div class="col-12 mb-20">
                                            <input class="form-control" name="username" type="text" placeholder="Username">
                                            <span style="color: red;"><?php echo $username_err ?></span>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <input class="form-control" name="password" type="password" placeholder="Password">
                                            
                                            <span style="color: red;"><?php echo $password_err ?></span>
                                        </div>
                                        
                                        <div class="col-12 mt-10">
                                            <button class="button button-primary button-outline" type="submit">
                                                <!-- put ahref here? -->
                                                تسجيل الدخول 
                                                <span class="ti-shift-left"></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                        <div class="content">
                            <p>Please inter both of your username and password to sign-in</p>
                        </div>
                    </div> -->

                </div>
            </div>

        </div><!-- Content Body End -->

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

</body>

</html>