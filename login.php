<html>
<head>
    <title>Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="file/css/normalize.css">
    <script src="file/js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="file/css/style.css">

</head>
<body>
<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="navbar-top">
            <img src="1\HTML\assets\images\header.jpg">
        </div>
    </nav>
</header> <!-- /. main-header -->

<div class="wrapper">
    <form class="login" name="frmLogin" method="post" action="checklogin.php">
        <p class="title">เข้าสู่ระบบ</p><br>

        <table border="1" style="width: 300px">
            <tbody>
            <tr>
                <td> &nbsp;Username</td>
                <td>
                    <input name="txtuserName" type="text" id="txtuserName">
                </td>
            </tr>
            <tr>
                <td> &nbsp;Password</td>
                <td><input name="txtPassword" type="password" id="txtPassword">
                </td>
            </tr>
            </tbody>
        </table>
        <button a href="index1.php">
            <i class="spinner"></i>
            <span class="state">เข้าสู่ระบบ</span>
        </button>
    </form>
    </p>
</div>

<br>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/login.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
