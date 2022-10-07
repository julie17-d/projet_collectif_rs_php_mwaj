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
        $title = urldecode($_GET["title"]);
        $year = urldecode($_GET["year"]);
        $type = urldecode($_GET["type"]);
        $poster = urldecode($_GET["poster"]);
        $imdbId = urldecode($_GET["imdbId"]);

        echo "$title ($year)";
        echo "<img src=$poster/>";

        $connect = mysqli_connect("localhost", "root", "root", "reso_social");
        if (!$connect) {
            die(mysqli_connect_error());
        } else {
            $critiques = mysqli_query($connect, "SELECT * FROM `critiques` WHERE `imdbId` = '$imdbId'");
            if(!$critiques){
                echo mysqli_error($connect);
            } else {
                $data = mysqli_fetch_array($critiques);

                if($data != "") {
                    $author = $data["author"];
                    $content = $data["content"];
                    $rating = $data["rating"];

                    echo "$author: $content ($rating stars)";
                }
            };
        };
    ?>
    
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="moviepage.js"></script>
</body>
</html>