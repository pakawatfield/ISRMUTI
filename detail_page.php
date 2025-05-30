<?php include("secure/condb.php"); ?>

<!-- <?php

session_start();

?> -->

<?php 
$sql = "SELECT * FROM abstract";
$result = mysqli_query($condb, $sql);
?>
<style>
body {
    font-family: 'Prompt', sans-serif;
    background: #f5f5f5;
    font-size: 14px;
    line-height: 1.428571429;
    color: #333333;
    right: 0px;
    bottom: 0px;
    left: 0px;
    background-size: cover;
    top: 15px;
    /* background-position: 50% 50%; */
    /* position: fixed; */
    /* background-color: #07609a; */
}

.container {
    max-width: 970px;
}

@media (min-width: 768px) .container {
    max-width: 750px;
}

.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

*,
*:before,
*:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.table-striped>tbody>tr:nth-child(odd)>td,
.table-striped>tbody>tr:nth-child(odd)>th {
    background-color: #ebebeb;
}

.table-bordered>thead>tr>th,
.table-bordered>tbody>tr>th,
.table-bordered>tfoot>tr>th,
.table-bordered>thead>tr>td,
.table-bordered>tbody>tr>td,
.table-bordered>tfoot>tr>td {
    border: 1px solid #dddddd;
}

.table thead>tr>th,
.table tbody>tr>th,
.table tfoot>tr>th,
.table thead>tr>td,
.table tbody>tr>td,
.table tfoot>tr>td {
    padding: 8px;
    line-height: 1.428571429;
    vertical-align: top;
    border-top: 1px solid #dddddd;
}

tr {
    display: table-row;
    vertical-align: inherit;
    border-color: inherit;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

.well {
    min-height: 20px;
    padding: 20px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}



.gradient-1 {
    background-image: linear-gradient(120deg, #f857a6 10%, #ef3f6e 100%);
}
</style>


<body>
    <section id="deanquote">
        <?php
        $ids = $_GET['id'];
        $sql = "SELECT * FROM abstract WHERE abstract_id = $ids";
        $result = mysqli_query($condb, $sql);
        $row = mysqli_fetch_array($result);
    ?>

        <div class="col-lg-12">
            <div class="well">
                <legend>
                    <h4><b>ชื่องานวิจัย เรื่อง <?php echo $row["abstract_tittle"]; ?></b></h4>
                </legend>
                <div class="form-group">
                    <div class="bs-example table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <td colspan="4" align="left" valign="middle"><b>ชื่อนิสิต :
                                        </b><?php echo $row["author"]; ?>
                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>สาขา
                                                : </b> ระบบสารสนเทศ
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" align="left" valign="middle">
                                        <?php setlocale(LC_TIME, 'th_TH.utf8'); ?><b>ปี พ.ศ. :
                                        </b><?php echo strftime("%Y", strtotime($row["publication_date"])); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4" align="left" valign="middle"><b>หัวข้อโครงการวิจัยระดับปริญญาตรี :
                                        </b>
                                        <?php echo $row["abstract_tittle"]; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4" align="left" valign="middle"><b>บทคัดย่อ Abstract :
                                        </b><?php echo $row["abstract"]; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4" align="left" valign="middle"><b>สถานที่เก็บเล่มวิจัย :
                                        </b>สาขาระบบสารสนเทศ คณะบริหารธุรกิจ</td>
                                </tr>
                                <tr>
                                    <td colspan="4" align="left" valign="middle"><b>ภาษา : </b>ไทย</td>
                                </tr>
                                <tr>
                                    <th>บทคัดย่อ</th>
                                    <th> PDF File</th>

                                </tr>
                                <tr>
                                    <td align="center" valign="middle">
                                        <a href="pdf/<?php echo $row["abstract_pdf"]; ?>" target="_blank">
                                            <img src="image/pdf.png" style="width: 50px;" alt="PDF Icon">
                                        </a>
                                    </td>
                                    <td align="center" valign="middle">
                                        <a href="adminis/index.php"
                                            class="btn btn-gradient gradient-1 rounded-pill">เข้าสู่ระบบ /
                                            สมัครสมาชิก</a>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div><!-- /example -->
                </div>
            </div>
        </div>
    </section>






</body>

</html>