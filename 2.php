<?php
session_start();
if ($_SESSION['iduser'] == "") {
    echo "Please Login!";
    exit();
}

mysql_connect("localhost", "root", "12345678");
mysql_select_db("clean");
$strSQL = "SELECT * FROM user WHERE iduser = '" . $_SESSION['iduser'] . "' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ระบบการประเมินโครงการบ้านสะอาด อนามัยดี ชีวีสมบูรณ์</title>
    <link rel="stylesheet" href="css.css"
    />


    <?
    $objConnect = mysql_connect("localhost", "root", "12345678") or die("Error Connect to Database");
    $objDB = mysql_select_db("clean");
    $strSQLG = "SELECT COUNT(*) as pass FROM assessment LEFT OUTER JOIN home ON assessment.home_idhome=home.idhome
LEFT OUTER JOIN user ON assessment.user_iduser=user.iduser WHERE
((choice1+choice2+choice3+choice4+choice5+choice6+choice7+
 choice8+choice9+choice10+choice11+choice12+choice13+choice14+choice15+
 choice16+choice17+choice18+choice19+choice20+choice21+choice22+choice23+
 choice24+choice25+choice26+choice27+choice28+choice29+choice30+choice31+ choice32+choice33+choice34)/34)=1";
    $objQueryG = mysql_query($strSQLG);
    $objResultG = mysql_fetch_array($objQueryG);
    $pass = $objResultG["pass"];

    $strSQLG2 = "SELECT COUNT(*) as nopass FROM assessment LEFT OUTER JOIN home ON
assessment.home_idhome=home.idhome LEFT OUTER JOIN user ON assessment.user_iduser=user.iduser WHERE
((choice1+choice2+choice3+choice4+choice5+choice6+choice7+ choice8+choice9+choice10+choice11+choice12+choice13+choice14+choice15+
  choice16+choice17+choice18+choice19+choice20+choice21+choice22+choice23+ choice24+choice25+choice26+choice27+choice28+choice29+choice30+choice31+
  choice32+choice33+choice34)/34) !=1";
    $objQueryG2 = mysql_query($strSQLG2);
    $objResultG2 = mysql_fetch_array($objQueryG2);
    $nopass = $objResultG2["nopass"];

    ?>


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
    <script>
        $(function () {
            $('#container').highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'กราฟแสดงผลระดับหลังคาเรือนทั้งหมด'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
                            connectorColor: '#000000',
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                series: [{
                    type: 'pie',
                    name: 'service',
                    data: [
                        ['ผ่าน',<?=$pass?>],
                        ['ไม่ผ่าน',<?=$nopass?>]
                    ]
                }]
            });
        });
    </script>


    <style type="text/css">
        body, td, th {
            font-size: 16px;
            font-family: "Comic Sans MS", cursive;
        }
    </style>
</head>

<script language=Javascript>
    function Inint_AJAX() {
        try {
            return new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        } //IE
        try {
            return new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {
        } //IE
        try {
            return new XMLHttpRequest();
        } catch (e) {
        } //Native Javascript
        alert("XMLHttpRequest not supported");
        return null;
    }
    ;

    function dochange(src, val) {
        var req = Inint_AJAX();
        req.onreadystatechange = function () {
            if (req.readyState == 4) {
                if (req.status == 200) {
                    document.getElementById(src).innerHTML = req.responseText; //รับค่ากลับมา
                }
            }
        };
        req.open("GET", "localtion.php?data=" + src + "&val=" + val); //สร้าง connection
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
        req.send(null); //ส่งค่า
    }

    window.onLoad = dochange('province', -1);
</script>

<body>
<table align="center" width="1000" border="0">
    <tr>
        <td><img src="images/homepj.png" width="1200" height="200" alt="thai"/>
            <div id="menubar">
                <div id="menu">
                    <ul id="ulmenu">
                        <li><a href="index.php">หน้าแรก</a></li>
                        <li><a href="home.php">ข้อมูลบ้าน</a></li>
                        <li><a href="user.php">ข้อมูลเจ้าหน้าที่</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropbtn">รายงาน</a>
                            <div class="dropdown-content">
                                <a href="reporthome.php">ระดับหลังคาเรือน</a>
                                <a href="reportcommunity.php">ระดับชุมชน</a>
                            </div>
                        </li>
                        <li><a href="contact.php">ติดต่อเรา</a></li>
                        <li><a href="logout.php">ออกจากระบบ</a></li>
                    </ul>


                </div>
            </div>
        </td>
    </tr>
</table>


<table align="center" bgcolor="#FFFFFF" width="1000" border="0">
    <tr>
        <td>
            <?
            $objConnect = mysql_connect("localhost", "root", "12345678") or die("Error Connect to Database");
            $objDB = mysql_select_db("clean");
            mysql_query("SET NAMES UTF8");
            mysql_query("SET character_set_results=utf8");
            mysql_query("SET character_set_client=utf8");
            mysql_query("SET character_set_connection=utf8");


            $strSQL = "SELECT home.idhome,home.name,home.address,home.community,home.latitude,home.longitude,user.uname,user.department,assessment.date,
            (choice1+choice2+choice3+choice4+choice5+choice6+choice7+
               choice8+choice9+choice10+choice11+choice12+choice13+choice14+choice15+
               choice16+choice17+choice18+choice19+choice20+choice21+choice22+choice23+
               choice24+choice25+choice26+choice27+choice28+choice29+choice30+choice31+
               choice32+choice33+choice34)/34 as result FROM assessment LEFT OUTER JOIN home
               ON assessment.home_idhome=home.idhome LEFT OUTER JOIN user ON assessment.user_iduser=user.iduser ORDER BY `home`.`idhome` ASC";

            $objQuery = mysql_query($strSQL) or die ("Error Query [" . $strSQL . "]");


            ?>


            <br>
            <center><img src="images\rph.png" width="250" height="95" border="0"/></center>
            <br>
            <center>
                <form name="form" method="post" action="reporthome.php">

                    จังหวัด :
                    <span id="province">
                    <select>
                        <option value="0">- เลือกจังหวัด -</option>
                    </select>
                </span>


                    &nbsp;อำเภอ :
                    <span id="amphur">
                    <select>
                        <option value='0'>- เลือกอำเภอ -</option>
                    </select>
                </span>


                    &nbsp;ตำบล :
                    <span id="district">
                    <select>
                        <option value='0'>- เลือกตำบล -</option>
                    </select>
                </span>

                    &nbsp;ผ่าน/ไม่ผ่าน :
                    <span id="pass">
                    <select name='pass'>
                        <option value='0'>- ทั้งหมด -</option>
                        <option value='1'>- ผ่าน -</option>
                        <option value='2'>- ไม่ผ่าน -</option>
                    </select>
                </span>

                    &nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="ตกลง"> <INPUT type="reset"
                                                                                              value="ยกเลิก">
                </form>
            </center>


            <?php
            include "config.php";
            conndb();


            $province_id = $_POST['province'];
            $amphur_id = $_POST['amphur'];
            $district_id = $_POST['district'];
            $pass = $_POST['pass'];

            $sql_1 = "SELECT * FROM province WHERE PROVINCE_ID = '$province_id' ";
            $result_1 = mysql_query($sql_1);
            $row_1 = mysql_fetch_array($result_1);
            $province_name = $row_1['PROVINCE_NAME'];

            $sql_2 = "SELECT * FROM amphur WHERE AMPHUR_ID = '$amphur_id' ";
            $result_2 = mysql_query($sql_2);
            $row_2 = mysql_fetch_array($result_2);
            $amphur_name = $row_2['AMPHUR_NAME'];

            $sql_3 = "SELECT * FROM district WHERE DISTRICT_ID = '$district_id' ";
            $result_3 = mysql_query($sql_3);
            $row_3 = mysql_fetch_array($result_3);
            $district_name = $row_3['DISTRICT_NAME'];

            if ($_POST["pass"] == 1 && $_POST['province'] != 0) {

                $strSQL = "SELECT home.idhome,home.name,home.address,home.community,home.latitude,home.longitude,user.uname,user.department,assessment.date,
                        (choice1+choice2+choice3+choice4+choice5+choice6+choice7+
                           choice8+choice9+choice10+choice11+choice12+choice13+choice14+choice15+
                           choice16+choice17+choice18+choice19+choice20+choice21+choice22+choice23+
                           choice24+choice25+choice26+choice27+choice28+choice29+choice30+choice31+
                           choice32+choice33+choice34)/34 as result FROM assessment LEFT OUTER JOIN home
                           ON assessment.home_idhome=home.idhome LEFT OUTER JOIN user ON assessment.user_iduser=user.iduser
                           WHERE home.district ='$district_name' AND home.amphoe='$amphur_name' AND home.province='$province_name' AND
                           ((choice1+choice2+choice3+choice4+choice5+choice6+choice7+
                           choice8+choice9+choice10+choice11+choice12+choice13+choice14+choice15+
                           choice16+choice17+choice18+choice19+choice20+choice21+choice22+choice23+
                           choice24+choice25+choice26+choice27+choice28+choice29+choice30+choice31+
                           choice32+choice33+choice34)/34)=1 ORDER BY `home`.`idhome` ASC";
                $objQuery = mysql_query($strSQL) or die ("Error Query [" . $strSQL . "]");
            } else if ($_POST["pass"] == 2 && $_POST['province'] != 0) {

                $strSQL = "SELECT home.idhome,home.name,home.address,home.community,home.latitude,home.longitude,user.uname,user.department,assessment.date,
                        (choice1+choice2+choice3+choice4+choice5+choice6+choice7+
                           choice8+choice9+choice10+choice11+choice12+choice13+choice14+choice15+
                           choice16+choice17+choice18+choice19+choice20+choice21+choice22+choice23+
                           choice24+choice25+choice26+choice27+choice28+choice29+choice30+choice31+
                           choice32+choice33+choice34)/34 as result FROM assessment LEFT OUTER JOIN home
                           ON assessment.home_idhome=home.idhome LEFT OUTER JOIN user ON assessment.user_iduser=user.iduser
                           WHERE home.district ='$district_name' AND home.amphoe='$amphur_name' AND home.province='$province_name' AND
                           ((choice1+choice2+choice3+choice4+choice5+choice6+choice7+
                           choice8+choice9+choice10+choice11+choice12+choice13+choice14+choice15+
                           choice16+choice17+choice18+choice19+choice20+choice21+choice22+choice23+
                           choice24+choice25+choice26+choice27+choice28+choice29+choice30+choice31+
                           choice32+choice33+choice34)/34)!=1 ORDER BY `home`.`idhome` ASC";
                $objQuery = mysql_query($strSQL) or die ("Error Query [" . $strSQL . "]");
            } else if ($_POST["pass"] == 0 && $_POST['province'] != 0) {
                $strSQL = "SELECT home.idhome,home.name,home.address,home.community,home.latitude,home.longitude,user.uname,user.department,assessment.date,
                        (choice1+choice2+choice3+choice4+choice5+choice6+choice7+
                           choice8+choice9+choice10+choice11+choice12+choice13+choice14+choice15+
                           choice16+choice17+choice18+choice19+choice20+choice21+choice22+choice23+
                           choice24+choice25+choice26+choice27+choice28+choice29+choice30+choice31+
                           choice32+choice33+choice34)/34 as result FROM assessment LEFT OUTER JOIN home
                           ON assessment.home_idhome=home.idhome LEFT OUTER JOIN user ON assessment.user_iduser=user.iduser
                           WHERE home.district ='$district_name' AND home.amphoe='$amphur_name' AND home.province='$province_name'  ORDER BY `home`.`idhome` ASC";
                $objQuery = mysql_query($strSQL) or die ("Error Query [" . $strSQL . "]");

            } else if ($_POST['province'] == 0) {

                $strSQL = "SELECT home.idhome,home.name,home.address,home.community,home.latitude,home.longitude,user.uname,user.department,assessment.date,
                        (choice1+choice2+choice3+choice4+choice5+choice6+choice7+
                           choice8+choice9+choice10+choice11+choice12+choice13+choice14+choice15+
                           choice16+choice17+choice18+choice19+choice20+choice21+choice22+choice23+
                           choice24+choice25+choice26+choice27+choice28+choice29+choice30+choice31+
                           choice32+choice33+choice34)/34 as result FROM assessment LEFT OUTER JOIN home
                           ON assessment.home_idhome=home.idhome LEFT OUTER JOIN user ON assessment.user_iduser=user.iduser ORDER BY `home`.`idhome` ASC";

                $objQuery = mysql_query($strSQL) or die ("Error Query [" . $strSQL . "]");

            }


            ?>


            <p>&nbsp;&nbsp;&nbsp;&nbsp;จังหวัด : <?php echo $province_name; ?></p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;อำเภอ : <?php echo $amphur_name; ?></p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;ตำบล : <?php echo $district_name; ?></p>

            <table width="100%" height="131" border="0" align="center">
                <tr>
                    <th width="96" height="48" bgcolor="#FFCC33">
                        <div align="center">ลำดับ</div>
                    </th>
                    <th width="167" align="center" valign="middle" bgcolor="#FFCC33">
                        <div align="center">ชื่อเจ้าบ้าน</div>
                    </th>
                    <th width="194" align="center" valign="middle" bgcolor="#FFCC33">
                        <div align="center">ที่อยู่</div>
                    </th>
                    <th width="115" align="center" valign="middle" bgcolor="#FFCC33">
                        <div align="center">ชุมชน</div>
                    </th>
                    <th width="126" align="center" valign="middle" bgcolor="#FFCC33">
                        <div align="center">ผู้ประเมิน</div>
                    </th>
                    <th width="112" align="center" valign="middle" bgcolor="#FFCC33">
                        <div align="center">หน่วยงานที่ประเมิน</div>
                    </th>
                    <th width="73" align="center" valign="middle" bgcolor="#FFCC33">
                        <div align="center">วัน/เดือน/ปี</div>
                    </th>
                    <th width="81" align="center" valign="middle" bgcolor="#FFCC33">
                        <div align="center">ผลการประเมิน</div>
                    </th>

                </tr>

                <?

                while ($objResult = mysql_fetch_array($objQuery))
                {

                if ($objResult["result"] == 1) {
                    $objResult["result"] = "images/home-icon.png";
                } else {
                    $objResult["result"] = "images/home-icon1.png";
                }


                ?>


                <tr>
                    <td>
                        <div align="center"><?= $objResult["idhome"]; ?></div>
                    </td>

                    <td align="center" valign="middle"><?= $objResult["name"]; ?></td>
                    <td align="center" valign="middle"><?= $objResult["address"]; ?></td>
                    <td align="center" valign="middle"><?= $objResult["community"]; ?></td>
                    <td align="center" valign="middle"><?= $objResult["uname"]; ?></td>
                    <td align="center" valign="middle"><?= $objResult["department"]; ?></td>
                    <td align="center" valign="middle"><?= $objResult["date"]; ?></td>

                    <td align="center" valign="middle">

                        <img src="<?= $objResult["result"]; ?>" width="50" height="50"><br>
                        <form action="maps.php" method="get">
                            <input type="hidden" name="lat" value="<?= $objResult["latitude"]; ?>">
                            <input type="hidden" name="long" value="<?= $objResult["longitude"]; ?>">

                        </form>


                        <form action="maps.php" method="get" name="form1">
                            <input name="Lat" type="hidden" value="<?= $objResult["latitude"]; ?>">
                            <input name="Long" type="hidden" value="<?= $objResult["longitude"]; ?>">
                            <input type="submit" name="Maps" value="Maps">
                        </form>


                    </td>


                    <?

                    }
                    ?>


                    <?
                    $strSQL2 = "SELECT community,((Sum(choice1+choice2+choice3+choice4+choice5+choice6+choice7+
                    choice8+choice9+choice10+choice11+choice12+choice13+choice14+choice15+
                    choice16+choice17+choice18+choice19+choice20+choice21+choice22+choice23+
                    choice24+choice25+choice26+choice27+choice28+choice29+choice30+choice31+
                    choice32+choice33+choice34)/34)/COUNT(community))*100 as resultC FROM assessment
                    LEFT OUTER JOIN home ON assessment.home_idhome=home.idhome LEFT OUTER JOIN user
                    ON assessment.user_iduser=user.iduser GROUP BY community";

                    $objQuery2 = mysql_query($strSQL2) or die ("Error Query [" . $strSQL . "]");
                    ?>


                    <br>
                    <center>
                        <table width="1200" border="0" align="center">


                        </table>
                    </center>

                    <br>
                    <center>
                        <table width="1200" border="0" align="center">


                        </table>
                    </center>
                    <?
                    mysql_close($objConnect);
                    ?>
                    <br>
                    <hr>
                    <br>
                    <div id="container" style="min-width: 320px; height: 380px; margin: 0 auto"></div>
                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="export_excel0.php"><img src="images\Export.png" width="110"
                                                                             height="50" border="0"/></a><br>

                </tr>

                </div>
                </div><!--/inner -->
                </div>
                </footer></center>
                </td>
                </tr>

                <tr bgcolor="#007c8a" width=1200"height=">
                    <center>
                        <h5>
                            <td align="center"><img src="images/ft.png" width="180" height="60" alt="thai"/><br><font
                                        color="White">COPYRIGHT@2016 | กลุ่มวิจัยด้านเทคโนโลยีสารสนเทศเพื่อการพัฒนาชุมชน
                                    (TI4CD)<br/>
                                    <font color="White">ภาควิชาวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ คณะวิทยาศาศตร์
                                        มหาวิทยาลัยนเรศวร จังหวัดพิษณุโลก</td>
                        </h5>
                    </center>
            </table>
            <table width="1200" border="0" ALIGN="center">
                </td></tr>
            </table>
</table>
