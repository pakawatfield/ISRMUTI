<?php
include("header.php");
include("secure/condb.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
    <link rel="stylesheet" href="styles.css"> <!-- Assuming you have an external stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <style>
    body {
        font-family: 'Prompt', sans-serif;
        background: #f5f5f5;
        background-position: right bottom;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    /* Style for PDF box */
    .pdf-box {
        background-color: #fff;
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    /* Style for PDF download button */
    .pdf-download-btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .pdf-download-btn:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>
    <br>
    <br>
    <br>
    <section class="wrapper bg-soft-pink"
        style="background-image: url('image/faculty.jpg'); background-size: cover; background-position: center;">
        <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                    <h4 class="display-1 mb-3 text-white">การประเมินตนเอง (SAR)</h4>
                </div>
            </div>
        </div>
    </section>
    <section id="deanquote">
        <div class="bg-activity1 pt60 pb60">
            <div class="container py-8 py-md-10">
                <div class="row">
                    <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto mb-8">
                        <h2 class="display-4 mb-3 text-center text-pink">การประเมินตนเอง (SAR)</h2>
                        <p class="lead fs-lg mb-10 text-center px-md-16 px-lg-21 px-xl-0">
                            การประเมินตนเอง (SAR) ที่มีในสาขาวิชาระบบสารสนเทศของเรา</p>
                    </div>
                </div>
                <div class="job-list">
                    <?php
    // Check if SARCUR_ID is set in GET parameter
    if(isset($_GET['SARCUR_ID'])) {
        $SARCUR_ID = $_GET['SARCUR_ID'];
        $sql = "SELECT a.*, b.SAR_summary_name, b.SAR_PDF_file 
                FROM sar_curriculum AS a 
                LEFT JOIN sar AS b 
                ON a.SARCUR_ID = b.SARCUR_ID
                WHERE a.SARCUR_ID = '$SARCUR_ID'";
        
        $result = mysqli_query($condb, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $pdf_file = $row['SAR_PDF_file'];
    ?>
                    <a href="sar/pdf/<?= $pdf_file; ?>" class="card mb-4 lift">
                        <div class="card-body p-5">
                            <span class="row justify-content-between align-items-center">
                                <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                    <span
                                        class="avatar bg-purple text-white w-9 h-9 fs-17 me-3">SAR</span><?= $row['SAR_summary_name']; ?>
                                </span>
                            </span>
                        </div>
                        <!-- /.card-body -->
                    </a>
                    <?php
            }
        } else {
            echo "0 results";
        }
    } else {
        echo "SARCUR_ID is not set";
    }
    ?>
                </div>
                <!-- /section -->
            </div>
        </div>
    </section>
    <?php include("footer.php"); ?>
</body>

</html>