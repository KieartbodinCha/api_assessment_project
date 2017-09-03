<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-Type" content="text/html; charset=utf8">
    <title>School</title>
    <!-- <link rel="stylesheet" href="file/css/scss.css"> -->
    <link rel="stylesheet" href="file/css/hcss.css">
</head>
<body>
<h1>ข้อมูลโรงพยาบาล</h1>
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

$sql = "SELECT * FROM hospital LEFT JOIN hpttest ON hospital.HptTest_Idhpttest1 = hpttest.Idhpttest";
$result = $conn->query($sql);
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
                        <li><span><A HREF="hospital.php">กลับ</A></span></a></li>
                        <li><span><a href="editHospital.php?id=<?php echo $row["hptId"]; ?>">แก้ไข</a></span></li>
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
                        <div align="center"><?php echo $row["hptId"]; ?></div>
                    </td>
                    <td><?php echo $row["hptSurveyDate"]; ?></td>
                    <td><?php echo $row["hptSurvey"]; ?></td>
                    <td><?php echo $row["hptName"]; ?></td>
                    <td><?php echo $row["hptCanteenName"]; ?></td>
                    <td><?php echo $row["hptDepart"]; ?></td>
                    <td><?php echo $row["hptStaffNum"]; ?></td>
                    <td><?php echo $row["hptAddress"]; ?></td>
                    <td><?php echo $row["hptClient"]; ?></td>
                    <td><?php echo $row["hptChef"]; ?></td>
                    <td><?php echo $row["hptTain"]; ?></td>
                    <td><?php echo $row["hptService"]; ?></td>
                    <td><?php echo $row["hptLuch"]; ?></td>
                    <td><?php echo $row["hptSurvey"]; ?></td>
                    <td><?php echo $row["hptAdstract"]; ?></td>
                    <td><A HREF="delhpt.php?id=<?php echo $row["hptId"]; ?>">ลบ</A></td>
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
