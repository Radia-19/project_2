<?php ob_start();?>
<?php include 'header.php'?>
<?php include 'navbar.php'?>
<?php include 'core/Price.php'?>


<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/pricing.css">
<?php 
// Create an instance of the Price class
$price = new Price();

// Fetch items from the database
$items = $price->getitems(); // Using the getitems() method
?>
    <div class="container mt-5">
    <h1 class="text-center">Select Health Package Here</h1>
    <form action="summary.php" method="POST">
        <table class="table table-hover m-auto border border-2">
            <thead>
                <tr>
                    <th class="pe-3">Select</th>
                    <th class="pe-3">Disease Name</th>
                    <th class="pe-3">Price</th>
                    <th class="pe-3">Package</th>
                </tr>
            </thead>
            <!-- <tbody>
                <td>
                    <th>Cold</th>
                    <th>10.00</th>
                    <th>2</th>
                </td>
            </tbody>
            <tbody>
                <td>
                    <th>Flu</th>
                    <th>20.00</th>
                    <th>2</th>
                </td>
            </tbody>
            <tbody>
                <td>
                    <th>Covid-19</th>
                    <th>10.00</th>
                    <th>1</th>
                </td>
            </tbody> -->
            <tbody>
                <?php foreach ($items as $row) { ?>
                <tr>
                    <td><input type="checkbox" name="items[]" value="<?php echo $row['id']; ?>"></td>
                    <td><?php echo $row['disease_name']; ?></td>
                    <td><?php echo $row['price']; ?></td> 
                    <td><input type="number" name="package[<?php echo $row['id']; ?>]" min="1" max="100" value="1"></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="text-center"><input class="btn btn-primary my-4" type="submit" value="Proceed to Summary"></div>
        
    </form>
    </div>


<?php include 'footer.php'?>