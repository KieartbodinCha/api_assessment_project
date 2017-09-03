<!DOCTYPE html>
<html>
<head>

    <meta charset="utf8">
    <title>Save</title>
</head>
<body>

<?php
$objConnect = mysql_connect("localhost", "root", "1234") or die("Error Connect to Database");
$objDB = mysql_select_db("aaa");
$strSQL = "INSERT INTO account ";
$strSQL .= "(idDepart,userName,password,province,nameDepart)";
$strSQL .= "VALUES ";
$strSQL .= "('" . $_POST["txtidDepart"] . "','" . $_POST["txtuserName"] . "','" . $_POST["txtpassword"] . "' ";
$strSQL .= ",'" . $_POST["txtprovince"] . "','" . $_POST["txtnameDepart"] . "') ";
$objQuery = mysql_query($strSQL);
mysql_query("SET NAMES UTF8");
if ($objQuery) {
    echo "Save Done.";
    header("location:addmin.php");
} else {
    echo "Error Save [" . $strSQL . "]";
}
mysql_close($objConnect);
?>
</body>
</html>
