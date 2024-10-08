<?php ob_start();?>
<?php include 'header.php'?>
<?php include 'loginCheck.php'?>
<?php include 'navbar.php'?>
<?php include 'core/Amount.php';
//$db = new Database();
?>

<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/pricing.css">
<?php
    if(!isset($_SESSION)) 
        { 
            session_start(); 
        }  
?>
<div class="container">
    <h1 class="text-center">Payment Summary</h1>

    <table class="table table-hover m-auto border border-2">
        <thead>
            <tr>
                <th class="pe-3">Disease Name</th>
                <th class="pe-3">Package</th>
                <th class="pe-3">Amount</th>
                <th class="pe-3">Total</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            if (isset($_SESSION['items_summary']) && isset($_SESSION['total']) != 0) {
                foreach ($_SESSION['items_summary'] as $item) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['name']); ?></td>  <!-- Safeguarding output -->
                    <td><?php echo htmlspecialchars($item['package']); ?></td>
                    <td><?php echo number_format($item['amount'], 2); ?> BDT</td>  <!-- Formatted amount -->
                    <td><?php echo number_format($item['total'], 2); ?> BDT</td>  <!-- Formatted total -->
                </tr>
        <?php } ?>
        <?php } else { ?>
                <tr><td colspan="4">No items selected.</td></tr>
        <?php } ?>
        </tbody>
    </table>
    <h3 class="text-center my-4">Total Payment: <?php echo isset($_SESSION['total']) ? number_format($_SESSION['total'], 2) . ' BDT' : '0 BDT'; ?></h3>
</div>

<?php include 'footer.php'?>


