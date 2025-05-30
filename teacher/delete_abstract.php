<?php

include("condb.php");


$abstract_id = $_GET["abstract_id"];
// echo $abstract_id;die;

$sql = "DELETE FROM research WHERE abstract_id = '$abstract_id'";
$result = mysqli_query($condb, $sql);


if($result){
    // echo "ลบข้อมูลสำเร็จ";
    header("Location: manage_abstract.php");
}else{
    echo "ลบข้อมูลไม่สำเร็จ";
}

mysqli_close($conn);

?>