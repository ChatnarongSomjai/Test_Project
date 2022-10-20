<DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Welcome</title>
            <link rel="stylesheet" href="style-login.css">
            <link rel="stylesheet" href="style-table.css">
            <link rel="stylesheet" href="style.css">
        </head>    
        <body style="text-align:center;">
        <div class="Welcome">
        <table class="frame-color"><tr><td>
<?php
    $user_name = $_GET["fname"];
    echo "Welcome <br> $user_name <br>";
    $user_pass = $_GET["pname"];
   // echo "your password is $user_pass <br>";

?>

<br>
<form action="main.html">
<input type="submit" name="sname" value="เข้าสู่ระบบ">
</form>

</td></tr></table>
</div>
</body>
</html>
