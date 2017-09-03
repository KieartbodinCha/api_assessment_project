<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>รูปภาพ</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "aaa";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$ID = $_REQUEST["ID"];
$sql = "DELETE FROM pic WHERE ID = $ID";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("location:chart.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
</body>
</html>
