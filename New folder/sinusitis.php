<?php include 'header.php'?>
<?php //include 'loginCheck.php'?>
<?php include 'navbar.php'?>
<?php include 'core/Code.php'?>

<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/prediction.css">

<section class="symptom">
	<div class="container">
                <div class="row justify-content-center">
                	   <div class="col-md-8 ps-5 sym">
                	   	<form action="" method="POST">
                	   		<label class="form-label mt-4 mb-3 fw-bold">Choose your symptoms:</label>
                            <div class="input-group mb-3">
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Nasal discharge"><label class="me-4">Nasal discharge</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Nasal congestion"><label class="me-4">Nasal congestion</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Facial pain"><label class="me-4">Facial pain</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Postnasal drip"><label class="me-4">Postnasal drip</label>
                            </div>
                            <div class="form-group mt-3">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                	   	</form>
                	   </div>
                </div>
    </div> 

</section>

<?php include 'footer.php'?>