<?php

include("config.php");

if (isset($_POST['input'])) {

    $input = $_POST['input'];

    $query = "SELECT * FROM product1 WHERE model LIKE '{$input}%' ";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) { ?>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Company</th>
                    <th>CC</th>
                    <th>Engine</th>
                    <th>Asking Price</th>
                </tr>
            </thead>

            <tbody>

                <?php

                while ($row = mysqli_fetch_assoc($result)) {

                    $model = $row['model'];
                    $year = $row['year'];
                   $company = $row['company'];
                    $cc = $row['cc'];
                    $engine = $row['engine'];
                    $askingPrice = $row['asking_price'];

                   ?>
                    
                  <tr>
                    <td><?php echo $model; ?></td>
                    <td><?php echo $year; ?></td>
                    <td><?php echo $company; ?></td>
                    <td><?php echo $cc; ?></td>
                    <td><?php echo $engine; ?></td>
                    <td><?php echo $askingPrice; ?></td>

                  </tr>


                    <?php
                }

                ?>

            </tbody>

        </table>


<?php

    } else {
        echo "<h6 class='text-danger text-center mt-3'>No data Found </h6>";
    }
}


?>