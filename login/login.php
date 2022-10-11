<?php
if (isset($_POST['submit'])) {
    $connect = mysqli_connect("localhost", "root", "root", "reso_social");
    $password = $_POST['password'];
    // echo $password;
    $name = $_POST['name'];
    $select_user = "SELECT * FROM users_table WHERE name='$name' AND password='$password'";
    $query = mysqli_query($connect, $select_user);
    $check_user = mysqli_num_rows($query);

    if ($check_user == 1) {
        session_start();
        $_SESSION['name'] = $name;
        header("location:../home_page/home.php");
    } else {
        echo "<script>alert('Your username or your password is incorrect')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styleconnect.css">
    <title>CONNECTION</title>
</head>

<body>
    <div class="affichage">
        <div class="left">
            <img src="../images/left_small2.jpg" alt="affiches films">
        </div>

        <div class="right">
            <img src="../images/right20.jpg" alt="film">
            <div class="login-box">
                <h2>Login</h2>

                <form action="login.php" method="POST">

                    <div class="user-box">
                        <label for="name"></label>
                        <input type="text" name="name">
                    </div>

                    <div class="user-box">
                        <label for="name"></label>
                        <input type="password" name="password">
                    </div>

                    <div class="button-form">

                        <button type="submit" name="submit">Submit</button>

                        <div id="register">
                            Don't have an account ?
                            <a href="../sign_up/signup.php">Register</a>
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>

    <footer>
    </footer>

</body>

</html>