<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
    <h2>Nouvelle Article</h2>
    <!-- action; c'est le fichier vers lequel la requete est envoyé et method; c'est le type de requete(POST ou GET mais POST est plus sécurisé!) -->
    <form action="form.php" method="POST"> 
        <label for="author">Author : </label>
        <br>
        <input type="text" id="author" name="author">
        <br>
        <input type="text" id="content" name="content" placeholder="content">
        <br>
        <input type="text" id="rating" name="rating">
        <label for="rating">Rating</label>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php 
    if (isset($_POST["submit"])){ #isset permet de verifier qu'une requete post est faite et si pas de requete post, ca ne rentre pas dans le if
            $author = $_POST["author"];
            echo $author;
            $content = $_POST["content"];
            echo $content;
            $rating = $_POST["rating"];
            echo $rating;
            //$_POST est une variable globale qui stocke toutes les donnes des requetes POST, c'est un tableau []
    }
    ?>
    
    
</body>
</html>