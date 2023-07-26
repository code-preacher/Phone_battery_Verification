
<?php
require_once 'library/lib.php';
require_once 'classes/crud.php';
require_once 'classes/auth.php';
?>

<?php
$lib=new Lib;
$validate=new Auth;
$crud=new Crud;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>MOBILE PHONE BATTERY VERIFICATION SYSTEM | RESULT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="question/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="question/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="question/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/css/util.css">
    <link rel="stylesheet" type="text/css" href="question/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <form class="form-horizontal m-t-20" id="loginform" action="verify.php" method="post">
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                   <h5> <?php $lib->msg();?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <a href="verify.php"  class="btn btn-primary float-left">Back to Verify</a>
                                    
                                        <a href="index.php"  class="btn btn-success float-left"><i class="ti-home"></i>&nbsp;&nbsp;&nbsp;Back to Home</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="question/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="question/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="question/vendor/bootstrap/js/popper.js"></script>
    <script src="question/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="question/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="question/vendor/daterangepicker/moment.min.js"></script>
    <script src="question/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="question/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="question/js/main.js"></script>

</body>
</html>