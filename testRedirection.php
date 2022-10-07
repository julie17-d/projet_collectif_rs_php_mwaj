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
        if (isset($_POST["movies"])) {
            $movies = $_POST["movies"];

            echo $movies[0]['title'] . " " . $movies[0]['year'];
        }

        echo "<a href=\"./moviePage.php/?imdbId=" . urlencode($movies[0]['imdbId']) . "\">" . $movies[0]['title'] . "</a>";
    ?>

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</body>
</html>