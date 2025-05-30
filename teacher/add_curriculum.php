<?php

include("condb.php");

// รับข้อมูลจากฟอร์ม
$curriculum_name = $_POST["curriculum_name"];
$curriculum_detail = $_POST["curriculum_detail"];
$curlavel_id = $_POST["curlavel_id"];

// โฟลเดอร์ที่ต้องการจะเก็บรูปภาพ
$target_directory = "../image/curriculum/";

// รับข้อมูลของไฟล์รูปภาพ
$curriculum_img = $_FILES['curriculum_img']['name'];

// ย้ายไฟล์รูปภาพไปยังโฟลเดอร์ที่ต้องการ
if (move_uploaded_file($_FILES['curriculum_img']['tmp_name'], $target_directory . $curriculum_img)) {
    // ทำงานหลังจากอัพโหลดไฟล์สำเร็จ
    // อัพโหลดข้อมูลลงในฐานข้อมูล
    $sql = "INSERT INTO curriculum 
                (curriculum_name, 
                curriculum_img, 
                curriculum_detail,
                curlavel_id)
                VALUES('$curriculum_name',
                       '$curriculum_img',
                       '$curriculum_detail',
                       '$curlavel_id')";
                            
    $result = mysqli_query($condb, $sql);

    if ($result) {
        // หากบันทึกข้อมูลสำเร็จ
        header("Location: manage_curriculum.php");
    } else {
        // หากมีปัญหาในการบันทึกข้อมูล
        echo "ไม่สามารถบันทึกข้อมูลได้...";
    }
} else {
    // หากมีปัญหาในการอัพโหลดไฟล์รูปภาพ
    echo "เกิดข้อผิดพลาดในการอัพโหลดไฟล์...";
}

?>
