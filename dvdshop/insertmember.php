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
    <h1>Insert Member</h1><br>
    <form method="post" action="insertmembersuccess.php">
        <p>
            <label>ID</label>
            <input type="text" name="members_id" id="members_id">
        </p>

        <p>
            <label>ชื่อ</label>
            <input type="text" name="firstname" id="firstname">

        </p>

        <p>
            <label>นามสกุล</label>
            <input type="text" name="lastname" id="lastname">
        </p>

        <p>
            <label>ที่อยู่</label>
            <input type="text" name="address" id="address">
        </p>

        <p>
            <label>เบอร์โทร</label>
            <input type="text" name="phone" id="phone">
        </p>
        
        <input type="submit" value="บันทึก">
        <input type="reset" name="reset" value="ยกเลิก">
    </form>
    <a href='member.php'> <button class="buttonhome"> Home </button></a>

</body>
</html>