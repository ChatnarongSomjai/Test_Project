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
$sql_update="SELECT * FROM Product WHERE PId='$_GET[PId]'";
$result=mysqli_query($objConnect ,$sql_update);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="GET" action="editproductsucces.php">
<p>
<label for="PId">รหัสสินค้า</label>
<input type="text" name="PId" id="PId" value="<?=$data['PId'];?>"/>
</p>
<p>
<label for="ProductName">ชื่อสินค้า</label>
<input type="text" name="ProductName" id="ProductName" value="<?=$data['ProductName'];?>"/>
</p>
<p>
<label for="Price">ราคา</label>
<input type="text" name="Price" id="Price" value="<?=$data['Price'];?>" />
</p>
<p>
<label for="CDate">วันผลิต</label>
<input type="Date" name="CDate" id="CDate" value="<?=$data['CDate'];?>" />
</p>
<p>
<label for="ModDate">วันหมดอายุ</label>
<input type="Date" name="ModDate" id="ModDate" value="<?=$data['ModDate'];?>" />
</p>
<p>
<label for="Deleted">วันที่ลบสินค้า</label>
<input type="Date" name="Deleted" id="Deleted" value="<?=$data['Deleted'];?>" />
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