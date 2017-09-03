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
$strSQL = "UPDATE user SET ";
$strSQL .= "idUser = '" . $_POST["txtidUser"] . "' ";
$strSQL .= ",userNames = '" . $_POST["txtuserNames"] . "' ";
$strSQL .= ",passUser = '" . $_POST["txtpassUser"] . "' ";
$strSQL .= ",UserProvince = '" . $_POST["txtUserProvince"] . "' ";
$strSQL .= ",nameDepartUser = '" . $_POST["txtnameDepartUser"] . "' ";
$strSQL .= "WHERE idUser = '" . $_GET["idUser"] . "' ";
$objQuery = mysql_query($strSQL);
mysql_query("SET NAMES UTF8");
if ($objQuery) {
    echo "Save Done.";
    header("location:User.php");
} else {
    echo "Error Save [" . $strSQL . "]";
}
mysql_close($objConnect);
?>
</body>
</html>
