<?php
include('includes/config.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>CarPostRequest</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#">CarBazar</a>
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
                        <div class="sb-sidenav-menu-heading">Admin</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
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
                                        <a class="nav-link" href="updatDelect.php">Update and Delect Car</a>
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
                    <h1 class="mt-4"> View Car Post Requests</h1>
                    <ol class="breadcrumb mb-4" style="border-bottom: 2px solid rgb(10, 204, 107);">
                        <li class="breadcrumb-item active"></li>
                    </ol>

                    <table class="table table-striped table-bordered ">
                        <thead>
                            <tr>
                                <th>Ad_Title</th>
                                <th>Model</th>
                                <th>Year</th>
                                <th>Year_used</th>
                                <th>Company</th>
                                <th>Subbrand</th>
                                <th>CC</th>
                                <th>Engine</th>
                                <th>Tyre</th>
                                <th>License</th>
                                <th>Asking Price</th>
                                <th>Original_Price</th>
                                <th>Your_Location</th>
                                <th>Image</th>

                            </tr>
                        </thead>

                        <?php

                        $sql = "SELECT * FROM `product2`";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['ad']; ?></td>
                                    <td><?php echo $row['model']; ?></td>
                                    <td><?php echo $row['year']; ?></td>
                                    <td><?php echo $row['years_used']; ?></td>
                                    <td><?php echo $row['company']; ?></td>
                                    <td><?php echo $row['subbrand']; ?></td>
                                    <td><?php echo $row['cc']; ?></td>
                                    <td><?php echo $row['engine']; ?></td>
                                    <td><?php echo $row['tyre']; ?></td>
                                    <td><?php echo $row['license']; ?></td>
                                    <td><?php echo $row['asking_price']; ?></td>
                                    <td><?php echo $row['negosiate']; ?></td>
                                    <td><?php echo $row['your_location']; ?></td>
                                    <!-- <td><?php echo $row['my_image']; ?></td> -->

                                   <td>
                                       <img src="../upload/<?php $row['my_image'] ?>" alt="">
                                   </td> 


                                    <td>
                                        

                                <a class="btn btn-primary" href="approve.php?product_id=<?php echo $row['product_id']; ?>">Approve</a>


         
                                        
                                    </td>

                                    <!-- <td>
                                        <a id="delete" class="btn-danger btn" href="delete.php?id=<?php echo $row['A_ID']; ?>">Delete</a>
                                    </td> -->

                                </tr>

                            </tbody>
                        <?php }

                        ?>

                    </table>
                </div>
        </div>
        </main>

 
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>