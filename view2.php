<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-Type" content="text/html; charset=utf8">
    <title>School</title>
    <!-- <link rel="stylesheet" href="file/css/scss.css"> -->
    <link rel="stylesheet" href="file/css/scss.css">
</head>
<body>
<h1>ข้อมูลโรงเรียน</h1>
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

$sql = "SELECT * FROM school LEFT JOIN schtest ON school.SchTest_Idschtest1 = schtest.Idschtest WHERE schId = '" . $_GET["schId"] . "'";
?>
<div class="datagrid">
    <table width="1000" border="1">
        <thead>
        <tr>
            <th width="10">
                <div align="center">ที่</div>
            </th>
            <th width="120">
                <div align="center">วัน/เดือน/ปีที่สำรวจ</div>
            </th>
            <th width="10">
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
                <div align="center">จำนวนพนักงาน</div>
            </th>
            <th width="400">
                <div align="center">ที่อยู่</div>
            </th>
            <th width="50">
                <div align="center">ผู้รับบริการ</div>
            </th>
            <th width="50">
                <div align="center">ผู้สัมผัสอาหาร</div>
            </th>
            <th width="20">
                <div align="center">การอบรมด้านสุขาภิบาล</div>
            </th>
            <th width="20">
                <div align="center">ลักษณะการให้บริการ</div>
            </th>
            <th width="20">
                <div align="center">การจัดโครงการอาหารกลางวัน</div>
            </th>
            <th width="70">
                <div align="center">ผู้สำรวจ</div>
            </th>
            <th width="70">
                <div align="center">ผลการประเมิน</div>
            </th>
            <th width="50"> ลบ</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td colspan="20">
                <div id="paging">
                    <ul>
                        <li><span><A HREF="school.php">กลับ</A></span></a></li>
                        <li><span><a href="editSchool.php?id=<?php echo $row["schId"]; ?>">แก้ไข</a></span></li>
                    </ul>
        </tfoot>
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                ?>
                <tbody>
                <tr>
                <tbody>
                <tr>
                    <td>
                        <div align="center"><?php echo $row["schId"]; ?></div>
                    </td>
                    <td><?php echo $row["schSurveyDate"]; ?></td>
                    <td><?php echo $row["schSurvey"]; ?></td>
                    <td><?php echo $row["schName"]; ?></td>
                    <td><?php echo $row["schCanteenName"]; ?></td>
                    <td><?php echo $row["schDepart"]; ?></td>
                    <td><?php echo $row["schStudentNum"]; ?></td>
                    <td><?php echo $row["schAddress"]; ?></td>
                    <td><?php echo $row["schCustomer"]; ?></td>
                    <td><?php echo $row["schMonger"]; ?></td>
                    <td><?php echo $row["schTain"]; ?></td>
                    <td><?php echo $row["schService"]; ?></td>
                    <td><?php echo $row["schLuch"]; ?></td>
                    <td><?php echo $row["schSurvey"]; ?></td>
                    <td><?php echo $row["schAbstract"]; ?></td>
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
</body>
</html>
