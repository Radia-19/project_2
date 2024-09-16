<?php include 'header.php'?>
<?php //include 'loginCheck.php'?>
<?php include 'navbar.php'?>
<?php include 'core/Store.php'?>

<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/prediction.css">

<section class="symptom">
	<div class="container">
                <div class="row justify-content-center"> 
                	   <div class="col-md-8 ps-5 sym">
                        <?php
                           $symptoms = new Store;
                           $symptoms->addSymptom($_SESSION['user_id'],$_POST['symptom']); 
                           if(isset($_POST['submit'])){
                            if(!empty($_POST['symptoms'])){
                                foreach($_POST['symptoms'] as $value){

                                    echo "Your symptoms seem like you have cold. You should visit a specialist.";
                                    //echo "$value";
                                }
                            }
                           }
                        ?>
                	   	<form action="" method="POST">
                	   		<label class="form-label mt-4 mb-3 fw-bold">Choose your symptoms:</label>
                            <div class="input-group mb-3">
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Runny or stuffy nose"><label class="me-4">Runny or stuffy nose</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Sore or scratchy throat"><label class="me-4">Sore or scratchy throat</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Sneezing"><label class="me-4">Sneezing</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Hoarse voice"><label class="me-4">Hoarse voice</label>
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