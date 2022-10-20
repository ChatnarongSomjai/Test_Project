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

<form action="insertproductsucces.php" method="GET">
<p>
<label for="ProductId">รหัสสินค้า </label>
<input type="text" name="ProductId" id="ProductId" value=""/>
</p>
<p>
<label for="Price">ราคา</label>
<input type="text" name="Price" id="Price" value="" />
</p>
<p>
<label for="ProductName">ชื่อสินค้า</label>
<input type="text" name="ProductName" id="ProductName" value="" />
</p>
<p>
<label for="CDate">วันผลิต</label>
<input type="Date" name="CDate" id="CDate" value="" />
</p>
<p>
<label for="ModDate">วันหมดอายุ</label>
<input type="Date" name="ModDate" id="ModDate" value="" />
</p>
<p>
<label for="Deleted">ลบสินค้า</label>
<input type="Date" name="Deleted" id="Deleted" value=""/>
</p>

<p>
     <input type="submit">
</p>
</form>

</td></tr>
</table>

</div>
<footer class="bottom-footer">
                <p style="color: white;">Support by Chatnarong</p>
                <p style="color: white;">licence by Com Science 2020</p>
            </footer>
</body>
</html>