<?php ob_start();?>
<?php include 'header.php'?>
<?php include 'loginCheck.php'?>
<?php include 'navbar.php'?>
<?php include 'core/Database.php'?>


<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/pricing.css">

    <div class="container mt-5">
        <h1 class="mb-4">Select Items for Purchase</h1>
        <form method="post" action="summary.php">
            <div class="row">
                <?php
                // fetchAll() pricing details from the database
                $sql = "SELECT * FROM pricing";
                $pricing_plans = fetchAll($sql);

                // Display the items with quantity input fields
                if (count($pricing_plans) > 0) {
                    foreach ($pricing_plans as $plan) {
                        echo "
                        <div class='col-md-4 mb-3'>
                            <div class='card'>
                                <div class='card-body'>
                                    <h5 class='card-title'>" . $plan['name'] . "</h5>
                                    <p class='card-text'>$" . number_format($plan['price'], 2) . "</p>
                                    <label for='quantity_" . $plan['id'] . "'>Quantity:</label>
                                    <input type='number' class='form-control' name='quantity[" . $plan['id'] . "]' id='quantity_" . $plan['id'] . "' value='0' min='0'>
                                </div>
                            </div>
                        </div>
                        ";
                    }
                } else {
                    echo "<p>No items available.</p>";
                }
                ?>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>


<?php include 'footer.php'?>