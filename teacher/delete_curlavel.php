<?php

include("condb.php");


$curlavel_id = $_GET["curlavel_id"];
// echo $id;die;

$sql = "DELETE FROM curlavel WHERE curlavel_id = '$curlavel_id'";
$result = mysqli_query($condb, $sql);


if($result){
    // echo "ลบข้อมูลสำเร็จ";
    header("Location: manage_curlavel.php");
}else{
    echo "ลบข้อมูลไม่สำเร็จ";
}

mysqli_close($conn);

?>