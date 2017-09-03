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
    <title>Hospital</title>
    <link rel="stylesheet" href="file\css\hos.css">
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

<h1>รายชื่อโรงพยาบาล</h1>
<form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
    <tr>
        <th>ชื่อโรงพยาบาล
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
$strSQL = "SELECT * FROM hospital WHERE ( hptName LIKE '%" . $_GET["txtKeyword"] . "%' )";
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
                    <div align="center"><?php echo $objResult["hptId"]; ?></div>
                </td>
                <td><?php echo $objResult["hptSurveyDate"]; ?></td>
                <td><?php echo $objResult["hptSurvey"]; ?></td>
                <td><?php echo $objResult["hptName"]; ?></td>
                <td><?php echo $objResult["hptCanteenName"]; ?></td>
                <td><?php echo $objResult["hptDepart"]; ?></td>
                <td><?php echo $objResult["hptStaffNum"]; ?></td>
                <td><?php echo $objResult["hptAddress"]; ?></td>
                <td><?php echo $objResult["hptDistric"]; ?></td>
                <td><?php echo $objResult["hptProvince"]; ?></td>
                <td><?php echo $objResult["hptClient"]; ?></td>
                <td><?php echo $objResult["hptChef"]; ?></td>
                <td><?php echo $objResult["hptTain"]; ?></td>
                <td><?php echo $objResult["hptService"]; ?></td>
                <td><?php echo $objResult["hptLuch"]; ?></td>
                <td><?php echo $objResult["hptNameSurvey"]; ?></td>
                <td></td>
                <td><A HREF="delsch.php?id=<?php echo $objResult["hptId"]; ?>">ลบ</A></td>
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
        mysql_query("SET NAMES UTF8");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM hospital";
        $result = $conn->query($sql);
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
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                    ?>
                    <tbody>
                    <tr>
                        <td>
                            <div align="center"><?php echo $row["hptId"]; ?></div>
                        </td>
                        <td><?php echo $row["hptSurveyDate"]; ?></td>
                        <td><?php echo $row["hptSurvey"]; ?></td>
                        <td><?php echo $row["hptName"]; ?></td>
                        <td><?php echo $row["hptCanteenName"]; ?></td>
                        <td><?php echo $row["hptDepart"]; ?></td>
                        <td><?php echo $row["hptStaffNum"]; ?></td>
                        <td><?php echo $row["hptAddress"]; ?></td>
                        <td><?php echo $row["hptDistric"]; ?></td>
                        <td><?php echo $row["hptProvince"]; ?></td>
                        <td><?php echo $row["hptClient"]; ?></td>
                        <td><?php echo $row["hptChef"]; ?></td>
                        <td><?php echo $row["hptTain"]; ?></td>
                        <td><?php echo $row["hptService"]; ?></td>
                        <td><?php echo $row["hptLuch"]; ?></td>
                        <td><?php echo $row["hptNameSurvey"]; ?></td>
                        <td></td>
                        <td><A HREF="delhpt.php?id=<?php echo $row["hptId"]; ?>">ลบ</A></td>
                    </tbody>
                    </tr>
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
        <script src="1\HTML\assets/js/bootstrap.min.js"></script>
        <script src="1\HTML\assets/js/jquery.prettyPhoto.js"></script>
</body>
</html>
