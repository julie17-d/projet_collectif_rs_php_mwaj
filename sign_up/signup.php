<?php
$connect = mysqli_connect("localhost", "root", "root", "reso_social");
if (isset($_POST["submit"])) {
    // var_dump ($_POST);
    if (!empty($_POST["name"]) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
        // var_dump ($name, $email, $password);
        if (!$connect) {
            die(mysqli_connect_error());
        } else {
            $insert = mysqli_query($connect, "INSERT INTO `login`(`login`, `email`, `password`) VALUES ('$name', '$email', '$password')");
            if (!$insert) {
                echo mysqli_error($connect);
            };
            // }else{
            // echo "Veuillez compléter tous les champs";
            header('location: ../home_page/home.php');
        }
    }
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Sign up</title>
</head>

<body>
    <div class="affichage">
        <div class="left">
        <img src="../images/right20.jpg" alt="film">
            <!-- <img src="../images/left_small2.jpg" alt="affiches films"> -->
        </div>

        <div class="right">
            <img src="../images/left_small2.jpg" alt="affiches films">
            <!-- <img src="../images/right20.jpg" alt="film"> -->
            <div class="signup-box">
            <h2>Sign up</h2>

                <form action="signup.php" method="POST">

                    <div class="user-box">             
                        <input type="text" name="name">
                        <label for="name">Your Name</label>
                        <br>
                    </div>

                    <div class="user-box">
                        
                        <input type="email" name="email" autocomplete="off">
                        <label for="email">Email</label>
                        <br>
                    </div>

                    <div class="user-box">
                        
                        <input type="password" name="password" autocomplete="off">
                        <label for="pasword">Password</label>
                        <br>
                    </div>

                    <!-- <div>
                        <label for="re-enter password">Re-enter Password</label>
                        <input type="text" name="re-enter password" autocomplete="off">
                        <br>
                    </div> -->

                    <button type="submit" name="submit">Create your account</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<!-- hachage mdp, protèger le pseudo, mdp cacher, cookies, css bootstrap -->