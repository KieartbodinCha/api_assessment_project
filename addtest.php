<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>addTest</title>
</head>
<body>
<?php mysql_query("SET NAMES UTF8"); ?>

<form action="savetest.php" name="frmAdd" method="post">
    <table width="1000" border="1">
        <tr>
            <th width="50">
                <div align="center"> ข้อที่</div>
            </th>
            <th width="255">
                <div align="center">หัวข้อ</div>
            </th>
            <th width="255">
                <div align="center">รายละเอียด</div>
            </th>
        </tr>
        <tr>
            <td><input type="text" name="txtID" size="10"></td>
            <td><input type="text" name="txtex" size="60"></td>
            <td><input type="text" name="txthead" size="100"></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>
