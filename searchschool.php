<html>
<head>
    <title>หาข้อมูลโรงเรียน</title>
</head>
<body>
<form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
    <table width="599" border="1">
        <tr>
            <th>Keyword
                <input name="txtKeyword" type="text" id="txtKeyword">
                <input type="submit" value="Search"></th>
        </tr>
    </table>
</form>
<?php
if (isset($_GET["txtKeyword"])) {
    $objConnect = mysql_connect("localhost", "root", "1234") or die("Error Connect to Database");
    $objDB = mysql_select_db("aaa");
    // Search By Name or Email
    $strSQL = "SELECT * FROM school WHERE ( schName LIKE '%" . $_GET["txtKeyword"] . "%' or schDepart LIKE '%" . $_GET["txtKeyword"] . "%' )";
    $objQuery = mysql_query($strSQL) or die ("Error Query [" . $strSQL . "]");
    ?>
    <table width="600" border="1">
        <tr>
            <th width="91">
                <div align="center">Id</div>
            </th>
            <th width="98">
                <div align="center">Name</div>
            </th>
            <th width="198">
                <div align="center">Canteen</div>
            </th>
            <th width="97">
                <div align="center">Depart</div>
            </th>
            <th width="59">
                <div align="center">Student</div>
            </th>
            <th width="71">
                <div align="center">Address</div>
            </th>
        </tr>
        <?php
        while ($objResult = mysql_fetch_array($objQuery)) {
            ?>
            <tr>
                <td>
                    <div align="center"><?php echo $objResult["schId"]; ?></div>
                </td>
                <td><?php echo $objResult["schName"]; ?></td>
                <td><?php echo $objResult["schCanteenName"]; ?></td>
                <td>
                    <div align="center"><?php echo $objResult["schDepart"]; ?></div>
                </td>
                <td align="right"><?php echo $objResult["schStudentNum"]; ?></td>
                <td align="right"><?php echo $objResult["schAddress"]; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
    mysql_close($objConnect);
}
?>
</body>
</html>
