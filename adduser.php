<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-Type" content="text/html; charset=utf8">
    <title>Add</title>
</head>
<body>
<form action="saveadduser.php" name="frmAdd" method="post">
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
                <div align="center"><input type="text" name="txtidUser" size="5"></div>
            </td>
            <td><input type="text" name="txtuserNames" size="20"></td>
            <td><input type="text" name="txtpassUser" size="10"></td>
            <td>
                <div align="center"><input type="text" name="txtUserProvince" size="20"></div>
            </td>
            <td align="right"><input type="text" name="txtnameDepartUser" size="60"></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>
