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
    <title>حسب السكور</title>
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
    <style>
      /* Apply the following CSS to the table and its elements */
      .modern-table {
        margin-right: 70px;
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        color: #333;
        box-shadow: 3px 3px 20px rgb(79, 79, 79);
        opacity: 0; /* Set the initial opacity to 0 for the animation */
        transform: translateX(
          -2px
        ); /* Set the initial position for the table */
        animation: fadeInAndSlideUp 1s forwards; /* Apply the animation */
      }

      /* Define the table animation */
      @keyframes fadeInAndSlideUp {
        to {
          opacity: 1;
          transform: translateX(-100px); /* Move the table to its original position (0) */
        }
      }

      /* Add a border to all cells */
      .modern-table th,
      .modern-table td {
        border: 1px solid #ddd;
        padding: 8px;
        transition: box-shadow 0.3s ease-in-out; /* Add smooth transition for box shadow */
      }

      /* Style the table header */
      .modern-table thead {
        background-color: #f2f2f2;
      }

      .modern-table th {
        text-align: left;
      }

      /* Style the table body */
      .modern-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
      }

      /* Change hover effect to orange */
      .modern-table tbody tr:hover {
        transition: 0.5s;
        background-color: orange;
        color: #ffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      }
    </style>
</head>
<body>
<div class="contact1">
    <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt>
            <img src="images/img-01.png" alt="IMG" />
        </div>

        <form class="contact1-form validate-form">
        <?php
$link = mysqli_connect('localhost','id21083838_mytawjih','az1534436q@dQ','id21083838_mytawjih');

if (!$link) {
    die("conn failed: " . mysqli_connect_error());
}

$id=$_SESSION['user_id'];
            $req = "select * from bac23 where user_id='$id' order by place DESC";
            $res = mysqli_query($link, $req);
            $n = mysqli_num_rows($res);

            echo("<table class='modern-table'>
                <thead>
                  <tr>
                    <th>سكور 2021</th>
                    <th>سكور 2022</th>
                    <th>عدد المقاعد</th>
                    <th>الإختصاص</th>
                    <th>كود الإختصاص</th>
                    <th>الولاية</th>
                    <th>الجامعة</th>
                    <th>الرقم</th>
                  </tr>
                </thead>
                <tbody>");

            for ($i = 1; $i <= $n; $i++) {
                $t = mysqli_fetch_array($res);
                echo("<tr>
                        <td>{$t['s21']}</td>
                        <td>{$t['s22']}</td>
                        <td>{$t['place']}</td>
                        <td>{$t['spec']}</td>
                        <td>{$t['code']}</td>
                        <td>{$t['cite']}</td>
                        <td>{$t['fac']}</td>
                        <td>$i</td>
                      </tr>");
            }

            echo("</tbody></table>");

            mysqli_close($link);
        ?>

        <div class="wrap-input1 validate-input" data-validate="Name is required">
            <button class="contact1-form-btn">
                <a href="index.php">عودة</a>
            </button>
            <button class="contact1-form-btn">
                <a href="delete1.php">حذف الجامعة</a>
            </button>
        </div>
        </form>
    </div>
</div

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>

</body>
</html>