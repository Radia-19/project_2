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
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Urinate a lot, often at night"><label class="me-4">Urinate a lot, often at night</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Have blurry vision"><label class="me-4">Have blurry vision</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Numb/tingling hands or feet"><label class="me-4">Numb/tingling hands or feet</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="126 mg/dL (7 mmol/L) or higher"><label class="me-4">126 mg/dL (7 mmol/L) or higher suger level</label>
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
