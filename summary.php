<?php
// Include the Database class
include 'core/Database.php';

// Create an instance of the Database class
$db = new Database();
?>

<?php ob_start();?>
<?php include 'header.php'?>
<?php include 'loginCheck.php'?>
<?php include 'navbar.php'?>


<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/pricing.css">

    
<?php
// Initialize variables
$items = isset($_POST['quantity']) ? $_POST['quantity'] : [];
$total = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Order Summary</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Price per Item</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($items)) {
                    foreach ($items as $item_id => $quantity) {
                        if ($quantity > 0) {
                            // Fetch item details from the database
                            $sql = "SELECT * FROM pricing WHERE id = ?";
                            $item = $db->fetch($sql, [$item_id]);

                            if (!empty($item)) {
                                $item = $item[0]; // Fetch first result
                                $item_total = $item['price'] * $quantity;
                                $total += $item_total;

                                echo "
                                <tr>
                                    <td>" . $item['name'] . "</td>
                                    <td>$" . number_format($item['price'], 2) . "</td>
                                    <td>" . $quantity . "</td>
                                    <td>$" . number_format($item_total, 2) . "</td>
                                </tr>
                                ";
                            }
                        }
                    }
                } else {
                    echo "<tr><td colspan='4'>No items selected.</td></tr>";
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total</th>
                    <th><?php echo "$" . number_format($total, 2); ?></th>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>

