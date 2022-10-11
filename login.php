<?php
session_start();
$name = "";
$email = "";
$errors=array();

//connection a la database

$db = mysqli_connect('localhost','root','root','reso_social');
if(isset($_POST["submit"])){
    var_dump ($_POST);

//enregistrement de l'utilisateur 

if(isset($_POST ['current_user'])){
    //reception des valeurs entrées par l'utilisateur
    $name = mysqli_real_escape_string($db,$_POST['name']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    

}
//validation et verification des input
if (empty($name)) { array_push($errors, "nom requis"); 
}
if (empty($email)) { array_push($errors, "Email requis"); 
}
if (empty($password)) { array_push($errors, "mot de passe requis"); 
}

//verification si l'utlisateur existe deja ou pas 
$user_check_query = "SELECT * FROM users_table WHERE name = '$name' OR email = '$email'";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result); 

//si l'utilisateur existe 
if ($user) { 
    if ($user['name'] === $name) {
      array_push($errors, "nom existe deja ");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email existe deja ");
    }
  }
  //LOGIN UTILISATEUR
  if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['name']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($name)) {
        array_push($errors, "nom requis");
        echo "NON";
    }
    if (empty($password)) {
        array_push($errors, "Mot de passe requis");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users_table WHERE name='$name' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['name'] = $name;
          $_SESSION['succes'] = "vous etes connectés";
          echo "ok";
          
        }else {
            array_push($errors, "mauvaise combinaison du nom & mot de passe ");
        }
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
                        <label for="name"></label>
                        <input type="text" name="name">
                    </div>

                    <div class="user-box">
                        <label for="name"></label>
                        <input type="text" name="password">
                    </div>
        
                    <div class="button-form">
        
                    <button type="submit" name="submit">SUBMIT</button>
                           
        
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
