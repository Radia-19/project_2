<?php include 'header.php'?>
<?php include 'loginCheck.php'?>
<?php include 'navbar.php'?>
<?php include 'core/Code.php'?>

<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/storage.css">

<section class="storage">
	<div class="s1head">
            <div class="divider-head1">
                <div class="divider1"></div>
                <h3 class="heading-1">Symptoms Details</h3>
                <div class="divider1"></div>
            </div>
            <!-- <h2 class="heading-2">Disease & Symptoms</h2> -->
    </div>
    <?php 
    	if(isset($_GET['q_id'])){

    	$prediction = new Code;
    	$getPrediction = $prediction->getOnePrediction($_GET['q_id']);
	    	if(count($getPrediction) == 1){
	    		$getPrediction = $getPrediction[0];
	    	}else{
	    		echo "Something Wrong!";
    	         exit();
	    	}
    	}else{
    	echo "Invalid Request";
    	exit();
    	}
    ?>
    <div class="container">
		<div class="row">
			<div class="col-8 offset-2 mb-4 card store">
				<h5>Symptoms Details</h5>
				<!-- <h3><?= $getPrediction['disease_name'] ?></h3>
				<div class="border border-primary">
					<?= $getPrediction['symptoms'] ?>
				</div> -->
			</div>
		</div>
		<div class="row">
			<div class="col-8 offset-2 mb-4 card store">

			</div>
		</div>		
	</div>
</section>


<?php include 'footer.php'?>