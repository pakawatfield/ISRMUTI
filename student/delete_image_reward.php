<?php

include("condb.php");


$id = $_GET["id"];
// echo $id;die;

$sql = "DELETE FROM additional_images_reward WHERE id = '$id'";
$result = mysqli_query($condb, $sql);


if($result){
    // echo "ลบข้อมูลสำเร็จ";
    header("Location: manage_reward.php");
}else{
    echo "ลบข้อมูลไม่สำเร็จ";
}

mysqli_close($conn);

?>
