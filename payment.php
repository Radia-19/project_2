<?php ob_start();?>
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'core/Amount.php'; ?>
<?php if(!isset($_SESSION)) 
                { 
                    session_start(); 
                }
?>
<div class="container">
<?php
    $amount = new Amount();
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['items'], $_POST['package'], $_POST['quantities'])) {
            $selected_items = $_POST['items'];
            $packages = $_POST['package'];
            $quantities = $_POST['quantities'];

            $_SESSION['total'] = 0; 
            $items_summary = [];

            foreach ($selected_items as $item_id) {
                $item = $amount->getOneItem($item_id);
                
                if ($item && isset($quantities[$item_id])) {
                    $item_total = $item['amount'] * intval($quantities[$item_id]);
                    $_SESSION['total'] += $item_total;
                if (isset($_POST['quantities'][$item_id])) {
                    $quantity = intval($_POST['quantities'][$item_id]);
                        } else {
                            $quantity = 1;  // Default quantity if not set
                        }    
                    $items_summary[] = [
                        'name' => $item['name'],
                        'amount' => $item['amount'],
                        'quantities' => $quantity,
                        'package' => $packages[$item_id],
                        'total' => $item_total
                    ];
                }
            }
            
            // Store the summary in a session to display in summary.php
            if(!isset($_SESSION)) 
                { 
                    session_start(); 
                }
            $_SESSION['items_summary'] = $items_summary;
            //$_SESSION['total'] = $total;
            header("Location: summary.php");
            exit();
        } else {
            echo "<p class='alert alert-info my-4'>No items or packages selected.</p>";
        }
    }
    ?>
</div>

<?php include 'footer.php'; ?>

