<?php
@include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mail = $_POST["maill"];
    $pass = $_POST["passs"];

    $sql = "SELECT * FROM acc WHERE mail='$mail'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
            $hashedPassword = md5($pass) ;

        if ($row['pass'] === $hashedPassword) {
            $_SESSION['user_name'] = $row['username'];
            $_SESSION['mail'] = $row['mail'];
            $_SESSION['id'] = $row['user_id'];
            header('location: ../index.php');
            exit();
        } else {
            $error[] = 'Incorrect password!';
        }
    } else {
        $error[] = 'User not found!';
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>sign in</title>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="icon" type="image/png" href="images/icons/conn.png" />
</head>
<body>
    <div class="wrapper">
        <div class="title"><img id="imt" src="images/logow.png" /></div>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="field">
                <input type="text" required name="maill" />
                <label>Email Address</label>
            </div>
            <div class="field">
                <input type="password" name="passs" required />
                <label>Password</label>
            </div>
            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="remember-me" />
                    <label for="remember-me">Remember me</label>
                </div>
            </div>
            <div class="field">
                <input type="submit" id="ff" value="Login" />
            </div>
            <div class="signup-link">
                Not a member? <a href="signup.php">Signup now</a>
            </div>
            <div>
                <?php
                if (isset($error)) {
                    foreach ($error as $err) {
                        echo '<span class="error-msg">' . $err . '</span>';
                    }
                }
                ?>
            </div>
        </form>
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
