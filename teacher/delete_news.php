<?php

include("condb.php");


$news_id = $_GET["news_id"];
// echo $curriculum_id;die;

$sql = "DELETE FROM news WHERE news_id = '$news_id'";
$result = mysqli_query($condb, $sql);


if($result){
    // echo "ลบข้อมูลสำเร็จ";
    header("Location: manage_news.php");
}else{
    echo "ลบข้อมูลไม่สำเร็จ";
}

mysqli_close($conn);

?>