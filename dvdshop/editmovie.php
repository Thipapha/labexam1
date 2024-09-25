<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php
    if(!isset($_GET['movies_id'])){
        header("refresh: 0; url=movie.php");
    }
    require 'conn.php';
    $sql = "SELECT * FROM movies WHERE movies_id='$_GET[movies_id]'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    ?>
    <h1>Edit Movie</h1><br>
    <form method="post" action="editmoviesuccess.php">
        <p>
            <label>ชื่อ</label>
            <input type="text" name="movies_id" id="movies_id" value="<?=$row['movies_id'];?>" hidden>
            <input type="text" name="movie_title" id="movie_title" value="<?=$row['movie_title'];?>">
        </p>
        <p>
            <label>ปี</label>
            <input type="text" name="release_year" id="release_year" value="<?=$row['release_year'];?>" />
        </p>
        <p>
            <label>นักแสดง</label>
            <input type="text" name="cast" id="cast" value="<?=$row['cast'];?>" />
        </p>
        <p>
            <label>ราคา</label>
            <input type="text" name="price" id="price" value="<?=$row['price'];?>" />
        </p>
        <p>
            <label>เวลา</label>
            <input type="text" name="time" id="time" value="<?=$row['time'];?>" />
        </p>

        <input type="submit" value="บันทึก">
        <input type="reset" name="reset" value="ยกเลิก">
    </form>
    <a href='movie.php'><button class="buttonhome"> Home</button></a>

</body>
</html>