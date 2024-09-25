<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Member page </title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    
</head>
<body>

    <?php
    require 'conn.php';
    $sql = "SELECT * FROM members";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
    ?>

    <h1>Member List</h1><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ชื่อ-นามสกุล</th>
                <th>ที่อยู่</th>
                <th>เบอร์โทร</th>
                <th>แก้ไข</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo"<tr><td>".$row["members_id"]."</td>"."<td>".$row["firstname"]." ".$row["lastname"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["phone"]."</td>"."<td>"."<a href='editmember.php?members_id=".$row["members_id"]."'><button> Edit </button></a>"."</td>";
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
            <a href='insertmember.php'><button class="button_insert"> Insert </button></a>
            <a href='movie.php'><button class="buttongoto"> Go to Movie list -> </button></a>
            </div>
            
</body>
</html>