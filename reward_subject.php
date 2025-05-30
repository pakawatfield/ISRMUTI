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

    @media (min-width: 768px) .py-md-16 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important;
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
                    <h6 class="display-1 mb-3 text-white">ผลงานนักศึกษาในกระบวนการประจำรายวิชา</h6>

                </div>
            </div>
        </div>
    </section>



    <?php
// Number of results per page
$results_per_page = 6;

// Get current page number
if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

// Calculate the starting result for the current page
$start_from = ($page - 1) * $results_per_page;

// Modified SQL query to include pagination
$sql = "SELECT a.*, b.tittlereward_name 
        FROM reward AS a 
        LEFT JOIN tittlereward AS b 
        ON a.tittlereward_id = b.tittlereward_id
        WHERE a.tittlereward_id = '2'
        ORDER BY a.reward_date DESC 
        LIMIT $start_from, $results_per_page";


$result = mysqli_query($condb, $sql);

// Pagination links
$sql_total = "SELECT COUNT(*) AS total FROM reward";
$result_total = mysqli_query($condb, $sql_total);
$row_total = mysqli_fetch_assoc($result_total);
$total_pages = ceil($row_total["total"] / $results_per_page);

// Display the news items and pagination
?>
    <section id="deanquote">
        <div class="container py-14 py-md-16">
            <div class="row">
            </div>
            <div class="grid grid-view projects-masonry">
                <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                    <?php
                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                    <div class="project item col-md-6 col-xl-4 product">
                        <figure class="lift rounded mb-6">
                            <a href="reward_detail.php?id=<?php echo $row['reward_id']; ?>">
                                <img src="image/reward/<?php echo $row["reward_img"]; ?>"
                                    alt="<?php echo $row["tittlereward_name"]; ?>" />
                            </a>
                        </figure>
                        <div class="post-header">
                            <div class="post-category text-line" style="color: pink;">
                                <a href="#" class="hover" rel="category"><?php echo $row["tittlereward_name"]; ?></a>
                            </div>
                            <!-- /.post-category -->
                            <h5 class="post-title h6 mt-1 mb-3">
                            <a class="link-dark" href="reward_detail.php?id=<?php echo $row["reward_id"]; ?>">
                                    <?php echo $row["reward_name"]; ?>
                                </a>
                            </h5>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-footer">
                            <ul class="post-meta mb-0">
                                <li class="post-date">
                                    <i class="fa-regular fa-clock"></i>
                                    <span><?php echo $row["reward_date"]; ?></span>
                                </li>
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                    </div>
                    <?php
                    }
                } else {
                    echo "<div class='project item col-12'><p>0 results</p></div>";
                }
                ?>
                </div>
            </div>
        </div>

        <!-- Pagination links -->
        <div class="row justify-content-center">
            <div class="col-auto">
                <ul class="pagination">
                    <!-- Previous page -->
                    <li class="page-item <?php echo ($page <= 1) ? 'disabled' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo ($page - 1); ?>" tabindex="-1" aria-disabled="true">
                            < </a>

                    </li>

                    <?php
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo "<li class='page-item ".(($page==$i)?'active':'')."'><a class='page-link' href='?page=$i'>$i</a></li>";
                }
                ?>

                    <!-- Next page -->
                    <li class="page-item <?php echo ($page >= $total_pages) ? 'disabled' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo ($page + 1); ?>">></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>



</body>

</html>
<?php include("footer.php"); ?>