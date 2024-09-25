<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_success.css">
    
</head>
<body>
    <div>
        <div>
            <div>
                <?php
                require 'conn.php';
                $sql_update="UPDATE members SET firstname='$_POST[firstname]',lastname='$_POST[lastname]' ,address='$_POST[address]' ,phone='$_POST[phone]' WHERE members_id='$_POST[members_id]' ";
                $result= $conn->query($sql_update);
                if(!$result) {
                    die("Error God Damn it : ". $conn->error);
                } else {
                echo "<div> Edit member Success </div>";
                header("refresh: 1; url=member.php");
                }
                ?>
            </div>
        </div>
    </div>
    

</body>
</html>