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

<form action="insertpromotionsucces.php" method="GET">
<p>
<label for="PromotionID"> รหัสโปรโมชั่น </label>
<input type="text" name="PromotionID" id="PromotionID" value=""/>
</p>
<p>
<label for="PromotionName">ชื่อโปรโมชั่น</label>
<input type="text" name="PromotionName" id="PromotionName" value="" />
</p>
<p>
<label for="CDate">วันเริ่มโปร</label>
<input type="Date" name="CDate" id="CDate" value="" />
</p>
<p>
<label for="ModDate">วันหมดโปร</label>
<input type="Date" name="ModDate" id="ModDate" value="" />
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