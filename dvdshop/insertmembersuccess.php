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
    $sql_update="INSERT INTO members(members_id,firstname,lastname,address,phone) VALUES ('$_POST[members_id]','$_POST[firstname]','$_POST[lastname]' ,'$_POST[address]' ,'$_POST[phone]')";
    $result= $conn->query($sql_update);     
    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } 
    else {
        echo "Insert Success <br>";
        header("refresh: 1; url=member.php");
    }
    ?>

</body>
</html>