<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-Type" content="text/html; charset=utf8">
    <title>Add</title>
</head>
<body>
<form action="saveaddhpt.php" name="frmAdd" method="post">
    <table width="1000" border="1">
        <tr>
            <th width="10">
                <div align="center">ที่</div>
            </th>
            <th width="70">
                <div align="center">วัน/เดือน/ปีที่สำรวจ</div>
            </th>
            <th width="20">
                <div align="center">สำรวจครั้งที่</div>
            </th>
            <th width="150">
                <div align="center">ชื่อโรงเรียน</div>
            </th>
            <th width="150">
                <div align="center">ชื่อโรงอาหาร</div>
            </th>
            <th width="150">
                <div align="center">สังกัด</div>
            </th>
            <th width="50">
                <div align="center">จำนวนพนักงาน</div>
            </th>
            <th width="400">
                <div align="center">ที่อยู่</div>
            </th>
            <th width="50">
                <div align="center">ผู้รับบริการ</div>
            </th>
            <th width="50">
                <div align="center">ผู้สัมผัสอาหาร</div>
            </th>
            <th width="20">
                <div align="center">การอบรมด้านสุขาภิบาล</div>
            </th>
            <th width="20">
                <div align="center">ลักษณะการให้บริการ</div>
            </th>
            <th width="20">
                <div align="center">การจัดโครงการอาหารกลางวัน</div>
            </th>
            <th width="70">
                <div align="center">ผู้สำรวจ</div>
            </th>
        </tr>
        <tr>
            <td>
                <div align="center"><input type="text" name="txthptId" size="5"></div>
            </td>
            <td><input type="text" name="txthptSurveyDate" size="7"></td>
            <td><input type="text" name="txthptSurvey" size="7"></td>
            <td><input type="text" name="txthptName" size="7"></td>
            <td><input type="text" name="txthptCanteenName" size="5"></td>
            <td>
                <div align="center"><input type="text" name="txthptDepart" size="15"></div>
            </td>
            <td>
                <div align="center"><input type="text" name="hptStaffNum" size="5"></div>
            </td>
            <td><input type="text" name="txthptAddress" size="7"></td>
            <td><input type="text" name="txthptClient" size="7"></td>
            <td><input type="text" name="txthptChef" size="7"></td>
            <td><input type="text" name="txthptTain" size="7"></td>
            <td><input type="text" name="txtService" size="7"></td>
            <td><input type="text" name="txthptLuch" size="7"></td>
            <td><input type="text" name="txthptSurvey" size="7"></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>
