<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-Type" content="text/html; charset=utf8">
    <title>delete</title>
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
$schId = $_REQUEST["id"];
$sql = "DELETE FROM school WHERE schId = $schId";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("location:school.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

</body>
</html>
