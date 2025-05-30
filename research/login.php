<?php

include("../secure/condb.php");
session_start();

$personal_username = $_POST["personal_username"];
$personal_password = $_POST["personal_password"];

$sql_check_auth = "SELECT 
                        a.*,
                        b.lavel_name
                    FROM personal AS a
                    LEFT JOIN lavel AS b ON a.lavel_id = b.lavel_id
                    WHERE personal_username = '$personal_username' 
                    AND a.personal_password = '$personal_password' 
                    AND a.is_approved = 1"; // เพิ่มเงื่อนไขในการตรวจสอบการอนุมัติ

$result_check_auth = mysqli_query($condb, $sql_check_auth);

if ($result_check_auth->num_rows >= 1) {
    $userData = mysqli_fetch_array($result_check_auth);

    $_SESSION["personal_name"] = $userData["personal_name"];
    $_SESSION["personal_username"] = $userData["personal_username"];
    $_SESSION["personal_tel"] = $userData["personal_tel"];
    $_SESSION["personal_password"] = $userData["personal_password"];
    $_SESSION["lavel_id"] = $userData["lavel_id"];
    $_SESSION["lavel_name"] = $userData["lavel_name"];

    switch ($_SESSION["lavel_id"]) {
        case 1: // แอดมิน
            header("Location:../admin/main.php");
            break;
        case 3: // นักศึกษา
            header("Location:../research/user/main.php");
            break;
        case 4: // บุคคลทั่วไป
            header("Location:../research/user/main.php");
            break;
        case 5: // ครู / อาจารย์
                header("Location:../research/user/main.php");
                break;
        default:
            echo "Error, สิทธิ์การใช้งานไม่ถูกต้อง.... กรุณาลองใหม่อีกครั้ง";
            break;
    }
} else {
    header("Location: frm_login.php");
}

?>