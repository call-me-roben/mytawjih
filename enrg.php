<?php
@include 'login\config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location: login\singin.php');
   exit; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>تسجيل</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/study.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!--===============================================================================================-->
</head>
<body>
<div class="contact1">
    <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt>
            <img src="images/img-01.png" alt="IMG" />
        </div>

        <form class="contact1-form validate-form">
        <?php
        ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect('localhost','id21083838_mytawjih','az1534436q@dQ','id21083838_mytawjih');

if (!$conn) {
    die("conn failed: " . mysqli_connect_error());
}
$fac = $_POST["fac"];
$cite = $_POST["list"];
$code = $_POST["code"];
$spec = $_POST["spec"];
$place = $_POST["place"];
$s22 = $_POST["score22"];
$s21 = $_POST["score21"];
$req2 = "select * from bac23 where code='$code'";
$res2 = $conn->query($req2);

$mail= $_SESSION['mail'];

$req3 = "select * from acc where mail='$mail'  ";
$res3 = $conn->query($req3);
$t = mysqli_fetch_array($res3);
$id = $t['user_id'];
$_SESSION['user_id']= $id ;
if ($res2 === false) {
    echo "Error executing the query: " . $conn->error;
    // You can handle the error accordingly
} else {
    $n = $res2->num_rows;
    if ($n != 0) {
        echo ("<span class='contact1-form-title'>الجامعة مسجلة من قبل</span>");
    } else {
        $req = "insert into bac23 (fac,site,code,spec,place,s22,s21,user_id) values('$fac','$cite','$code','$spec','$place','$s22','$s21','$id')";
        $res = $conn->query($req);
        if ($res === true) {
            echo ("<span class='contact1-form-title'>تم تسجيل الجامعة بنجاح</span>");
        } else {
            echo "Error executing the insert query: " . $conn->error;
        }
    }
}

echo ("<div class='wrap-input1 validate-input' data-validate='Name is required'>
                <a class='contact1-form-btn' href='index.php'>عودة</a>
        </div>");

// Close the MySQLi conn
$conn->close();
?>
        </form>
    </div>
</div>
<script>
        document.addEventListener('DOMContentLoaded', () => {
            var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
            if(disclaimer) {
                disclaimer.remove();
            }
        });
    </script>
</body>
</html>