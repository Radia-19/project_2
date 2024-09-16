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
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Pain / bloating in the belly area"><label class="me-4">Pain / bloating in the belly area</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Dark urine & pale stools"><label class="me-4">Dark urine & pale stools</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Fatigue"><label class="me-4">Fatigue</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Jaundice(yellowing of the skin/eyes)"><label class="me-4">Jaundice(yellowing of the skin/eyes)</label>
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
