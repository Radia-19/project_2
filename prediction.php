<?php ob_start();?>
<?php include 'header.php'?>
<?php include 'loginCheck.php'?>
<?php include 'navbar.php'?>


<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/prediction.css">

<section class="symptom">            
        <div class="s1head">
            <div class="divider-head1">
                <div class="divider1"></div>
                <h3 class="heading-1 my-4">Check-up List</h3>
                <div class="divider1"></div>
            </div>
        </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 mb-3 sym">
<?php 
include 'core/Database.php';

$db = new Database();

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selected_symptoms = isset($_POST['symptoms']) ? $_POST['symptoms'] : [];

    if (!empty($selected_symptoms)) {
        // Convert selected symptoms into a comma-separated string for the query
        $symptom_ids = implode(",", array_map(function($symptom) {
            return "'" . $symptom . "'";
        }, $selected_symptoms));

        // SQL query to find diseases that match the selected symptoms
        $sql = "SELECT diseases.name 
                FROM diseases 
                INNER JOIN disease_symptoms ON diseases.id = disease_symptoms.disease_id
                WHERE disease_symptoms.symptom_id IN ($symptom_ids)
                GROUP BY diseases.id
                HAVING COUNT(DISTINCT disease_symptoms.symptom_id) = " . count($selected_symptoms);

        // Execute the query and fetch results
        $diseases = $db->fetch($sql);

        // Display results
        if (count($diseases) > 0) {
            echo "<h2 class='alert alert-info'>Possible Disease(s): [I'd suggest seeing a specialist]</h2>";
            foreach ($diseases as $disease) {
                echo "<p>" . $disease['name'] . "</p>";
            }
        } else {
            echo "<p class='alert alert-danger'>If you seem to have all symptoms, you should visit a consultant First!!</p>";
        }
    } else {
        echo "<p>Please select at least one symptom.</p>";
    }
}
?>


<div class="container">
        <h1 class="mt-5">Predict Disease by Symptoms</h1>
        <form method="post" action="">
            <h3 class="mt-3">Select Symptoms:</h3>                                                                           
            <?php
            // Fetch symptoms from the database
            $sql = "SELECT * FROM symptoms";
            $symptoms = $db->fetch($sql);

            // Display symptoms as checkboxes
            if (count($symptoms) > 0) {
                foreach ($symptoms as $symptom) {
                    echo "<div class='form-check'>";
                    echo "<input type='checkbox' class='form-check-input' name='symptoms[]' value='" . $symptom['id'] . "'>";
                    echo "<label class='form-check-label'>" . $symptom['name'] . "</label>";
                    echo "</div>";
                }
            } else {
                echo "No symptoms found.";
            }
            ?>
            <br>
            <input type="submit" class="btn btn-primary" value="Predict Disease">
        </form>
    </div>
                        
                         
                    </div>
                 </div>    
            </div>
</section>
<!-- End Symptom -->



<!-- <section class="labtest">
    <div class="s1head">
            <div class="divider-head1">
                <div class="divider1"></div>
                <h3 class="heading-1">Diagnostic Services</h3>
                <div class="divider1"></div>
            </div>
            <h2 class="heading-2">Best Heatlhcare Solution</h2>
        </div>
	<div class="container">
	  <div class="row justify-content-center mb-5 ">
      		 <div class="col-12 col-md-8 lab">
                <h2 class="lab-heading"> <u>Radiology & Imaging Services</u> </h2>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-check"></i> X-RAY</li>
                            <li><i class="fa-solid fa-check"></i> EEG</li>
                            <li><i class="fa-solid fa-check"></i> ETT</li>
                            <li><i class="fa-solid fa-check"></i> MAMMOGRAPHY</li>
                            <li><i class="fa-solid fa-check"></i> USG</li>
                            <li><i class="fa-solid fa-check"></i> MRI</li>
                            <li><i class="fa-solid fa-check"></i> ECHOCARDIOGRAM</li>
                            <li><i class="fa-solid fa-check"></i> COLONOSCOPY</li>
                            <li><i class="fa-solid fa-check"></i> HOLTER ECG</li>
                            <li><i class="fa-solid fa-check"></i> ENDOSCOPY</li>
                            <li><i class="fa-solid fa-check"></i> SPIROMETRY</li>
                            <li><i class="fa-solid fa-check"></i> FIBER OPTIC LARYNGOSCOPY</li>
                        </ul>
                        <button type="button" class="btn btn-primary  btn1">Explore More <i class="bi bi-arrow-right"></i></button>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-check"></i> CT SCAN</li>
                            <li><i class="fa-solid fa-check"></i> DENTAL XRAY</li>
                            <li><i class="fa-solid fa-check"></i> ERCP</li>
                            <li><i class="fa-solid fa-check"></i> BONE DENSITOMETER</li>
                            <li><i class="fa-solid fa-check"></i> ECG</li>
                            <li><i class="fa-solid fa-check"></i> COLOR DOPPLER</li>
                            <li><i class="fa-solid fa-check"></i> DUPLEX STUDY</li>
                            <li><i class="fa-solid fa-check"></i> HOLTER MONITOR</li>
                            <li><i class="fa-solid fa-check"></i> NCV/EMG</li>
                            <li><i class="fa-solid fa-check"></i> UROFLOWMETRY</li>
                            <li><i class="fa-solid fa-check"></i> FIBROSCAN</li>
                            <li><i class="fa-solid fa-check"></i> COLPOSCOPY</li>
                        </ul>
                    </div>
                </div>    
              </div>  
              <div class="col-12 col-md-8 mt-5 lab">
                <h2 class="lab-heading"> <u>Pathology Services</u> </h2>
                <ul class="list-unstyled">
                    <li><i class="fa-solid fa-check"></i> IMMUNOLOGY</li>
                    <li><i class="fa-solid fa-check"></i> BIOCHEMISTRY</li>
                    <li><i class="fa-solid fa-check"></i> HAEMATOLOGY</li>
                    <li><i class="fa-solid fa-check"></i> CLINICAL PATHOLOGY</li>
                    <li><i class="fa-solid fa-check"></i> SEROLOGY</li>
                    <li><i class="fa-solid fa-check"></i> MICROBIOLOGY</li>
                    <li><i class="fa-solid fa-check"></i> HISTOPATHOLOGY</li>
                    <li><i class="fa-solid fa-check"></i> CYTOPATHOLOGY</li>
                    <li><i class="fa-solid fa-check"></i> CLINICAL PATHOLOGY</li>
                    <li><i class="fa-solid fa-check"></i> PCR LAB</li>
                    <li><i class="fa-solid fa-check"></i> FlOWCYTOMETRY</li>
                    <li><i class="fa-solid fa-check"></i> IMMUNOHISTOCHEMISTRY</li>
                </ul>
                <button type="button" class="btn btn-primary btn1">Explore More <i class="bi bi-arrow-right"></i></button>
              </div>
              
        </div>
	</div>
</section> -->
<!-- End Labtest -->

<?php include 'footer.php'?>


