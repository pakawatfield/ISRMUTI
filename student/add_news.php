<?php

include("condb.php");

// โฟลเดอร์ที่ต้องการจะเก็บภาพข่าว
$target_directory = "../image/news/";

// รับข้อมูลจากฟอร์ม
$news_name = $_POST["news_name"];
$news_detail = $_POST["news_detail"];
$news_date = $_POST["news_date"];
$news_time = $_POST["news_time"];
$personal_data = $_POST["personal_data"];
$personal_post = $_POST["personal_post"];
$titlenews_id = $_POST["titlenews_id"];

// รับข้อมูลของไฟล์รูปภาพ
$news_img = $_FILES['news_img']['name'];

// ย้ายไฟล์รูปภาพไปยังโฟลเดอร์ที่ต้องการ
if (move_uploaded_file($_FILES['news_img']['tmp_name'], $target_directory . $news_img)) {
    // ทำงานหลังจากอัพโหลดไฟล์สำเร็จ
    // อัพโหลดข้อมูลลงในฐานข้อมูล
    $sql = "INSERT INTO news
            (news_name, 
            news_img, 
            news_detail,
            news_date,
            news_time,
            personal_data,
            personal_post,
            titlenews_id)
            VALUES('$news_name',
                   '$news_img',
                   '$news_detail',
                   '$news_date',
                   '$news_time',
                   '$personal_data',
                   '$personal_post',
                   '$titlenews_id')";
                            
    $result = mysqli_query($condb, $sql);

    if ($result) {
        // หากบันทึกข้อมูลสำเร็จ
        header("Location: manage_news.php");
    } else {
        // หากมีปัญหาในการบันทึกข้อมูล
        echo "ไม่สามารถบันทึกข้อมูลได้...";
    }
} else {
    // หากมีปัญหาในการอัพโหลดไฟล์รูปภาพ
    echo "เกิดข้อผิดพลาดในการอัพโหลดไฟล์...";
}

?>
