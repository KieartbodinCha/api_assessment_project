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
$strSQL = "UPDATE test SET ";
$strSQL .= "ID = '" . $_POST["txtID"] . "' ";
$strSQL .= ",head = '" . $_POST["txthead"] . "' ";
$strSQL .= ",ex = '" . $_POST["txtex"] . "' ";
$strSQL .= "WHERE ID = '" . $_GET["ID"] . "' ";
$objQuery = mysql_query($strSQL);
mysql_query("SET NAMES UTF8");
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
