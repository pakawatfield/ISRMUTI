<?php include("header.php"); ?>
<?php include("secure/condb.php"); 

?>



<!DOCTYPE html>
<html lang="en">
<style>
.rounded {
    position: fixed;
    /* This will lock the position */
    /* Add other styles as needed */
}
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
    <link rel="stylesheet" href="test/styles.css"> <!-- Assuming you have an external stylesheet -->
    <link rel="stylesheet" href="test.css"> <!-- Assuming you have an external stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <style>
    body {
        font-family: 'Prompt', sans-serif;
        font-family: 'Prompt', sans-serif;
        background: #f5f5f5;
        background-position: right bottom;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .card-carousel[data-v-50b3bcd9] {
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    .card-carousel[data-v-50b3bcd9] {
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    .card-img[data-v-50b3bcd9] {
        position: relative;
    }

    .card-img[data-v-50b3bcd9] {
        position: relative;
    }

    .card-img,
    .card-img-bottom {
        border-bottom-left-radius: calc(.25rem - 1px);
        border-bottom-right-radius: calc(.25rem - 1px);
    }

    .card-img,
    .card-img-top {
        border-top-left-radius: calc(.25rem - 1px);
        border-top-right-radius: calc(.25rem - 1px);
    }

    .card-img,
    .card-img-bottom,
    .card-img-top {
        flex-shrink: 0;
        width: 100%;
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
    }

    .card-img>img[data-v-50b3bcd9] {
        display: block;
        margin: 0 auto;
    }

    .card-img>img[data-v-50b3bcd9] {
        display: block;
        margin: 0 auto;
    }

    img {
        height: auto;
        max-width: 100%;
    }

    img,
    svg {
        vertical-align: middle;
    }

    img {
        border-style: none;
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
    }

    [data-v-2f797a46] .product_details_tabs .nav-tabs .nav-link.active {
        border-bottom: 2px solid var(--color-main);
        color: var(--color-main);
    }

    .product_details_tabs .nav-tabs .nav-link.active,
    .product_details_tabs .nav-tabs .nav-link:focus,
    .product_details_tabs .nav-tabs .nav-link:hover {
        border-color: transparent;
    }

    .product_details_tabs .nav-tabs .nav-link.active {
        color: #ec6937;
        color: var(--main-theme-color);
    }

    [data-v-2f797a46] .product_details_tabs .nav-tabs li a {
        color: var(--main-theme-color);
    }

    [data-v-2f797a46] .product_details_tabs .nav-tabs li a {
        font-size: 18px;
    }
    </style>
</head>

<body>
    <br><br><br>
    <?php
            $ids = $_GET['id'];
            $sql = "SELECT * FROM personal WHERE lavel_id = '2' AND personal_id = $ids";
            $result = mysqli_query($condb, $sql);
            $row = mysqli_fetch_array($result);
?>
    <section class="wrapper bg-soft-pink"
        style="background-image: url('image/faculty.jpg'); background-size: cover; background-position: center;">
        <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                    <h4 class="display-1 mb-3 text-white">คณาจารย์</h4>
                    <p class="lead px-xxl-10 text-white">หน้าแรก > <?php echo $row["personal_name"]; ?></p>
                </div>
            </div>
        </div>
    </section>




    <!-- <section id="deanquote">
        <div class="container py-14 py-md-16">

            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
                    <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1"
                        style="top: -2rem; right: -1.9rem;"></div>
                    <figure class="rounded">
                        <img src="image/teacher/<?php echo $row["personal_img"]; ?>"
                            srcset="image/teacher/<?php echo $row["personal_img"]; ?>" alt="">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <h2 class="display-4 mb-3"><?php echo $row["personal_name"]; ?></h2>
                    <h5>ประวัติการศึกษา</h5>
                    <p class="lead fs-xs">ปริญญาตรี <?php echo $row["bachelor_degree"]; ?></p>
                    <p class="lead fs-xs">ปริญญาโท <?php echo $row["master_degree"]; ?></p>
                    <p class="lead fs-xs">ปริญญาเอก <?php echo $row["doctorate_degree"]; ?></p>
                    <p class="lead fs-lg"><?php echo $row["personal_performace"]; ?></p>
                </div>
            </div>

        </div>
    </section> -->

    <section id="deanquote">
        <div class="container py-14 py-md-16">

            <div data-v-2f797a46="" class="container-wrap">
                <div data-v-2f797a46="" class="container">
                    <section data-v-2f797a46="" id="product_single_one" class="ptb-100">
                        <div data-v-2f797a46="" class="container">
                            <div data-v-2f797a46="" class="row area_boxed">
                                <div data-v-2f797a46="" class="col-lg-5">
                                    <div data-v-50b3bcd9="" data-v-2f797a46="" class="card-carousel">
                                        <!---->
                                        <div data-v-50b3bcd9="" class="card-img">
                                            <img data-v-50b3bcd9=""
                                                src="image/personal/<?php echo $row["personal_img"]; ?>" alt="">


                                        </div>
                                        <!---->
                                    </div>
                                </div>

                                <div data-v-2f797a46="" class="col-lg-7">
                                    <div data-v-2f797a46="" class="product_details_right_one">
                                        <div data-v-2f797a46="" class="modal_product_content_one">
                                            <h2 data-v-2f797a46="" class="text-capitalize mb-0 text-dark">
                                                <?php echo $row["personal_name"]; ?>
                                            </h2>
                                            <h5 data-v-2f797a46="" class="text-dark">
                                                <?php echo $row["personal_position"]; ?>
                                                <!---->
                                            </h5>
                                            <div data-v-2f797a46="" class="variable-single-item mt-5 pt-5 mb-5">
                                                <!---->
                                                <div data-v-2f797a46="" class="clearfix"></div>

                                            </div>
                                            <h5 data-v-2f797a46="" class="text-dark">ประวัติการศึกษา
                                                <!---->
                                            </h5>
                                            <div data-v-2f797a46="" class="wp-text-detail">
                                                <p data-v-2f797a46="" class="text-dark mb-0">
                                                    <?php echo $row["bachelor_degree"]; ?><br data-v-2f797a46="">
                                                    <?php echo $row["master_degree"]; ?><br>
                                                    <?php echo $row["doctorate_degree"]; ?>
                                                </p>

                                            </div>
                                            <h5 data-v-2f797a46="" class="text-dark">ช่องทางการติดต่อ
                                                <!---->
                                            </h5>
                                            <div data-v-2f797a46="" class="wp-text-detail">
                                                <div class="prewarp"><i class="fa fa-envelope"></i>
                                                    <?php echo $row["personal_email"]; ?></div>
                                                <div class="prewarp"><i class="fa fa-phone"></i>
                                                    <?php echo $row["personal_tel"]; ?></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-2f797a46="" class="row">
                                <div data-v-2f797a46="" class="col-lg-12">
                                    <div data-v-2f797a46="" class="product_details_tabs">
                                        <div data-v-2f797a46="" class="tabs" id="__BVID__119">
                                            <!---->
                                            <div class="tab-content" id="__BVID__119__BV_tab_container_">
                                                <div data-v-2f797a46="" role="tabpanel" id="description"
                                                    aria-hidden="false" aria-labelledby="description___BV_tab_button__"
                                                    class="tab-pane active">
                                                    <div data-v-2f797a46="" class="product_description">
                                                        <p>&nbsp;</p>
                                                        <h5 data-v-2f797a46="" class="text-dark">ผลงานทางวิชาการ
                                                            <!---->
                                                        </h5>
                                                        <p>
                                                            <?php echo $row["personal_performace"]; ?></strong></p>
                                                    </div>
                                                </div>
                                                <!---->
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                </div>
    </section>
    </div>
    </div>

    </div>
    </section>
</body>




<?php include("footer.php"); ?>

</html>