<?php

include("condb.php");

// โฟลเดอร์ที่ต้องการจะเก็บรูปภาพ
$target_directory = "../image/academic/";

// รับข้อมูลจากฟอร์ม
$academic_id = $_POST["id"];
$academic_name = $_POST["academic_name"];
$academic_detail = $_POST["academic_detail"];
$academic_date = $_POST["academic_date"];
$academic_time = $_POST["academic_time"];

// รับข้อมูลของไฟล์รูปภาพ
$academic_img = $_FILES['academic_img']['name'];

// ย้ายไฟล์รูปภาพไปยังโฟลเดอร์ที่ต้องการ
if (move_uploaded_file($_FILES['academic_img']['tmp_name'], $target_directory . $academic_img)) {
    // ทำงานหลังจากอัพโหลดไฟล์สำเร็จ
    // อัพเดตข้อมูลในฐานข้อมูล
    $sql = "UPDATE academic
            SET
            academic_name = '$academic_name',
            academic_detail = '$academic_detail',
            academic_date = '$academic_date',
            academic_time = '$academic_time',
            academic_img = '$academic_img'
            WHERE academic_id = '$academic_id'";
                            
    $result = mysqli_query($condb, $sql);

    if ($result) {
        // หากบันทึกข้อมูลสำเร็จ
        header("Location: manage_academic.php");
    } else {
        // หากมีปัญหาในการบันทึกข้อมูล
        echo "ไม่สามารถบันทึกข้อมูลได้...";
    }
} else {
    // หากมีปัญหาในการอัพโหลดไฟล์รูปภาพ
    echo "เกิดข้อผิดพลาดในการอัพโหลดไฟล์...";
}

?>
