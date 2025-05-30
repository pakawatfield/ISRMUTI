<?php

include("condb.php");


$curriculum_id = $_GET["curriculum_id"];
// echo $curriculum_id;die;

$sql = "DELETE FROM curriculum WHERE curriculum_id = '$curriculum_id'";
$result = mysqli_query($condb, $sql);


if($result){
    // echo "ลบข้อมูลสำเร็จ";
    header("Location: manage_curriculum.php");
}else{
    echo "ลบข้อมูลไม่สำเร็จ";
}

mysqli_close($conn);

?>