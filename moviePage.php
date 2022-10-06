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
        $imdbId = $_GET["imdbId"];

        $connect = mysqli_connect("localhost", "root", "root", "reso_social");
        if (!$connect) {
            die(mysqli_connect_error());
        } else {
            $critiques = mysqli_query($connect, "SELECT * FROM `critiques` WHERE `imdbId` = '$imdbId'");
            if(!$critiques){
                echo mysqli_error($connect);
            } else {
                $data = mysqli_fetch_array($critiques);

                $author = $data["author"];
                $content = $data["content"];
                $rating = $data["rating"];
            };
        };
    ?>
    
    <script src="moviepage.js"></script>
</body>
</html>