<?php

include("condb.php");

$news_id = $_POST["news_id"];
$description = $_POST["description"];
$created_at = date("Y-m-d H:i:s"); // ใช้วันที่และเวลาปัจจุบันเป็นเวลาที่รูปถูกเพิ่ม

// พยายามอัปโหลดไฟล์
if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
    $target_directory = "../image/subnews/";
    $image_name = basename($_FILES["image"]["name"]);
    $target_path = $target_directory . $image_name;

    // พยายามอัปโหลดไฟล์
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_path)) {
        // บันทึกข้อมูลลงในฐานข้อมูล
        $sql = "INSERT INTO additional_images (news_id, image_file, description, created_at) 
                VALUES ('$news_id', '$image_name', '$description', '$created_at')";
        $result = mysqli_query($condb, $sql);

        if($result){
            echo "<script> alert('บันทึกข้อมูลเรียบร้อย'); </script>";
            echo "<script> window.location='manage_news.php'; </script>";
        }else{
            echo"Error:" . $sql ."<br>". mysqli_error($conn);
            echo "<script> alert('บันทึกข้อมูลไม่ได้'); </script>";
        }
    }
}

?>




