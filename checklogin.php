<?php
session_start();
mysql_connect("localhost", "root", "1234");
mysql_select_db("aaa");
$strSQL = "SELECT * FROM account WHERE userName = '" . mysql_real_escape_string($_POST['txtuserName']) . "'
	and Password = '" . mysql_real_escape_string($_POST['txtPassword']) . "'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if (!$objResult) {
    echo "Username and Password Incorrect!";
    header("location:login.php");
} else {
    $_SESSION["UserID"] = $objResult["UserID"];

    session_write_close();
    header("location:index1.php");
}
mysql_close();
?>
