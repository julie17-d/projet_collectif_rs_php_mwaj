<?php 
$connect = mysqli_connect("localhost","root","root","reso_social");
if(isset($_POST["submit"])){
    // var_dump ($_POST);
    if (!empty($_POST["name"]) && !empty($_POST['email']) && !empty($_POST['password'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
       // $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
        // var_dump ($name, $email, $password);
        if (!$connect) {
            die(mysqli_connect_error());
        }else{$insert=mysqli_query($connect,"INSERT INTO `users_table`(`name`, `email`, `password`) VALUES ('$name', '$email', '$password')" );
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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <form action="signup.php" method="POST">
        <div>
            <label for="name">Your Name</label>
            <input type="text" name="name">
            <br>
        </div>
        
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" autocomplete="off">
            <br>
        </div>
        
        <div>
            <label for="pasword">Password</label>
            <input type="password" name="password" autocomplete="off">
            <br>
        </div>

        <!-- <div>
            <label for="re-enter password">Re-enter Password</label>
            <input type="text" name="re-enter password" autocomplete="off">
            <br>
        </div> -->

        <button type="submit" name="submit">Create your account</button>
    </form>
</body>

</html>

<!-- hachage mdp, protèger le pseudo, mdp cacher, cookies, css bootstrap -->