<?php
include('includes/config.php');
session_start();


$id = $_GET['product_id'];
$sql = "SELECT * FROM product2 WHERE product_id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);


if (isset($_POST["submit"])) {

    //getting the data
    $ad = mysqli_real_escape_string($conn, $_POST["ad"]);
    $model = mysqli_real_escape_string($conn, $_POST["model"]);
    $year = mysqli_real_escape_string($conn, $_POST["year"]);
    $years_used = mysqli_real_escape_string($conn, $_POST["years_used"]);
    $company = mysqli_real_escape_string($conn, $_POST["company"]);
    $subbrand = mysqli_real_escape_string($conn, $_POST["subbrand"]);
    $cc  = mysqli_real_escape_string($conn, $_POST["cc"]);
    $engine = mysqli_real_escape_string($conn, $_POST["engine"]);
    $tyre = mysqli_real_escape_string($conn, $_POST["tyre"]);
    $license = mysqli_real_escape_string($conn, $_POST["license"]);
    $asking_price = mysqli_real_escape_string($conn, $_POST["asking_price"]);
    $original_price = mysqli_real_escape_string($conn, $_POST["negosiate"]);
    $your_location = mysqli_real_escape_string($conn, $_POST["your_location"]);
    $expert_rating = mysqli_real_escape_string($conn, $_POST["expert_rating"]);
    // $image = mysqli_real_escape_string($conn, $_POST["image"]);

    $sql2 = "UPDATE product2 SET ad =' $ad', model = ' $model', year = ' $year', years_used ='$years_used', company = ' $company', subbrand = '$subbrand', cc = '$cc', engine = ' $engine', tyre = ' $tyre', license = ' $license', asking_price = '$asking_price ', negosiate = '$original_price', your_location = '$your_location' , expert_rating='$expert_rating' WHERE product_id ='$id' ";

    if ($result2 = mysqli_query($conn, $sql2)) {
        echo "Data Update SUCCESSFULLY";
        header('Location:updatDelect.php');
    } else {
        echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CarBazar</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">CarBazar</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Admin</a></li>

                    <form action="logout.php" method="post">
                        <li><button class="dropdown-item" name="logout_btn" href="#!">Logout</button></li>
                    </form>
                </ul>
            </li>
        </ul>
    </nav>





    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <<div class="sb-sidenav-menu-heading">Admin!!
                    </div>

                    <a class="nav-link" href="index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link" href="viewproduct.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        View Total Post History
                    </a>

                    <a class="nav-link" href="CarPostRequest.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Post Requests
                    </a>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Car Collection Details
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Car Details
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Admin Post Cars</a>
                                    <a class="nav-link" href="updatDelect.php">Edit and remove Blood</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in:</div>
            CarBzar Admin
        </div>
        </nav>
    </div>


    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4"> Update Vechile Post</h1>
                <ol class="breadcrumb mb-4" style="border-bottom: 2px solid rgb(10, 204, 107);">
                    <li class="breadcrumb-item active"></li>
                </ol>

                <!-- form section -->

                <div class="container" style="padding: 60px 0;">
                    <div class="row">
                        <div class=" card col-md-6 offset-md-3">
                            <div class="panel panel-default" style="padding: 20px;">

                                <form action="" method="post" class="form-group form-container">



                                    <div class="mb-3">
                                        <label for="exampleInput" class="form-label">Ad_Title :</label>
                                        <input type="text" class="form-control" placeholder="ad" id="" name="ad" value="<?php echo $row["ad"]; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInput" class="form-label">Model :</label>
                                        <input type="text" class="form-control" placeholder="model" id="" name="model" value="<?php echo $row["model"]; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInput" class="form-label">Year :</label>
                                        <input type="text" class="form-control" placeholder="year" id="" name="year" value="<?php echo $row["year"]; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInput" class="form-label">Year_used * :</label>
                                        <input type="text" class="form-control" placeholder="Year Used" id="" name=year_used" value="<?php echo $row["year_used"]; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInput" class="form-label">company :</label>
                                        <input type="text" class="form-control" placeholder="company" id="" name="company" value="<?php echo $row["company"]; ?>">
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInput" class="form-label">subbrand :</label>
                                        <input type="text" class="form-control" placeholder="subbrand" id="" name="subbrand" value="<?php echo $row["subbrand"]; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInput" class="form-label">cc :</label>
                                        <input type="text" class="form-control" placeholder="cc" id="" name="cc" value="<?php echo $row["cc"]; ?>">
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInput" class="form-label">engine :</label>
                                        <input type="text" class="form-control" placeholder="Full Name" id="" name="engine" value="<?php echo $row["engine"]; ?>">
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInput" class="form-label">type :</label>
                                        <input type="text" class="form-control" placeholder="type" id="" name="tyre" value="<?php echo $row["tyre"]; ?>">
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInput" class="form-label">license :</label>
                                        <input type="text" class="form-control" placeholder="license" id="" name="license" value="<?php echo $row["license"]; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInput" class="form-label">asking_price :</label>
                                        <input type="text" class="form-control" placeholder="asking_price" id="" name="asking_price" value="<?php echo $row["asking_price"]; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInput" class="form-label">original_price :</label>
                                        <input type="text" class="form-control" placeholder="original_price" id="" name="negosiate" value="<?php echo $row["negosiate"]; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInput" class="form-label">your_location :</label>
                                        <input type="text" class="form-control" placeholder="your_location" id="" name="your_location" value="<?php echo $row["your_location"]; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInput" class="form-label">Expert Rating</label>
                                        <input type="text" class="form-control" placeholder="Expert Rating" id="" name="expert_rating" >
                                    </div>


                                    <!-- <div class="mb-3">
                                        <label for="exampleInput" class="form-label">image :</label>
                                        <input type="img" class="form-control" placeholder="image" id="" name="img" value="<?php echo $row["image"]; ?>">
                                    </div> -->


                                    <div class="form-group form">
                                        <button class="btn  btn-danger center-aligned" style="margin-bottom:5px;" type="submit" name="submit">Update </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

        </main>

        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Bd Blood Sourch</div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>