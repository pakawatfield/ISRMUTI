<?php
include("condb.php");

$news_id = $_POST["id"];
$news_name = $_POST["news_name"];
$news_detail = $_POST["news_detail"];
$news_date = $_POST["news_date"];
$news_time = $_POST["news_time"];
$personal_data = $_POST["personal_data"];
$personal_post = $_POST["personal_post"];
$titlenews_id = $_POST["titlenews_id"];

// File upload handling
if(isset($_FILES["news_img"])) {
    $file_name = $_FILES["news_img"]["name"];
    $file_tmp = $_FILES["news_img"]["tmp_name"];
    $file_destination = "../image/news/" . $file_name; // Specify the destination directory
    move_uploaded_file($file_tmp, $file_destination);
    $news_img = $file_name; // Update $news_img with the filename
} else {
    // Handle if no file is uploaded or if there's an error
    // For now, let's set $news_img to an empty string
    $news_img = "";
}

$sql = "UPDATE 
            news
            SET
                news_name = '$news_name',
                news_img = '$news_img',
                news_detail = '$news_detail',
                news_date = '$news_date',
                news_time = '$news_time',
                titlenews_id = '$titlenews_id',
                personal_data = '$personal_data',
                personal_post = '$personal_post'
            WHERE news_id =  '$news_id'
            ";
$result = mysqli_query($condb, $sql);

if($result){
    echo "บันทึกสำเร็จ";
    header("Location: manage_news.php");
    
} else {
    echo "ไม่สามารถบันทึกข้อมูลได้...";
}
?>
