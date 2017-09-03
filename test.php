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
    <title>มาตรฐานการประเมินโรงอาหารและสถานที่ปรุงประกอบ</title>
    <link href="file/css/ts.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Bitter&subset=latin" rel="stylesheet" type="text/css">
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

<h1>มาตรฐานการประเมินโรงอาหารและสถานที่ปรุงประกอบ</h1>
<br>
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "aaa";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
mysql_query("SET NAMES UTF8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM test";
$result = $conn->query($sql);
?>
<div class="datagrid">
    <table width="1000" border="1">
        <thead>
        <tr>
            <th width="30">
                <div align="center">ข้อที่</div>
            </th>
            <th width="300">
                <div align="center">หัวข้อ</div>
            </th>
            <th width="300">
                <div align="center">รายละเอียด</div>
            </th>
            <th width="50"> แก้ไข</th>
            <th width="50"> ลบ</th>
        </tr>
        </thead>
</div>
<tfoot>
<tr>
    <td colspan="5">
        <div id="paging">
            <ul>
                <li><a href="addtest.php"><span>เพิ่ม</span></a></li>
            </ul>
</tfoot>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        ?>
        <tbody>
        <tr>
            <td>
                <div align="center"><?php echo $row["ID"]; ?></div>
            </td>
            <td><?php echo $row["ex"]; ?></td>
            <td><?php echo $row["head"] ?></td>
            <td><A HREF="edittest.php?id=<?php echo $row["ID"]; ?>">แก้ไข</A></td>
            <td><A HREF="deltest.php?id=<?php echo $row["ID"]; ?>">ลบ</A></td>
        </tbody></tr>
        <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</table>
</div>
<br>
<br>
<br>
<br>
<br>
<footer class="main-footer">
    <div class="logo">
        <center><img src="1\HTML\assets\images\logo_1.1.png" width="90px" height="120px">
            <img src="1\HTML\assets\images\มน.png" width="100px" height="100px"></center>
    </div>
    <center><p>COPRJGHT@2016 กลุ่มวิจัยด้านเทคโนโลยีสารสนเทศเพื่อการพัฒนาระบบชุมชน (TI4CD)</p></center>
    <center><p>ภาควิชาวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ คณะวิทยาศาศตร์ มหาวิทยาลัยนเรศวร จังหวัดพิษณุโลก</p>
    </center>
</footer> <!-- main-footer -->

<script src="1/HTML/assets/js/bootstrap.min.js"></script>
<script src="1/HTML/assets/js/jquery.prettyPhoto.js"></script>
</body>
</html>
