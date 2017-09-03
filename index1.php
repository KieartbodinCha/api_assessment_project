<?php
session_start();
if ($_SESSION['UserID'] == "") {
    echo "Please Login!";
    exit();
}
mysql_connect("localhost", "root", "1234");
mysql_select_db("aaa");
$strSQL = "SELECT * FROM account WHERE id = '" . $_SESSION['UserID'] . "' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_query($objQuery);
?>

<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>ระบบประเมินโรงอาหารและสถานที่ปรุงประกอบ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootsrap -->
    <link rel="stylesheet" href="1/HTML/assets/css/bootstrap.min.css">

    <!-- Font awesome -->
    <link rel="stylesheet" href="1/HTML/assets/css/font-awesome.min.css">

    <!-- Owl carousel -->
    <link rel="stylesheet" href="1/HTML/assets/css/owl.carousel.css">

    <!-- Template main Css -->
    <link rel="stylesheet" href="1/HTML/assets/css/style.css">

    <!-- Modernizr -->
    <script src="1/HTML/assets/js/modernizr-2.6.2.min.js"></script>


</head>

<body>
<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="navbar-top">

            <img src="1/HTML/assets\images\header.jpg">

        </div>

        <div class="navbar-main">
            <div class="container">
                <div id="navbar" class="navbar-collapse collapse pull-center">

                    <ul class="nav navbar-nav">

                        <li><a class="is-active" href="index1.php">หน้าหลัก</a></li>
                        <li class="has-child"><a href="#">การประเมิน</a>
                            <ul class="submenu">
                                <li class="submenu-item"><a href="school.php">ประเมินโรงเรียน </a></li>
                                <li class="submenu-item"><a href="hospital.php">ประเมินโรงอาหาร </a></li>
                                <li class="submenu-item"><a href="test.php">มาตราฐานการประเมิน </a></li>
                            </ul>
                        </li>
                        <li class="has-child"><a href="#">ข้อมูลสมาชิก</a>
                            <ul class="submenu">
                                <li class="submenu-item"><a href="addmin.php">ข้อมูลแอดมิน</a></li>
                                <li class="submenu-item"><a href="User.php">ข้อมูลผู้ใช้</a></li>
                            </ul>
                        </li>
                        <li><a href="chart.php">รูปภาพ</a></li>
                        <li><a href="content.php">ติดต่อเรา</a></li>
                        <li><a href="logout.php">ออกจากระบบ</a></li>
                    </ul>

                </div> <!-- /#navbar -->
            </div> <!-- /.container -->
        </div> <!-- /.navbar-main -->
    </nav>
</header> <!-- /. main-header -->


<br><br>

<!-- Carousel
================================================== -->
<div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#homeCarousel" data-slide-to="1"></li>
        <li data-target="#homeCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <center><img src="1/HTML/assets/images/slider/cn1.jpg" alt=""></center>
        </div> <!-- /.item -->
        <div class="item ">
            <center><img src="1/HTML/assets/images/slider/cn2.jpg" alt=""></center>
        </div> <!-- /.item -->
        <div class="item ">
            <center><img src="1/HTML/assets/images/slider/cn3.jpg" alt=""></center>
        </div> <!-- /.item -->
    </div>

    <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div><!-- /.carousel -->
<br>
<div class="aaa">
    <ul>
        <h2>โรงอาหาร</h2>
        <p>สถานที่ประกอบและจำหน่ายอาหารเป็นศูนย์กลางของบุคลากรทุกฝ่ายของโรงเรียน
            ที่จะเข้าไปใช้บริการด้านอาหารและเครื่องดื่มในโรงอาหาร</p>
        <h2>การสุขาภิบาลอาหาร</h2>
        <p>การสุขาภิบาลอาหาร (Food Sanitation) คือการป้องกันไม่ให้อาหารเป็นต้นเหตุของความเจ็บป่วยแก่ผู้บริโภค
            หรืออีกนัยหนึ่งก็คือการทำให้อาหารปลอดภัย และให้ประโยชน์แก่ผู้บริโภคแต่อย่างเดียว
            ไม่ก่อให้เกิดโทษหรืออันตรายแม้แต่น้อย </p>
    </ul>
</div>
<br>
<br>
<br>
<br>
<br>
<footer class="main-footer">
    <div class="logo">
        <center><img src="1/HTML/assets\images\logo_1.1.png" width="90px" height="120px">
            <img src="1/HTML/assets\images\มน.png" width="100px" height="100px"></center>
    </div>
    <center><p>COPRJGHT@2016 กลุ่มวิจัยด้านเทคโนโลยีสารสนเทศเพื่อการพัฒนาระบบชุมชน (TI4CD)</p></center>
    <center><p>ภาควิชาวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ คณะวิทยาศาศตร์ มหาวิทยาลัยนเรศวร จังหวัดพิษณุโลก</p>
    </center>
</footer> <!-- main-footer -->

<!--  Scripts
================================================== -->

<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="1/HTML/assets/js/jquery-1.11.1.min.js"><\/script>')</script>

<!-- Bootsrap javascript file -->
<script src="1/HTML/assets/js/bootstrap.min.js"></script>

<!-- owl carouseljavascript file -->
<script src="1/HTML/assets/js/owl.carousel.min.js"></script>

<!-- Template main javascript -->
<script src="1/HTML/assets/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');
</script>

</body>
</html>
