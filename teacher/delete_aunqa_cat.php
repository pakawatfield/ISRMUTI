<?php

include("condb.php");


$aunqa_category_id = $_GET["aunqa_category_id"];


$sql = "DELETE FROM aunqa_category WHERE aunqa_category_id = '$aunqa_category_id'";
$result = mysqli_query($condb, $sql);


if($result){
    // echo "ลบข้อมูลสำเร็จ";
    header("Location: manage_aunqa_cat.php");
}else{
    echo "ลบข้อมูลไม่สำเร็จ";
}

mysqli_close($conn);

?>