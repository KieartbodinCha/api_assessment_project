<?php
session_start();
if ($_SESSION['UserID'] == "") {
    echo "Please Login!";
    exit();
}
mysql_connect("localhost", "root", "1234");
mysql_select_db("aaa");
$strSQL = "SELECT * FROM account WHERE id = '" . $_SESSION['UserID'] . "' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_query($objQuery);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ติดต่อเรา</title>
    <link rel="stylesheet" href="file/css/add.css">
    <link href="http://fonts.googleapis.com/css?family=Bitter&subset=latin" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="file\css\view1.css" media="all">
    <script type="text/javascript" src="file\js\view1.js"></script>

</head>
<body>
<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="navbar-top">
            <img src="1\HTML\assets\images\header.jpg">
        </div>

        <div class="ultimatedropdown">
            <ul>
                <li><a href="index1.php">หน้าหลัก</a></li>
                <li><a href="javascript:vold(0)">การประเมิน</a>
                    <ul>
                        <li><a href="school.php">การประเมินโรงเรียน</a></li>
                        <li><a href="hospital.php">การประเมินโรงพยาบาล</a></li>
                        <li><a href="test.php">มาตราฐานการประเมิน</a></li>
                    </ul>
                </li>
                <li><a href="javascript:vold(0)">ข้อมูลสมาชิก</a>
                    <ul>
                        <li><a href="addmin.php">ข้อมูลแอดมิน</a></li>
                        <li><a href="User.php">ข้อมูลผู้ใช้</a></li>
                    </ul>
                </li>
                <li><a href="chart.php">รูปภาพ</a></li>
                <li><a href="content.php">ติดต่อเรา</a></li>
                <li><a href="logout.php">ออกจากระบบ</a></li>
            </ul>
            <br style="clear: left"/>
        </div>
    </nav>
</header> <!-- /. main-header -->

<img id="top" src="1\HTML\assets\images\top.png" alt="">
<div id="form_container">

    <h1><a>ติดต่อเรา</a></h1>
    <form id="form_869" class="appnitro" method="post" action="">
        <div class="form_description">
            <h2>ติดต่อเรา</h2>
            <p></p>
        </div>
        <ul>
            <li id="li_6">
                <label class="description" for="element_6">คำนำหน้า </label>
                <span>
    			<input id="element_6_1" name="element_6" class="element radio" type="radio" value="1"/>
          <label class="choice" for="element_6_1">นาย</label>
          <input id="element_6_2" name="element_6" class="element radio" type="radio" value="2"/>
          <label class="choice" for="element_6_2">นาง</label>
          <input id="element_6_3" name="element_6" class="element radio" type="radio" value="3"/>
          <label class="choice" for="element_6_3">นางสาว</label>
    		</span>
            </li>
            <li id="li_1">
                <label class="description" for="element_1">ชื่อ </label>
                <span>
					<input id="element_1_1" name="element_1_1" class="element text" maxlength="255" size="8" value=""/>
					<label>ชื่อต้น</label>
					</span>
                <span>
					<input id="element_1_2" name="element_1_2" class="element text" maxlength="255" size="14" value=""/>
					<label>นามสกุล</label>
					</span>
            </li>
            <li id="li_5">
                <label class="description" for="element_5">หัวข้อ </label>
                <div>
                    <select class="element select medium" id="element_5" name="element_5">
                        <option value="" selected="selected"></option>
                        <option value="1">สอบถามข้อมูลทั่วไป</option>
                        <option value="2">เสนอแนะการให้บริการ</option>
                        <option value="3">สอบถามข้อมูลการใช้งานเว็บไซต์</option>
                        <option value="4">เสนอแนะการปรับปรุงเว็บ</option>
                        <option value="5">ฝากข่าวประชาสัมพันธ์</option>
                    </select>
                </div>
            </li>
            <li id="li_2">
                <label class="description" for="element_2">รายละเอียด </label>
                <div>
                    <textarea id="element_2" name="element_2" class="element textarea medium"></textarea>
                </div>
            </li>
            <li id="li_3">
                <label class="description" for="element_3">อีเมล</label>
                <div>
                    <input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255"
                           value=""/>
                </div>
                <p class="guidelines" id="guide_3">
                    <small>โปรดกรอกข้อมูลเพื่อให้เราสามารถตอบกลับท่านได้</small>
                </p>
            </li>
            <li id="li_4">
                <label class="description" for="element_4">วัน-เวลาที่สะดวกให้ติดต่อกลับ </label>
                <div>
                    <input id="element_4" name="element_4" class="element text medium" type="text" maxlength="255"
                           value=""/>
                </div>
                <p class="guidelines" id="guide_4">
                    <small>โปรดระบุ</small>
                </p>
            </li>

            <li class="buttons">
                <input type="hidden" name="form_id" value="869"/>

                <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit"/>
            </li>
        </ul>
    </form>
</div>

<?php

?>

<br>
<br>
<br>
<br>
<br>
<div>
    <footer class="main-footer">
        <div class="logo">
            <center><img src="1\HTML\assets\images\logo_1.1.png" width="90px" height="120px">
                <img src="1\HTML\assets\images\มน.png" width="100px" height="100px"></center>
        </div>
        <center><p>COPRJGHT@2016 กลุ่มวิจัยด้านเทคโนโลยีสารสนเทศเพื่อการพัฒนาระบบชุมชน (TI4CD)</p></center>
        <center><p>ภาควิชาวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ คณะวิทยาศาศตร์ มหาวิทยาลัยนเรศวร จังหวัดพิษณุโลก</p>
        </center>
    </footer> <!-- main-footer -->
</div>
<script src="1/HTML/assets/js/bootstrap.min.js"></script>
<script src="1/HTML/assets/js/jquery.prettyPhoto.js"></script>
</body>
</html>
