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
            font-family: 'Prompt', sans-serif;
            background-image: url('');
        }
    </style>
</head>

<body>
    <br><br><br>
    <?php
    $ids = $_GET['id'];
    $sql = "SELECT c.*, cl.curlavel_name 
            FROM curriculum AS c 
            INNER JOIN curlavel AS cl 
            ON c.curlavel_id = cl.curlavel_id
            WHERE c.curriculum_id = $ids";
    $result = mysqli_query($condb, $sql);
    $row = mysqli_fetch_array($result);
    ?>
    <section class="wrapper bg-soft-pink"
        style="background-image: url('image/faculty.jpg'); background-size: cover; background-position: center;">
        <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                    <h4 class="display-1 mb-3 text-white">หลักสูตร</h4>
                    <p class="lead px-xxl-10 text-white"><?= $row['curriculum_name']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="deanquote">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
                    <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1"
                        style="top: -2rem; right: -1.9rem;"></div>
                    <figure class="rounded">
                        <img src="image/curriculum/<?= $row['curriculum_img']; ?>"
                            srcset="image/curriculum/<?= $row['curriculum_img']; ?>" alt="">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <p class="lead fs-lg"><?= $row['curriculum_detail']; ?></p>
                </div>
            </div>
        </div>
    </section>
</body>

<?php include("footer.php"); ?>

</html>
