<?php include("header.php");?>

<?php include("secure/condb.php"); ?>

<!-- <?php

session_start();

?> -->

<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
<?php
$sql = "SELECT * FROM personal WHERE lavel_id ='2' ";
$result = mysqli_query($condb, $sql);
?>
<style>
body {
    font-family: 'Prompt', sans-serif;
    font-family: 'Prompt', sans-serif;
    background: #f5f5f5;
    background-position: right bottom;
    background-repeat: no-repeat;
    background-attachment: fixed;

    .fixmaxmobile {
        max-width: 300px;
    }

    .mb30 {
        margin-bottom: 30px !important;
    }


    @media (min-width: 768px) .col-md-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
        position: center;
    }

    @media (min-width: 576px) .col-sm-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }

    #deanquote {
        margin-left: auto;
        margin-right: auto;
        max-width: 1200px;
        /* Optional: Set maximum width for better readability */
    }



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
                    <h4 class="display-1 mb-3 text-white">บุคลากร</h4>

                </div>
            </div>
        </div>
    </section>

    <section id="deanquote">
        <div class="container py-14 py-md-16">
            <div class="row">
                <div class="grid grid-view projects-masonry">
                    <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                        <?php
                    if ($result->num_rows > 0) {
                        // Loop through the data
                        while($row = $result->fetch_assoc()) {
                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb30 ">
                            <div class="team-card-default">
                                <a href="teacher_detail.php?id=<?php echo $row['personal_id']; ?>" target="_self">
                                    <img src="image/personal/<?php echo $row["personal_img"]; ?>" alt=""
                                        class="img-fluid rounded-circle sqlpic">
                                </a>

                                <div class="team-default-content text-center pt30"><br>
                                    <div class="mb0 font-prompt font500 nonewarp"><?php echo $row["personal_name"]; ?>
                                    </div>
                                    <span><small class="prewarp"><?php echo $row["personal_position"]; ?></small></span>
                                    <div class="prewarp"><i class="fa fa-envelope"></i>
                                        <?php echo $row["personal_email"]; ?></div>
                                    <div class="prewarp"><i class="fa fa-phone"></i> <?php echo $row["personal_tel"]; ?>
                                    </div>
                                    <div><small></small></div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
<?php include("footer.php");?>