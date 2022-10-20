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

<form action="insertCusSucces.php" method="GET">
<p>
<label for="CustomerId">รหัสลูกค้า </label>
<input type="text" name="CustomerId" id="CustomerId" value=""/>
</p>
<p>
<label for="CustomerName">ชื่อลูกค้า</label>
<input type="text" name="CustomerName" id="CustomerName" value=""/>
</p>
<p>
<label for="CustomerLocation">ที่อยู่</label>
<input type="text" name="CustomerLocation" id="CustomerLocation" value="" />
</p>
<label for="Email">Email</label>
<input type="Email" name="Email" id="Email" value="" />
</p>
<label for="DateOfBirth">วัน/เดือน/ปี เกิด</label>
<input type="Date" name="DateOfBirth" id="DateOfBirth" value="" />
</p>
<label for="CDate">CDate</label>
<input type="Date" name="CDate" id="CDate" value="" />
</p>
<label for="ModDate">ModDate</label>
<input type="Date" name="ModDate" id="ModDate" value="" />
</p>
<label for="Postcode">รหัสไปษณีย์</label>
<input type="text" name="Postcode" id="Postcode" value="" />
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