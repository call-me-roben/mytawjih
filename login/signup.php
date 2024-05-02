<?php
@include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];

    // Check if the email already exists
    $select = "SELECT * FROM acc WHERE mail = '$email'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists!';
    } else {
        if ($password !== $cpassword) {
            $error[] = 'Password not matched!';
        } else {
            $hashedPassword = md5($password);

            $insert = "INSERT INTO acc (name, username, mail, pass, gen) 
                        VALUES ('$name', '$username', '$email', '$hashedPassword', '$gender')";

            if (mysqli_query($conn, $insert)) {
                header('location: singin.php'); // Redirect to the login page after successful registration
                exit();
            } else {
                $error[] = 'Error in database operation: ' . mysqli_error($conn);
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>signup</title>
    <link rel="stylesheet" href="css/signup.css" />
    <link rel="icon" type="image/png" href="images/icons/signup.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" name="name" placeholder="Enter your name" required />
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="username" placeholder="Enter your username" required />
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="email" placeholder="Enter your email" required />
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="password" placeholder="Enter your password" required />
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" name="cpassword" placeholder="Confirm your password" required />
                    </div>
                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1" value="M" required />
                    <input type="radio" name="gender" id="dot-2" value="F" required />
                    <input type="radio" name="gender" id="dot-3" value="N" required />
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Prefer not to say</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Register" />
                </div>
                <div class="button">
                    <a href="../index.php"><input type="button" value="back" /></a>
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
    </div>
</body>
</html>
