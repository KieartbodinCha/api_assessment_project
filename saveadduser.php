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
$objSet = mysql_query("SET NAMES UTF8");
$strSQL = "INSERT INTO user ";
$strSQL .= "(idUser,userNames,passUser,UserProvince,nameDepartUser)";
$strSQL .= "VALUES ";
$strSQL .= "('" . $_POST["txtidUser"] . "','" . $_POST["txtuserNames"] . "','" . $_POST["txtpassUser"] . "' ";
$strSQL .= ",'" . $_POST["txtUserProvince"] . "','" . $_POST["txtnameDepartUser"] . "') ";
$objQuery = mysql_query($strSQL);

if ($objQuery) {
    echo "Save Done.";
    header("location:user.php");
} else {
    echo "Error Save [" . $strSQL . "]";
}
mysql_close($objConnect);
?>
</body>
</html>
