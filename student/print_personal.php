<?php

use Mpdf\Tag\Td;
include("condb.php");
$sql = "SELECT * FROM personal WHERE lavel_id ='2' ";
$result = mysqli_query($condb,$sql);
$numrow = mysqli_num_rows($result);

require_once __DIR__ . '/vendor/autoload.php';
$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();

$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/vendor/mpdf/ 
        mpdf/ttfonts',
    ]),
    'fontdata' => $fontData + [
        'frutiger' => [
            'R' => 'THSarabun.ttf',
            'I' => 'THSarabun-Italic.ttf',
	    
        ]
    ],
    'default_font' => 'frutiger'
]);


//$mpdf = new \Mpdf\Mpdf();
$html="<h1>คณาจารย์ประจำสาขาระบบสารสนเทศ</h1><table border='1' width='100%' style='font-size: 18px;'>
    <tr style='background-color:#CB135B'>
        <th>รูปภาพ</th>
        <th>ชื่ออาจารย์</th>
        <th>การศึกษา</th>
        <th>ผลงาน</th>
    </tr> ";
    while($row=mysqli_fetch_assoc($result)){
        $html = $html. '<tr>
        <td>'.$row['personal_img'].'</td>
        <td>'.$row['personal_name'].'</td>
        <td>'.$row['personal_education'].'</td>
        <td>'.$row['personal_performace'].'</td>
        </tr>';
    }

$html=$html."</table>";
$mpdf->WriteHTML($html);
$mpdf->Output();
?>