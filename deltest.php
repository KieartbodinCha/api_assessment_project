<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
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

// sql to delete a record
$IDtest = $_REQUEST["id"];
$sql = "DELETE FROM test WHERE ID = $IDtest";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("location:test.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
</body>
</html>
