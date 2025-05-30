<?php

include("condb.php");

// รับข้อมูลจากฟอร์ม
$SARCUR_ID = $_POST["id"];
$SARCUR_name = $_POST["SARCUR_name"];

// โฟลเดอร์ที่ต้องการจะเก็บรูปภาพ
$target_directory = "../image/sar/";

// รับข้อมูลของไฟล์รูปภาพ
$SARCUR_cover_image = $_FILES['SARCUR_cover_image']['name'];

// ย้ายไฟล์รูปภาพไปยังโฟลเดอร์ที่ต้องการ
if (move_uploaded_file($_FILES['SARCUR_cover_image']['tmp_name'], $target_directory . $SARCUR_cover_image)) {
    // ทำงานหลังจากอัพโหลดไฟล์สำเร็จ
    // อัพโหลดข้อมูลลงในฐานข้อมูล
    $sql = "UPDATE sar_curriculum
            SET SARCUR_name = '$SARCUR_name',
            SARCUR_cover_image = '$SARCUR_cover_image'
            WHERE SARCUR_ID =  '$SARCUR_ID'";
                            
    $result = mysqli_query($condb, $sql);

    if ($result) {
        // หากบันทึกข้อมูลสำเร็จ
        header("Location: manage_sarcur.php");
    } else {
        // หากมีปัญหาในการบันทึกข้อมูล
        echo "ไม่สามารถบันทึกข้อมูลได้...";
    }
} else {
    // หากมีปัญหาในการอัพโหลดไฟล์รูปภาพ
    echo "เกิดข้อผิดพลาดในการอัพโหลดไฟล์...";
}

?>