<?php

include("condb.php");


$km_id = $_GET["km_id"];


$sql = "DELETE FROM km WHERE km_id = '$km_id'";
$result = mysqli_query($condb, $sql);


if($result){
    // echo "ลบข้อมูลสำเร็จ";
    header("Location: manage_km.php");
}else{
    echo "ลบข้อมูลไม่สำเร็จ";
}

mysqli_close($conn);

?>