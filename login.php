<?php 
$connect = mysqli_connect("localhost","root","root","reso_social");
if(isset($_POST["submit"])){
    // var_dump ($_POST);
    if (!empty($_POST["name"]) && !empty($_POST['email']) && !empty ($_POST['password'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
        // var_dump ($name, $email, $password);
        if (!$connect) {
            die(mysqli_connect_error());
        }else{$insert=mysqli_query($connect,"INSERT INTO `users_table`(`name`, `email`,`password`) VALUES ('$name', '$email', '$password')" );
            if(!$insert){
                echo mysqli_error($connect);
            };
    // }else{
        // echo "Veuillez compléter tous les champs";
        }
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
            <img src="images/left_small2.jpg" alt="affiches films">
        </div>

        <div class="right">
            <img src="images/right20.jpg" alt="film">
            <div class="login-box">
                <h2>Login</h2>
                <form action="login.php" method="POST">

                    <div class="user-box">
                        <label for="name">Your Name</label>
                        <input type="text" name="name">
                    </div>

                    <div class="user-box">
                        <label for="name">Password</label>
                        <input type="text" name="password">
                    </div>
        
                    <div class="button-form">
        
                        <a id="submit" href="#">
                            Submit
                        </a>
        
                        <div id="register">
                            Don't have an account ?
                            <a href="signup.php">
                                Register
                            </a>
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