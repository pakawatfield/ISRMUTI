<?php
include("condb.php");

$km_id = $_POST["id"];
$km_name = $_POST["km_name"];
$km_detail = $_POST["km_detail"];
$youtube_link = $_POST["youtube_link"];

// File upload logic for PDF
$target_dir_pdf = "../pdf/";
$target_file_pdf = $target_dir_pdf . basename($_FILES["km_pdf"]["name"]);
move_uploaded_file($_FILES["km_pdf"]["tmp_name"], $target_file_pdf);

$sql = "UPDATE 
            km
            SET
            km_name = '$km_name',
            km_detail = '$km_detail',
            youtube_link = '$youtube_link',
            km_pdf = '$target_file_pdf'
            WHERE km_id =  '$km_id'
            ";
$result = mysqli_query($condb, $sql);

if($result){
    echo "บันทึกสำเร็จ";
    header("Location: manage_km.php");
    
}else {
    echo "ไม่สามารถบันทึกข้อมูลได้...";
}
?>
