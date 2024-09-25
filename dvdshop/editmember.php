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
    if(!isset($_GET['members_id'])){
        header("refresh: 0; url=member.php");
    }
    require 'conn.php';
    $sql = "SELECT * FROM members WHERE members_id='$_GET[members_id]'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    ?>
    <h1>Edit Member</h1><br>
    <form method="post" action="editmembersuccess.php">
        <p>
            <label>ชื่อ</label>
            <input type="text" name="members_id" id="members_id" value="<?=$row['members_id'];?>" hidden>
            <input type="text" name="firstname" id="firstname" value="<?=$row['firstname'];?>" />
        </p>
        <p>
            <label>นามสกุล</label>
            <input type="text" name="lastname" id="lastname" value="<?=$row['lastname'];?>" />
        </p>
        <p>
            <label>ที่อยู่</label>
            <input type="text" name="address" id="address" value="<?=$row['address'];?>" />
        </p>
        <p>
            <label>เบอร์โทร</label>
            <input type="text" name="phone" id="phone" value="<?=$row['phone'];?>" />
        </p>
        
        <input type="submit" value="บันทึก">
        <input type="reset" name="reset" value="ยกเลิก">
    </form>
    <a href='member.php'><button class="buttonhome"> Home</button></a>
        

</body>
</html>