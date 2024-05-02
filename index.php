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
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/dom.png" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/bootstrap/css/bootstrap.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/css-hamburgers/hamburgers.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/select2/select2.min.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!--===============================================================================================-->
  </head>
  <style>
    /* Replace this with the link to the Font Awesome CSS file to use the icons below */
    @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css);

    .social-icons {
      margin-top: 341px;
      position: absolute;
      margin-left: -530px;
    }

  
    @keyframes fadeInAndSlideUp {
      to {
        transform: translateY(
          -5px
        ); /* Move the table to its original position (0) */
      }
    }

    .bb{
      display: inline-block;
      margin: 0 20px;
      color: #333;
      scale:40px;
      text-decoration: none;
      transition: color 0.2s ease-in-out;
      margin-left:125px;
    }

    .social-icons a:hover {
      transition: 0.5s;
      color: #ff8000; /* Change to the color you want when hovering over the icons */
    }

    .h6{
      font: size 10px;
    }
  </style>
  <body>
    <div class="contact1">
      <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt>
          <img src="images/img-01.png" alt="IMG" />
        </div>

        <form class="contact1-form validate-form">
<span class="contact1-form-title">
    مرحبا بيك .. إختر <?php echo $_SESSION['user_name']; ?> الخدمة لباش تعملها
</span>


          <div class="container-contact1-form-btn">
            <button class="contact1-form-btn">
              <a href="tasgil.html">تسجيل الجامعة</a>
            </button>
            <button class="contact1-form-btn">
              <a href="tri.html">الترتيب </a>
            <button class="contact1-form-btn">
                <a href="delete.php">حذف جميع الجامعات</a>
            </button>
             </button>
            <button class="contact1-form-btn">
              <a href="login/logout.php">تسجيل الخروج </a>
            </button>
          </div>
        </form>
      </div>
      <div class="social-icons">
        <p
          style="
            margin-left: 10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          "
        >
          created by <span style="color: orange"><a href="#" id="rr" class="h6"> rayen ben amara</a></span> & <span style="color: orange"><a href="" id="ab" class="h6">ayoub ben ahmed</a> </span>
        </p>
        <div class="bb">
        <a
          href="https://www.facebook.com/rayenb0"
          target="_blank"
          title="Facebook"
          ><i class="fab fa-facebook"></i
        ></a>

        <a
          href="https://www.instagram.com/rayenb0"
          target="_blank"
          title="Instagram"
          ><i class="fab fa-instagram"></i
        ></a>
        <a
          href="https://www.tiktok.com/@rayenbq"
          target="_blank"
          title="Instagram"
          ><i class="fab fa-tiktok"></i
        ></a>
        <a
          href="https://www.instagram.com/ayoub.ahmed.0_0"
          target="_blank"
          title="Instagram"
          ><i class="fab fa-instagram"></i
        ></a>
        <a
          href="https://www.facebook.com/ayoub.ahmed.3557440"
          target="_blank"
          title="Instagram"
          ><i class="fab fa-facebook"></i
        ></a></div>
      </div>
      <div
        style="
          text-align: right;
          position: fixed;
          z-index: 9999999;
          bottom: 0;
          width: auto;
          left: 1%;
          cursor: pointer;
          line-height: 0;
          display: block !important;
        "
      >
      </div>
    </div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>

    <script src="js/main.js"></script>
    <!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 15789363;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/15789363/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->
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
