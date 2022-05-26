<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddProduct</title>
    <!-- <link rel="stylesheet" href="input.css"> -->
    <?php include 'links.php' ?>

</head>

<body>


<?php include('bootnav.php');?>


    <div class="container text-center">

        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Add product</h1>
        <div class="d-flex justify-content-center">

            <!-- form starts here -->

        </div>

        <div class="form ">
            <form class="w-70  " action="insert.php" method="Post" enctype="multipart/form-data">
                <div class="py-2">
                    <h5>Ad Title</h5>
                    <div class="input-group mb-2 form-group">
                    <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-id-badge"></i></span>

                        <input required id="ad" name="ad" type="text" placeholder="ad_title" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>


                </div>

                <div class="py-2">
                <select class="custom-select" name="catagory">
                <option selected>Vehicle Type</option>
                <option value="car">Car</option>
                <option value="bike">Bike</option>
               
                </select>
                </div>

                <div class="py-2">
                <select class="custom-select" name="vehicle_status">
                <option selected>Condition </option>
                <option value="new">New</option>
                <option value="used">USed</option>
                
                </select>
                </div>

                <h5>Model</h5>

                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="model" name="model" type="text" placeholder="model" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <h5>Buying Year</h5>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="year" name="year" type="text" placeholder="year" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <!-- <div class="selectbox pt-4 pb-4">
                    <select required id="condition" name="condition" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Used or new ?</option>
                        <option value="car">Used</option>
                        <option value="bike">New</option>

                    </select>
                </div> -->
                <h5>Year Used ?</h5>
                <div class="pt-2">
                    <div class="input-group mb-2">

                        <span class="input-group-text bg-warning" id="basic-addon1">
                            <br>

                            <i class="fa-solid fa-book"></i></span>

                        <input id="year_used" name="year_used" type="text" placeholder="Year Used" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <!-- <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="vehicle_ran" name="vehicle_ran" type="text"  placeholder="vehicle Ran For ? KM" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div> -->
                <h5>Company Name</h5>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="company" name="company" type="text" placeholder="Name of the Company?" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <h5>Subbrand ?</h5>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="subbrand" name="subbrand" type="text" placeholder="subbrand of the Company?" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <h5>Engine power in CC</h5>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="cc" name="cc" type="text" placeholder="Vehicle CC?" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <h5>Engine type</h5>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="engine" name="engine" type="text" placeholder="Engine Type" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <h5>Tyre Type</h5>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="tyre" name="tyre" type="text" placeholder="Tyre used " class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <h5>License Plate Serial</h5>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="license" name="license" type="text" placeholder="License Location" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <h5>Asking Price in ৳ </h5>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input required id="asking_price" name="asking_price" type="text" placeholder="Asking Price?" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <h5>Buying time Price</h5>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="original_price" name="original_price" type="text" placeholder="original_price" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <h5>Location</h5>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input required id="your_location" name="your_location" type="text" placeholder="your_location?" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <!-- should use in admin dashboard -->
                <!-- <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input name="expert_rating" type="text" placeholder="Asking Price?" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div> -->


                <!-- image input -->

                <h5>Contact NO</h5>

                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="Your_contact NO" name="contact_no" type="text" placeholder="contact_no" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>

                <h5>Upload Image</h5>

                <div class="pt-2 ml-5">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input required id="image" type="file" name="my_image" class="form-control">
                    </div>
                </div>




        </div>
        <div class="py-4 pb-4">
            <button class="btn btn-warning py-2 rounded" type="submit" name="submit" value="submit">Submit</button>
        </div>











        </form>

    </div>

    <!-- <form action="insert.php" method="post">
            <input type="text" name="ad" id="" placeholder="ad_title">
            <input type="text" name="model" id="model" placeholder="model">
            <input type="text" name="year" id="year" placeholder="year">
            <input type="text" name="year_used" id="year_used" placeholder="year_used">
            <input type="text" name="company" id="company" placeholder="company">
            <input type="text" name="subbrand" id="subbrand" placeholder="subbrand">
            
            <input type="text" name="cc" id="cc" placeholder="cc">
            <input type="text" name="engine" id="engine" placeholder="engine">
            <input type="text" name="tyre" id="tyre" placeholder="tyre">
            <input type="text" name="license" id="license" placeholder="license">
            <input type="text" name="asking_price" id="asking_price" placeholder="Asking price">
            <input type="text" name="original_price" id="original_price" placeholder="original_price">
            <input type="text" name="your_location" id="your_location" placeholder="your_location">

           
            <button class="submit_btn" type="submit" value="submit" name="submit">Submit</button>
        </form> -->



    </div>

</body>

</html>