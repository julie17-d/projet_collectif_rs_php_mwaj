<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../movie_page/j.css">
</head>

<body>
    <div class="main">
        <?php
        $title = urldecode($_GET["title"]);
        $year = urldecode($_GET["year"]);
        $type = urldecode($_GET["type"]);
        $poster = urldecode($_GET["poster"]);
        $imdbId = urldecode($_GET["imdbId"]);

        echo "<h1><div class='movieLink'>$title ($year)</h1>";
        echo "<img src=$poster/></div>";

        $connect = mysqli_connect("localhost", "root", "root", "reso_social");
        if (!$connect) {
            die(mysqli_connect_error());
        } else {
            $critiques = mysqli_query($connect, "SELECT * FROM `critiques` WHERE `imdbId` = '$imdbId'");
            if (!$critiques) {
                echo mysqli_error($connect);
            } else {
                echo "<div class='critiques'><div class='movieLink'><br><h2>Critiques from the community:</h2>";
                while ($data = mysqli_fetch_array($critiques)) {
                    if ($data != "") {
                        $author = $data["author"];
                        $content = $data["content"];
                        $rating = $data["rating"];

                        echo "<br><h3>$author:</h3> $content ($rating stars)";
                    }
                }
                echo "</div>";
            };
        };
        ?>

        <div class="movieLink">
            <h2>Nouvelle Critique</h2>
            <!-- action; c'est le fichier vers lequel la requete est envoyé et method; c'est le type de requete(POST ou GET mais POST est plus sécurisé!) -->
            <form method="POST">
                <label for="author">Author: </label>
                <br>
                <input type="text" id="author" name="author">
                <br>
                <textarea type="input" id="content" name="content" placeholder="content"></textarea>
                <br>
                <label for="rating">Rating:</label>
                <select name="rating" id="rating">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br><button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
    <?php
    if (isset($_POST["submit"])) { #isset permet de verifier qu'une requete post est faite et si pas de requete post, ca ne rentre pas dans le if
        $author = $_POST["author"];
        $content = $_POST["content"];
        $rating = $_POST["rating"];
        //$_POST est une variable globale qui stocke toutes les donnes des requetes POST, c'est un tableau []

        $mysqlconnect = mysqli_connect("localhost", "root", "root", "reso_social");
        //Verification de la connexion si elle est vide ca affiche une erreur de connection
        if (!$mysqlconnect) {
            die(mysqli_connect_error());
        } else {
            $insert = mysqli_query($mysqlconnect, "INSERT INTO `critiques`(`author`, `content`, `rating`, `imdbId`) VALUES ('$author','$content','$rating', '$imdbId')");
            if (!$insert) {
                echo mysqli_error($mysqlconnect);
            }
        }
    }
    ?>
    </div>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</body>

</html>