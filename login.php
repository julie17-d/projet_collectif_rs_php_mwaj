


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
<?php
if($_SERVER ["REQUEST_METHOD"]== POST){
    $host = "localhost";
    $username = "root";
    $passeword ="root";
    $database="reso_social";

    $name = $_POST ["name"];

    if(!isset($name)){
        die("rentrez votre nom");
    }
    $mysqli = new mysqli($host, $username, $password, $database);
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
      }  

      $statement = $mysqli->prepare("INSERT INTO users_table(name) VALUES($name)");
      $statement->bind_param('ss', $name); 
    
    if($statement->execute()){
      print "Salut " . $name . "!, votre adresse e-mail est ";
    }else{
      print $mysqli->error; 
    }
  } 

?>