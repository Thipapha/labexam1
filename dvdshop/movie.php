<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Movies page </title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    
</head>
<body>

    <?php
    require 'conn.php';
    $sql = "SELECT * FROM movies";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
    ?>

    <h1>Movies List</h1><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ชื่อภาพยนต์</th>
                <th>ปี</th>
                <th>นักแสดง</th>
                <th>ราคา</th>
                <th>เวลา</th>
                <th>แก้ไข</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo"<tr>
                        <td>".$row["movies_id"]."</td>".
                        "<td>".$row["movie_title"]."</td>".
                        "<td>".$row["release_year"]."</td>".
                        "<td>".$row["cast"]."</td>".
                        "<td>".$row["price"]."</td>".
                        "<td>".$row["time"]."</td>".
                        "<td>"."<a href='editmovie.php?movies_id=".$row["movies_id"]."'><button> Edit </button></a>"."</td>";
                        echo "</tr>";    
                    }
                }
                else {
                    echo "0 results";
                }
                $conn->close();
                ?>
                </tbody>
            </table>
            <br>
            <div class="button_container">
            <a href='insertmovie.php'><button class="button_insert"> Insert </button></a>
            <a href='member.php'><button class="buttongoto"> Go to Member list -> </button></a>
            </div>
            
</body>
</html>