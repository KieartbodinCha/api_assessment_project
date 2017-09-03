<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-Type" content="text/html; charset=utf8">
    <title>School</title>
</head>
<body>
<h1>รายชื่อโรงเรียน</h1>
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

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        ?>
        <p>โรงเรียนที่ <?php echo $row["schId"]; ?></p><br>
        <p>ชื่อโรงเรียน <?php echo $row["schName"]; ?></p><br>
        <p>ชื่อโรงอาหาร <?php echo $row["schCanteenName"]; ?></p><br>
        <p>สังกัด <?php echo $row["schDepart"]; ?></p><br>
        <p>จำนวนนักเรียน <?php echo $row["	schStudentNum"]; ?></p><br>
        <p>ที่อยู่ <?php echo $row["schAddress"]; ?></p><br>
        <p>จำนวนผู้ใช้บริการ <?php echo $row["schCustomer"]; ?> ต่อวัน</p><br>
        <p>จำนวนผู้ให้บริการ <?php echo $row["schMonger"]; ?> ต่อวัน</p><br>
        <p>ชื่อผู้สำรวจ <?php echo $row["schNameSurvey"]; ?></p><br>
        <p>วันที่สำรวจ <?php echo $row["schSurveyDate"]; ?></p><br>
        <p>การอบรมด้านสุขาภิบาล <?php echo $row["schDepart"]; ?></p><br>


        <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<br>
<A HREF="index.html">กลับ</A>
</body>
</html>
