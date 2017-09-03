<html>
<head>

    <meta http-equiv="content-Type" content="text/html; charset=utf8">
    <title>Edit</title>
</head>
<body>
<form action="saveEdittest.php?ID=<?php echo $_GET["id"]; ?>" name="frmEdit" method="post">
    <?php
    $objConnect = mysql_connect("localhost", "root", "1234") or die("Error Connect to Database");
    $objDB = mysql_select_db("aaa");
    // $IDtest = $_REQUEST["IDtest"];
    $strSQL = "SELECT * FROM test WHERE ID = '" . $_GET["id"] . "' ";
    $objQuery = mysql_query($strSQL);
    $objResult = mysql_fetch_array($objQuery);
    mysql_query("SET NAMES UTF8");
    if (!$objResult) {
        echo "Not found id=" . $_GET["id"];
    } else {
        ?>
        <table width="1000" border="1">
            <tr>
                <th width="91">
                    <div align="center">ข้อที่</div>
                </th>
                <th width="300">
                    <div align="center">หัวข้อ</div>
                </th>
                <th width="300">
                    <div align="center">รายละเอียก</div>
                </th>
            </tr>
            <tr>
                <td>
                    <div align="center"><input type="text" name="txtID" size="5"
                                               value="<?php echo $objResult["ID"]; ?>"></div>
                </td>
                <td><input type="text" name="txthead" size="20" value="<?php echo $objResult["head"]; ?>"></td>
                <td><input type="text" name="txtex" size="20" value="<?php echo $objResult["ex"]; ?>"></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="submit">
        <?php
    }
    mysql_close($objConnect);
    ?>
</form>
</body>
</html>
