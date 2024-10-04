<?php ob_start();?>
<?php include 'header.php'?>
<?php include 'loginCheck.php'?>
<?php include 'navbar.php'?>
<?php include 'core/Price.php';
//$db = new Database();
?>

<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/pricing.css">
<div class="container">
    

<?php

// Create an instance of the Price class
$price = new Price();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['items']) && isset($_POST['package'])) {
        $selected_items = $_POST['items']; // Array of selected item IDs
        $packages = $_POST['package'];  // Array of packages indexed by item ID

        $total = 0;
        $items_summary = [];

        foreach ($selected_items as $item_id) {
            $item = $price->getOneItem($item_id);
            $item_total = $item['price'] * $quantities[$item_id];
            $total += $item_total;

            $items_summary[] = [
                'name' => $item['name'],  // Assuming name is the item name
                'price' => $item['price'], // Assuming price is a valid field
                'package' => $packages[$item_id],
                'total' => $item_total
            ];
        }
    } else {
        echo "No items selected or packages provided.";
    }
}
?>


    <h1 class="text-center">Payment Summary</h1>
    <table class="table table-hover m-auto border border-2">
        <thead>
            <tr>
                <th class="pe-3">Disease Name</th>
                <th class="pe-3">Price</th>
                <th class="pe-3">package</th>
                <th class="pe-3">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items_summary as $item) { ?>
            <tr>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['price']; ?></td>
                <td><?php echo $item['package']; ?></td>
                <td><?php echo $item['total']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <h3 class="text-center my-4">Total Payment: <?php echo isset($total) ? $total : '0'; ?></h3>


</div>    
<?php include 'footer.php'?>


