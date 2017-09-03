<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Save</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost", "root", "1234") or die("Error Connect to Database");
$objDB = mysql_select_db("aaa");
$strSQL = "INSERT INTO test ";
$strSQL .= "(ID,ex,head)";
$strSQL .= "VALUES";
$strSQL .= "('" . $_POST["txtID"] . "','" . $_POST["txtex"] . "','" . $_POST["txthead"] . "') ";
$objQuery = mysql_query($strSQL);
$conn->set_charset("utf8");
if ($objQuery) {
    echo "Save Done.";
    header("location:test.php");
} else {
    echo "Error Save [" . $strSQL . "]";
}
mysql_close($objConnect);
?>
</body>
</html>
