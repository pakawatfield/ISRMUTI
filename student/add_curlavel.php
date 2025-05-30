<?php

include("condb.php");

// รับข้อมูลจากฟอร์ม
$curlavel_name = $_POST["curlavel_name"];

// โฟลเดอร์ที่ต้องการจะเก็บรูปภาพ
$target_directory = "../image/curlavel/";

// รับข้อมูลของไฟล์รูปภาพ
$curlavel_img = $_FILES['curlavel_img']['name'];

// ย้ายไฟล์รูปภาพไปยังโฟลเดอร์ที่ต้องการ
if (move_uploaded_file($_FILES['curlavel_img']['tmp_name'], $target_directory . $curlavel_img)) {
    // ทำงานหลังจากอัพโหลดไฟล์สำเร็จ
    // อัพโหลดข้อมูลลงในฐานข้อมูล
    $sql = "INSERT INTO curlavel
            (curlavel_name, 
            curlavel_img)
            VALUES('$curlavel_name',
                   '$curlavel_img')";
                            
    $result = mysqli_query($condb, $sql);

    if ($result) {
        // หากบันทึกข้อมูลสำเร็จ
        header("Location: manage_curlavel.php");
    } else {
        // หากมีปัญหาในการบันทึกข้อมูล
        echo "ไม่สามารถบันทึกข้อมูลได้...";
    }
} else {
    // หากมีปัญหาในการอัพโหลดไฟล์รูปภาพ
    echo "เกิดข้อผิดพลาดในการอัพโหลดไฟล์...";
}

?>
