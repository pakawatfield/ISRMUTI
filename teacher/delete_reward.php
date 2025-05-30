<?php

include("condb.php");


$reward_id = $_GET["reward_id"];
// echo $reward_id;die;

$sql = "DELETE FROM reward WHERE reward_id = '$reward_id'";
$result = mysqli_query($condb, $sql);


if($result){
    // echo "ลบข้อมูลสำเร็จ";
    header("Location: manage_reward.php");
}else{
    echo "ลบข้อมูลไม่สำเร็จ";
}

mysqli_close($conn);

?>