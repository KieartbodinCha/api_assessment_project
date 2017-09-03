<html>
<head>
    <title>save</title>
</head>
<body>
<?php
mysql_query("SET NAMES UTF8");
$objConnect = mysql_connect("localhost", "root", "1234") or die("Error Connect to Database");
$objDB = mysql_select_db("aaa");
$strSQL = "UPDATE account SET ";
$strSQL .= "idDepart = '" . $_POST["txtidDepart"] . "' ";
$strSQL .= ",userName = '" . $_POST["txtuserName"] . "' ";
$strSQL .= ",password = '" . $_POST["txtpassword"] . "' ";
$strSQL .= ",province = '" . $_POST["txtprovince"] . "' ";
$strSQL .= ",nameDepart = '" . $_POST["txtnameDepart"] . "' ";
$strSQL .= "WHERE idDepart = '" . $_GET["idDepart"] . "' ";
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
