<html>
<head>

    <meta http-equiv="content-Type" content="text/html; charset=utf8">
    <title>Edit</title>
</head>
<body>
<form action="saveEditaccount.php?idDepart=<?php echo $_GET["idDepart"]; ?>" name="frmEdit" method="post">
    <?php
    $objConnect = mysql_connect("localhost", "root", "1234") or die("Error Connect to Database");
    $objDB = mysql_select_db("aaa");
    // $idDepart = $_REQUEST["idDepart"];
    $strSQL = "SELECT * FROM account WHERE idDepart = '" . $_GET["idDepart"] . "' ";
    $objQuery = mysql_query($strSQL);
    $objResult = mysql_fetch_array($objQuery);
    mysql_query("SET NAMES UTF8");

    if (!$objResult) {
        echo "Not found idDepart=" . $_GET["idDepart"];
    } else {
        ?>
        <table width="1000" border="1">
            <tr>
                <th width="91">
                    <div align="center">idDepart</div>
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
                    <div align="center"><input type="text" name="txtidDepart" size="5"
                                               value="<?php echo $objResult["idDepart"]; ?>"></div>
                </td>
                <td><input type="text" name="txtuserName" size="20" value="<?php echo $objResult["userName"]; ?>"></td>
                <td><input type="text" name="txtpassword" size="10" value="<?php echo $objResult["password"]; ?>"></td>
                <td>
                    <div align="center"><input type="text" name="txtprovince" size="20"
                                               value="<?php echo $objResult["province"]; ?>"></div>
                </td>
                <td align="right"><input type="text" name="txtnameDepart" size="60"
                                         value="<?php echo $objResult["nameDepart"]; ?>"></td>

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
