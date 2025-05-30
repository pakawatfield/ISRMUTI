<?php include("header.php"); ?>
<?php include("secure/condb.php"); ?>

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
            font-family: 'Prompt', sans-serif; /* Change the font family here */
            background: #f5f5f5;
            background-position: right bottom;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <br><br><br>

    <section class="wrapper bg-soft-pink"
        style="background-image: url('image/faculty.jpg'); background-size: cover; background-position: center;">
        <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                    <h4 class="display-1 mb-3 text-white">หลักสูตร</h4>
                    <p class="lead px-xxl-10 text-white"></p>
                </div>
            </div>
        </div>
    </section>

    <section id="deanquote">
        <div class="bg-activity1 pt60 pb60">
            <div class="container py-8 py-md-10">
                <div class="row">
                    <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto mb-8">
                        <h2 class="display-4 mb-3 text-center text-pink">หลักสูตรของเรา</h2>
                        <p class="lead fs-lg mb-10 text-center px-md-16 px-lg-21 px-xl-0">สาขาวิชาระบบสารสนเทศมีด้วยกัน
                            2
                            หลักสูตร</p>
                    </div>
                </div>
                <div class="row gx-md-8 gx-xl-10 justify-content-center">
                    <?php
                $sql = "SELECT * FROM curlavel ";
                $result = mysqli_query($condb, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-lg-6 mb-4">
                        <figure class="lift rounded mb-6">
                            <a href="curlavel.php?curlavel_id=<?php echo $row['curlavel_id']; ?>">
                                <img src="image/curlavel/<?=$row["curlavel_img"]; ?>"
                                    alt="<?=$row["curlavel_name"]; ?>" />
                            </a>
                        </figure>
                        <!--/.card -->
                    </div>
                    <!-- /column -->
                    <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </section>
</body>

<?php include("footer.php"); ?>

</html>
