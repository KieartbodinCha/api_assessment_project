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
    <meta http-equiv="content-Type" content="text/html; charset=utf8">
    <title>School</title>
    <link rel="stylesheet" href="file/css/scss.css">
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

<h1>รายชื่อโรงเรียน</h1>
<form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">

    <tr>
        <th>ค้นหา
            <input name="txtKeyword" type="text" id="txtKeyword">
            <input type="submit" value="Search"></th>

    </tr>

</form>
<br>
<?php
mysql_query("SET NAMES UTF8");
if (isset($_GET["txtKeyword"]))
{
$objConnect = mysql_connect("localhost", "root", "1234") or die("Error Connect to Database");
$objDB = mysql_select_db("aaa");
$strSQL = "SELECT * FROM school WHERE ( schName LIKE '%" . $_GET["txtKeyword"] . "%' or schDistric LIKE '%" . $_GET["txtKeyword"] . "%' or schDepart LIKE '%" . $_GET["txtKeyword"] . "%' )";
$objQuery = mysql_query($strSQL) or die ("Error Query [" . $strSQL . "]");


?>
<div class="datagrid">
    <table width="1000" border="1">
        <table width="600" border="1">
            <thead>
            <tr>
                <th width="10">
                    <div align="center">ที่</div>
                </th>
                <th width="150">
                    <div align="center">วัน/เดือน/ปีที่สำรวจ</div>
                </th>
                <th width="5">
                    <div align="center">สำรวจครั้งที่</div>
                </th>
                <th width="150">
                    <div align="center">ชื่อโรงเรียน</div>
                </th>
                <th width="150">
                    <div align="center">ชื่อโรงอาหาร</div>
                </th>
                <th width="150">
                    <div align="center">สังกัด</div>
                </th>
                <th width="50">
                    <div align="center">จำนวนนักเรียน</div>
                </th>
                <th width="400">
                    <div align="center">ที่อยู่</div>
                </th>
                <th width="400">
                    <div align="center">อำเภอ</div>
                </th>
                <th width="400">
                    <div align="center">จังหวัด</div>
                </th>
                <th width="50">
                    <div align="center">ผู้รับบริการ</div>
                </th>
                <th width="50">
                    <div align="center">ผู้สัมผัสอาหาร</div>
                </th>
                <th width="5">
                    <div align="center">การอบรมด้านสุขาภิบาล</div>
                </th>
                <th width="5">
                    <div align="center">ลักษณะการให้บริการ</div>
                </th>
                <th width="5">
                    <div align="center">การจัดโครงการอาหารกลางวัน</div>
                </th>
                <th width="70">
                    <div align="center">ผู้สำรวจ</div>
                </th>
                <th width="70">
                    <div align="center">ผลการประเมิน</div>
                </th>
                <th width="10"> ลบ</th>
            </tr>
            <?php
            mysql_query("SET NAMES UTF8");
            while ($objResult = mysql_fetch_array($objQuery))
            {
            ?>
            <tbody>
            <tr>
                <td>
                    <div align="center"><?php echo $objResult["schId"]; ?></div>
                </td>
                <td><?php echo $objResult["schDate"]; ?></td>
                <td><?php echo $objResult["schSurvey"]; ?></td>
                <td><?php echo $objResult["schName"]; ?></td>
                <td><?php echo $objResult["schCanteenName"]; ?></td>
                <td><?php echo $objResult["schDepart"]; ?></td>
                <td><?php echo $objResult["schStudentNum"]; ?></td>
                <td><?php echo $objResult["schAddress"]; ?></td>
                <td><?php echo $objResult["schDistrict"]; ?></td>
                <td><?php echo $objResult["schProvince"]; ?></td>
                <td><?php echo $objResult["schCustomer"]; ?></td>
                <td><?php echo $objResult["schMonger"]; ?></td>
                <td><?php echo $objResult["schTain"]; ?></td>
                <td><?php echo $objResult["schService"]; ?></td>
                <td><?php echo $objResult["schLuch"]; ?></td>
                <td><?php echo $objResult["schNameSurvey"]; ?></td>
                <td></td>
                <td><A HREF="delsch.php?id=<?php echo $objResult["schId"]; ?>">ลบ</A></td>
            </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
        <?php
        mysql_close($objConnect);
        }
        ?>
        <br>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "1234";
        $dbname = "aaa";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        $conn->set_charset("utf8");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM school";
        $result = $conn->query($sql);
        ?>
        <div class="datagrid">
            <table width="1000" border="1">
                <thead>
                <tr>
                    <th width="10">
                        <div align="center">ที่</div>
                    </th>
                    <th width="200">
                        <div align="center">วัน/เดือน/ปีที่สำรวจ</div>
                    </th>
                    <th width="5">
                        <div align="center">สำรวจครั้งที่</div>
                    </th>
                    <th width="150">
                        <div align="center">ชื่อโรงเรียน</div>
                    </th>
                    <th width="150">
                        <div align="center">ชื่อโรงอาหาร</div>
                    </th>
                    <th width="150">
                        <div align="center">สังกัด</div>
                    </th>
                    <th width="50">
                        <div align="center">จำนวนนักเรียน</div>
                    </th>
                    <th width="400">
                        <div align="center">ที่อยู่</div>
                    </th>
                    <th width="400">
                        <div align="center">อำเภอ</div>
                    </th>
                    <th width="400">
                        <div align="center">จังหวัด</div>
                    </th>
                    <th width="50">
                        <div align="center">ผู้รับบริการ</div>
                    </th>
                    <th width="50">
                        <div align="center">ผู้สัมผัสอาหาร</div>
                    </th>
                    <th width="5">
                        <div align="center">การอบรมด้านสุขาภิบาล</div>
                    </th>
                    <th width="5">
                        <div align="center">ลักษณะการให้บริการ</div>
                    </th>
                    <th width="5">
                        <div align="center">การจัดโครงการอาหารกลางวัน</div>
                    </th>
                    <th width="100">
                        <div align="center">ผู้สำรวจ</div>
                    </th>
                    <th width="70">
                        <div align="center">ผลการประเมิน</div>
                    </th>
                    <th width="10"> ลบ</th>
                </tr>
                </thead>
                <?php
                mysql_query("SET NAMES UTF8");
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tbody>
                        <tr>
                            <td>
                                <div align="center"><?php echo $row["schId"]; ?></div>
                            </td>
                            <td><?php echo $row["schDate"]; ?></td>
                            <td><?php echo $row["schSurvey"]; ?></td>
                            <td><?php echo $row["schName"]; ?></td>
                            <td><?php echo $row["schCanteenName"]; ?></td>
                            <td><?php echo $row["schDepart"]; ?></td>
                            <td><?php echo $row["schStudentNum"]; ?></td>
                            <td><?php echo $row["schAddress"]; ?></td>
                            <td><?php echo $row["schDistrict"]; ?></td>
                            <td><?php echo $row["schProvince"]; ?></td>
                            <td><?php echo $row["schCustomer"]; ?></td>
                            <td><?php echo $row["schMonger"]; ?></td>
                            <td><?php echo $row["schTain"]; ?></td>
                            <td><?php echo $row["schService"]; ?></td>
                            <td><?php echo $row["schLuch"]; ?></td>
                            <td><?php echo $row["schNameSurvey"]; ?></td>
                            <td></td>
                            <td><A HREF="delsch.php?id=<?php echo $row["schId"]; ?>">ลบ</A></td>
                        </tr>
                        </tbody>
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
            <center><p>ภาควิชาวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ คณะวิทยาศาศตร์ มหาวิทยาลัยนเรศวร
                    จังหวัดพิษณุโลก</p></center>
        </footer> <!-- main-footer -->

        <script src="1/HTML/assets/js/bootstrap.min.js"></script>
        <script src="1/HTML/assets/js/jquery.prettyPhoto.js"></script>
</body>
</html>
