<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-Type" content="text/html; charset=utf8">
    <title>Save</title>
</head>
<body>

<?php
$objConnect = mysql_connect("localhost", "root", "1234") or die("Error Connect to Database");
$objDB = mysql_select_db("aaa");
$strSQL = "INSERT INTO hospital ";
$strSQL .= "(hptId,hptName,hptCanteenName,hptDepart)";
$strSQL .= "VALUES ";
$strSQL .= "('" . $_POST["txthptId"] . "','" . $_POST["txthptSurveyDate"] . "','" . $_POST["txthptSurvey"] . "','" . $_POST["txthptName"] . "','" . $_POST["txthptCanteenName"] . "' ";
$strSQL .= ",'" . $_POST["txthptDepart"] . "','" . $_POST["hptStaffNum"] . "','" . $_POST["txthptAddress"] . "','" . $_POST["txthptClient"] . "','" . $_POST["txthptChef"] . "'
,'" . $_POST["txthptTain"] . "','" . $_POST["txtService"] . "','" . $_POST["txthptLuch"] . "','" . $_POST["txthptSurvey"] . "') ";
$objQuery = mysql_query($strSQL);
mysql_query("SET NAMES UTF8");
if ($objQuery) {
    echo "Save Done.";
    header("location:hospital.php");
} else {
    echo "Error Save [" . $strSQL . "]";
}
mysql_close($objConnect);
?>
</body>
</html>
