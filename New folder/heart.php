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
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Chest pain"><label class="me-4">Chest pain</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Shortness of Breath"><label class="me-4">Shortness of Breath</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Pain: neck, jaw, throat, upper belly, back"><label class="me-4">Pain: neck, jaw, throat, upper belly, back</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Swelling: In the legs, ankles, or feet"><label class="me-4">Swelling: In the legs, ankles, or feet</label>
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