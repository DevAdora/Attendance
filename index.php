<?php 
$active = "dashboard"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- /* CSS */ -->
    <link href="./styles/aside.css" rel="stylesheet">
    <link href="./styles/index.css" rel="stylesheet">

    <title></title>
</head>

<body>

    <?php include('partials/aside.php') ?>

    <?php include('partials/nav.php') ?>

    <section class="section">
        <div class="dashboard-boxes">

            <div class="box time-in">
                <div class="box-title"></div>
                <div class="box-img">
                    <img src="images/box (1).svg" alt="" />
                </div>
                <div class="box-info">
                    <h1>Roy Kevin Duayan</h1>
                    <h1>10101010</h1>
                    <h5>BSIT - 3</h5>
                </div>
            </div>
            <div class="box time-out">

                <div class="box-img">
                    <img src="images/box (2).svg" alt="" />
                </div>
                <div class="box-info">
                    <h1>Steve Michael Boris</h1>
                    <h1>10101010</h1>
                    <h5>BSIT - 3</h5>
                </div>
            </div>
            <div class="box total-students">
                <div class="box-number">
                    <h1>10</h1>
                </div>
                <div class="box-info">
                    <h1>Total Faculty</h1>

                </div>
            </div>
            <div class="box total-course">
                <div class="box-number">
                    <h1>01</h1>
                </div>
                <div class="box-info">
                    <h1>Total Course</h1>
                </div>
            </div>
        </div>
    </section>
</body>

</html>