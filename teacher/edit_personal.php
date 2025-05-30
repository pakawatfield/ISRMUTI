
<?php

include("condb.php");

$personal_id = $_POST["id"];
$personal_img = $_POST["personal_img"];
$personal_name = $_POST["personal_name"];
$personal_position = $_POST["personal_position"];
$bachelor_degree = $_POST["bachelor_degree"];
$master_degree = $_POST["master_degree"];
$doctorate_degree = $_POST["doctorate_degree"];
$personal_performace = $_POST["personal_performace"];
$personal_email = $_POST["personal_email"];
$personal_tel = $_POST["personal_tel"];


/*
echo $personal_id;
echo "<br>";
echo $personal_img;
echo "<br>";
echo $personal_name;
echo "<br>";
echo $personal_education;
echo "<br>";
echo $personal_performace;
echo "<br>";
*/

$sql = "UPDATE 
            personal
            SET
                personal_img = '$personal_img',
                personal_name = '$personal_name',
                personal_position = '$personal_position',
                bachelor_degree = '$bachelor_degree',
                master_degree = '$master_degree',
                doctorate_degree = '$doctorate_degree',
                personal_performace = '$personal_performace',
                personal_email = '$personal_email',
                personal_tel = '$personal_tel'
            WHERE personal_id =  '$personal_id'
            ";
$result = mysqli_query($condb, $sql);

if($result){
    echo "บันทึกสำเร็จ";
    header("Location: manage_personal.php");
}else {
    echo "ไม่สามารถบันทึกข้อมูลได้...";
}
?>