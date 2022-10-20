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
        <header class="top-footer">
                    <a class="menu" href="main.html">หน้าหลัก</a>
                    <a class="menu" href="selectCustomer.php">ข้อมูลลูกค้า</a>
                    <a class="menu" href="tables.html">สินค้า</a>
                    <a class="menu" href="promotion.html">โปรโมชั่น</a>
                    <a class="menu" href="price.html">ราคา</a>
                    <a class="menu" href="pay.html">รูปแบบการชำระเงิน</a>
                    <a class="menu" href="contact.html">ติดต่อเรา</a>
                    <a class="menu" href="feedback.html">ความคิดเห็น</a>

            </header>
        <div class="Welcome">
        <table class="frame-color"><tr><td>

<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");
$sql_update="SELECT * FROM customer WHERE CustomerId='$_GET[CustomerId]'";
$result=mysqli_query($objConnect ,$sql_update);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="GET" action="editCusSucces.php">
<p>
<label for="CustomerId">รหัสลูกค้าที่จะแก้ไข</label>
<input type="text" name="CustomerId" id="CustomerId" value="<?=$data['CustomerId'];?>"/>
</p>
<p>
<label for="CustomerName">ชื่อลูกค้าที่ต้องการแก้ไข</label>
<input type="text" name="CustomerName" id="CustomerName" value="<?=$data['CustomerName'];?>"/>
</p>
<p>
<label for="Email">อีเมลล์ที่จะแก้ไข</label>
<input type="text" name="Email" id="Email" value="<?=$data['Email'];?>" />
</p>
<p>
<label for="CustomerLocation">ที่อยู่ที่จะแก้ไข</label>
<input type="text" name="CustomerLocation" id="CustomerLocation" value="<?=$data['CustomerLocation'];?>" />
</p>
<p>
<label for="DateOfBirth">วัน/เดือน/ปีเกิด ที่จะแก้ไข</label>
<input type="date" name="DateOfBirth" id="Email" value="<?=$data['DateOfBirth'];?>" />
</p>
<label for="CDate">C-Date ที่จะแก้ไข</label>
<input type="date" name="CDate" id="CDate" value="<?=$data['CDate'];?>" />
</p>
<label for="ModDate">Mod-Date ที่จะแก้ไข</label>
<input type="date" name="ModDate" id="ModDate" value="<?=$data['ModDate'];?>" />
</p>
<label for="Postcode">รหัสไปรษณีย์ที่จะแก้ไข</label>
<input type="text" name="Postcode" id="Postcode" value="<?=$data['Postcode'];?>" />
</p>

<p>
    <input type="submit" value="แก้ไข" >
</p>
</form>

</p>

</td></tr>
</table>

</div>
<footer class="bottom-footer">
                <p style="color: white;">Support by Chatnarong</p>
                <p style="color: white;">licence by Com Science 2020</p>
            </footer>
</body>
</html>