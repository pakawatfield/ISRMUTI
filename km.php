<?php include("header.php"); ?>
<?php include("secure/condb.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KM</title>
    <link rel="stylesheet" href="test/styles.css">
    <link rel="stylesheet" href="test/scss.css">
    <link rel="stylesheet" href="test/plugin.css"> <!-- Assuming you have an external stylesheet -->
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

        .image-wrapper.bg-overlay.bg-content .content,
        .image-wrapper.bg-overlay:not(.bg-content) * {
            position: relative;
            z-index: 2;
        }

        @media (min-width: 768px) {
            .py-md-16 {
                padding-top: 6rem !important;
                padding-bottom: 6rem !important;
            }
        }

        .py-14 {
            padding-top: 4.5rem !important;
            padding-bottom: 4.5rem !important;
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
                    <h4 class="display-1 mb-3 text-white">รายงานการจัดการความรู้ (KM)</h4>
                </div>
            </div>
        </div>
    </section>

    <?php
        // Your PHP code for pagination and fetching data goes here
    ?>

    <section id="deanquote">
        <div class="container py-14 py-md-16">
            <div class="row"></div>
            <div class="grid grid-view projects-masonry">
                <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                    <?php
                        // Your PHP code to fetch and display KM data goes here
                    ?>
                </div>
            </div>
        </div>

        <!-- Pagination links -->
        <div class="row justify-content-center">
            <div class="col-auto">
                <ul class="pagination">
                    <!-- Your pagination links PHP code goes here -->
                </ul>
            </div>
        </div>
    </section>
</body>

</html>

<?php include("footer.php"); ?>
