<?php include 'header.php'?>
<?php // include 'loginCheck.php'?>
<?php include 'navbar.php'?>
<?php include 'core/Code.php'?>

<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/storage.css">
<?php 
	$prediction  = new Code;
	$allPredictions = $prediction->getAllPredictions();

?>
<section class="storage">
	<div class="s1head mb-4">
            <div class="divider-head1">
                <div class="divider1"></div>
                <h3 class="heading-1">Patients' Query List</h3>
                <div class="divider1"></div>
            </div>
            <!-- <h2 class="heading-2">Disease & Symptoms</h2> -->
    </div>
	<div class="container">
		<div class="row"> 
			<?php foreach($allPredictions as $prediction): ?>
			<div class="col-8 offset-2 card mb-2  store">
				<?php 
				    $link = "details.php?q_id=".$prediction['id'];
				?>
			  <small><a href="<?= $link ?>"> Created: <?= date('d M, Y',strtotime($prediction['created_at'])) ?> || 
			  	Send by: <?= $prediction['username'] ?></a></small>
			  <div class="col-12 text-end">
			  	<?php //if(isset($_SESSION['user_id']) && $prediction['user_id'] == $_SESSION['user_id']): ?>
			  	<a href="update-details.php?q_id=<?= $prediction['id'] ?>" class="text-primary-emphasis">Edit</a>
			  	<a href="" class="text-danger">Delete</a>
			  	<?php //endif ?>
			  </div>	
			  
			</div>
		    <?php endforeach; ?>
			
		</div>
		
	</div>
</section>










<?php include 'footer.php'?>