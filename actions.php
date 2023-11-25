<?php
session_start(); // เปิดใช้งาน session
if (isset($_SESSION['user_login'])) { // ถ้าเข้าระบบอยู่
    header("location: index.php"); // redirect ไปยังหน้า index.php
    exit;
}

include_once("include/config.php");
$objCon = connDB(); // เชื่อมต่อฐานข้อมูล
$username = mysqli_real_escape_string($objCon, $_POST['user_username']); // รับค่า username
$password = mysqli_real_escape_string($objCon, $_POST['user_password']); // รับค่า password

$strSQL = "SELECT * FROM user WHERE user_username = '$user_username' AND user_password = md5('$user_password')";
$objQuery = mysqli_query($objCon, $strSQL);
$row = mysqli_num_rows($objQuery);
if($row) {
    $res = mysqli_fetch_assoc($objQuery);
    $_SESSION['user_login'] = array(
        'id' => $res['u_id'],
        'fullname' => $res['u_fullname'],
        'level' => $res['u_level']
    );
    echo '<script>alert("ยินดีต้อนรับคุณ ', $res['u_fullname'],'");window.location="index.php";</script>';
} else {
    echo '<script>alert("username หรือ password ไม่ถูกต้อง!!");window.location="login.php";</script>';
}