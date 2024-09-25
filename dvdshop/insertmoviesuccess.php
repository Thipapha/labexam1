<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style_success.css">
</head>
<body>
    <?php
    require 'conn.php';
    $sql_update="INSERT INTO movies(movies_id,movie_title,release_year,cast,price,time) VALUES ('$_POST[movies_id]','$_POST[movie_title]' ,'$_POST[release_year]' ,'$_POST[cast]','$_POST[price]','$_POST[time]')";
    $result= $conn->query($sql_update);     
    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } 
    else {
        echo "Insert Success <br>";
        header("refresh: 1; url=movie.php");
    }
    ?>

</body>
</html>