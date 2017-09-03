<html>
<head>

    <meta http-equiv="content-Type" content="text/html; charset=utf8">
    <title>Edit</title>
</head>
<body>
<form action="saveeditUser.php?idUser=<?php echo $_GET["id"]; ?>" name="frmEdit" method="post">
    <?php
    $objConnect = mysql_connect("localhost", "root", "1234") or die("Error Connect to Database");
    $objDB = mysql_select_db("aaa");
    // $IDtest = $_REQUEST["IDtest"];
    $strSQL = "SELECT * FROM user WHERE idUser = '" . $_GET["id"] . "' ";
    $objQuery = mysql_query($strSQL);
    $objResult = mysql_fetch_array($objQuery);
    mysql_query("SET NAMES UTF8");
    if (!$objResult) {
        echo "Not found idUser=" . $_GET["id"];
    } else {
        ?>
        <table width="1000" border="1">
            <tr>
                <th width="91">
                    <div align="center">id</div>
                </th>
                <th width="198">
                    <div align="center">userName</div>
                </th>
                <th width="100">
                    <div align="center">password</div>
                </th>
                <th width="300">
                    <div align="center">province</div>
                </th>
                <th width="3000">
                    <div align="center">depart</div>
                </th>
            </tr>
            <tr>
                <td>
                    <div align="center"><input type="text" name="txtidUser" size="5"
                                               value="<?php echo $objResult["idUser"]; ?>"></div>
                </td>
                <td><input type="text" name="txtuserNames" size="20" value="<?php echo $objResult["userNames"]; ?>">
                </td>
                <td><input type="text" name="txtpassUser" size="10" value="<?php echo $objResult["passUser"]; ?>"></td>
                <td>
                    <div align="center"><input type="text" name="txtUserProvince" size="20"
                                               value="<?php echo $objResult["UserProvince"]; ?>"></div>
                </td>
                <td align="right"><input type="text" name="txtnameDepartUser" size="60"
                                         value="<?php echo $objResult["nameDepartUser"]; ?>"></td>

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
