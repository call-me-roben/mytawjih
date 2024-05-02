<!DOCTYPE html>
<html lang="en">
<head>
    <title>delete</title>
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
$conn = mysqli_connect('localhost','id21083838_mytawjih','az1534436q@dQ','id21083838_mytawjih');

if (!$conn) {
    die("conn failed: " . mysqli_connect_error());
}$req1="select from bac23";
$res1=mysqli_query($req1);
$n=mysqli_num_rows($res1);
$req2 = "delete from bac23 where rang=$n";
$res2 = $conn->query($req2);

if ($res2 === true) {
    echo ("<span class='contact1-form-title'>تم تسجيل الجامعة بنجاح</span>");
    // You can handle the error accordingly
} 

echo ("<div class='wrap-input1 validate-input' data-validate='Name is required'>
            <button class='contact1-form-btn'>
                <a href='index.php'>عودة</a>
            </button>
        </div>");
// Close the MySQLi conn
$conn->close();
?>
        </form>
    </div>
</div>

</body>
</html>