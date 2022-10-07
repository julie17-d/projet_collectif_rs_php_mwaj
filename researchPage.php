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

            for ($i=0; $i<count($movies); $i++) {
                echo $movies[$i]['title'] . " " . $movies[$i]['year'];

                echo "<a href=\"./moviePage.php/?imdbId=" . urlencode($movies[$i]['imdbId']) . "&title=" . urlencode($movies[$i]['title']) . "&year=" . urlencode($movies[$i]['year']) . "&poster=" . urlencode($movies[$i]['poster']) . "&type=" . urlencode($movies[$i]['type']) . "\"><img src=\"" . $movies[$i]['poster'] . "\"></a><br>";
            }
        }
    ?>

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</body>
</html>