<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $movies = urldecode($_GET["movies"]);
        
        echo $movies[0]["title"];

        echo "toto";
        // echo $title;
        if (isset($_GET["movies"])) {
            echo "test";
        }

        // echo "<a href=\"./moviePage.php?imdbId=" . urlencode($imdbId) . "\">" . $title . "</a>";
    ?>

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</body>
</html>