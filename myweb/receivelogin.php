<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-image: url("bg1.png");
        background-size: cover;
        background-repeat: no-repeat;
        color: black;
        font-family: 'Courier New', Courier, monospace;
        text-align: center;
    }
    .btnshop{
        font-size: 15px;
        color: black;
        text-align: center;
        padding: 10px 20px;
        border-radius: 20px;
        border: solid 3px #007fbd;
        background-color:#b1d4e5 ;
        width: auto;
        height: 40px;
        align-items: center;
        justify-content: center;
    }
    </style>
</head>
<body>
    <h1 style="text-align: center; color: #239ab9;"> ยินดีต้อนรับ </h1>
        <?php
            $showuser = $_POST['user'];
            echo "Welcome to cs supermarket websit: $showuser";
        ?> 
    <form action="shopping.html" method="post" target="_blank">
    <br>
    shopping click here! <input class="btnshop" type="submit" name="shop" value="shopping here!">
</form>

</body>
</html>



