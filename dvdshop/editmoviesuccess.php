<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style_success.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card">
            <div class="card-body text-center">
                <?php
                require 'conn.php';
                $sql_update="UPDATE movies SET movie_title='$_POST[movie_title]' ,release_year='$_POST[release_year]' ,cast='$_POST[cast]' ,price='$_POST[price]' ,time='$_POST[time]' WHERE movies_id='$_POST[movies_id]' ";
                $result= $conn->query($sql_update);
                if(!$result) {
                    die("Error God Damn it : ". $conn->error);
                } else {
                echo "<div class='alert alert-success'> Success </div>";
                header("refresh: 1; url=movie.php");
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>