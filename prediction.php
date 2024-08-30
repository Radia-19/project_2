<?php include 'header.php'?>
<?php include 'loginCheck.php'?>
<?php include 'navbar.php'?>
<?php include 'core/Code.php'?>


<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/prediction.css">

<section class="symptom">
                        <?php  
                            if(isset($_POST['submit'])){
                                $prediction = new Code;
                                $prediction->addPrediction($_SESSION['user_id'],$_POST['disease_name'],$_POST['symptoms']);

                                $symptoms = $_POST['symptoms'];
                                $symptoms1 = implode(",",$symptoms);
                                header('location:report.php');
                                if($symptoms == true){
                                    

                                    }
                                }
                         ?> 
        <div class="s1head">
            <div class="divider-head1">
                <div class="divider1"></div>
                <h3 class="heading-1">Check-up List</h3>
                <div class="divider1"></div>
            </div>
            <h2 class="heading-2">Select Your Disease Name</h2>
        </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 mb-3 sym">
                         <form action="" method="POST">
                            <label class="form-label mt-5">Disease Name:</label>
                            <select class="form-select rounded-0 mb-4" aria-label="Default select example" name="disease_name">
                                 <option class="fw-bold" selected value="Cold & Cough">Cold & Cough</option>
                                 <option class="fw-bold" value="Asthma">Asthma</option>
                                 <option class="fw-bold" value="Diabetes">Diabetes</option>
                                 <option class="fw-bold" value="Allergies">Allergies</option>
                                 <option class="fw-bold" value="Hepatitis">Hepatitis</option>
                                 <option class="fw-bold" value="Influenza">Influenza</option>
                                 <option class="fw-bold" value="Heart disease">Heart disease</option>
                                 <option class="fw-bold" value="Bacterial sinusitis">Bacterial sinusitis</option>
                                 <option class="fw-bold" value="Cancer">Cancer</option>
                            </select>
                    
                       
                            <label class="form-label mb-3">Choose your symptoms:</label>
                            <div class="input-group mb-3">
                            <label class="form-check-label fw-bold me-4"><i class="fa-regular fa-snowflake"></i> Cold & Cough: </label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Runny or stuffy nose"><label class="me-4">Runny or stuffy nose</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Feeling unwell"><label class="me-4">Feeling unwell</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Sore or scratchy throat"><label class="me-4">Sore or scratchy throat</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Sneezing"><label class="me-4">Sneezing</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Hoarse voice"><label class="me-4">Hoarse voice</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Headache"><label class="me-4">Headache</label><br>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Watering eyes"><label class="me-4">Watering eyes</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Achy muscles and bones"><label class="me-4">Achy muscles and bones</label>
                            </div>
                            <div class="input-group mb-3">
                            <label class="form-check-label fw-bold me-4"><i class="fa-solid fa-mask-face"></i> Asthma: </label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Persistent cough"><label class="me-4">Persistent cough</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Wheezing"><label class="me-4">Wheezing</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Difficulty breathing"><label class="me-4">Difficulty breathing</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Chest tightness"><label class="me-4">Chest tightness</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="A fast heartbeat"><label class="me-4">A fast heartbeat</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Drowsiness, confusion"><label class="me-4">Drowsiness, confusion</label><br>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Exhaustion or dizziness"><label class="me-4">Exhaustion or dizziness</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Too breathless to eat/speak/sleep"><label class="me-4">Too breathless to eat/speak/sleep</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Blue lips or fingers"><label class="me-4">Blue lips or fingers</label>
                            </div>
                            <div class="input-group mb-3">
                            <label class="form-check-label fw-bold me-4"><i class="fa-solid fa-syringe"></i> Diabetes: </label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Urinate a lot, often at night"><label class="me-4">Urinate a lot, often at night</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Always very thirsty"><label class="me-4">Always very thirsty</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Have blurry vision"><label class="me-4">Have blurry vision</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Numb/tingling hands or feet"><label class="me-4">Numb/tingling hands or feet</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Feel very tired"><label class="me-4">Feel very tired</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Lose weight without trying"><label class="me-4">Lose weight without trying</label><br>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Have very dry skin"><label class="me-4">Have very dry skin</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Slow to heal cuts or ulcers"><label class="me-4">Slow to heal cuts or ulcers</label>
                            </div>
                            <div class="input-group mb-3">
                            <label class="form-check-label fw-bold me-4"><i class="fa-solid fa-virus-covid"></i> Allergies: </label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Runny or stuffy nose"><label class="me-4"> Itchy skin or a raised rash (hives)</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Feeling unwell"><label class="me-4">Runny nose or sneezing</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Sore or scratchy throat"><label class="me-4">Pain/tenderness around cheeks</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Sneezing"><label class="me-4">Eyes/forehead ache</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Hoarse voice"><label class="me-4">Coughing</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Headache"><label class="me-4">Wheezing or breathlessness</label><br>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Watering eyes"><label class="me-4">Diarrhoea</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Achy muscles and bones"><label class="me-4">Swollen eyes, lips, mouth or throat</label>
                            </div>
                            <div class="input-group mb-3">
                            <label class="form-check-label fw-bold me-4"><i class="fa-solid fa-vial-virus"></i> Hepatitis: </label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Pain / bloating in the belly area"><label class="me-4">Pain / bloating in the belly area</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Dark urine & pale stools"><label class="me-4">Dark urine & pale stools</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Fatigue"><label class="me-4">Fatigue</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Itching"><label class="me-4">Itching</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Jaundice(yellowing of the skin/eyes)"><label class="me-4">Jaundice(yellowing of the skin/eyes)</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Loss of appetite"><label class="me-4">Loss of appetite</label><br>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Nausea and vomiting"><label class="me-4">Nausea and vomiting</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Low-grade fever"><label class="me-4">Low-grade fever</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Unusual tiredness and weakness"><label class="me-4">Unusual tiredness and weakness</label>
                            </div>
                            <div class="input-group mb-3">
                            <label class="form-check-label fw-bold me-4"><i class="fa-solid fa-shield-virus"></i> Influenza: </label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Feeling feverish/ Fever"><label class="me-4">Feeling feverish/ Fever</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Cough"><label class="me-4">Cough</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Sore or scratchy throat"><label class="me-4">Sore or scratchy throat</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Runny or stuffy nose"><label class="me-4">Runny or stuffy nose</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Muscle or body aches"><label class="me-4">Muscle or body aches</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Headaches"><label class="me-4">Headaches</label><br>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Fatigue (tiredness)"><label class="me-4">Fatigue (tiredness)</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Vomiting and diarrhea"><label class="me-4">Vomiting and diarrhea</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Chills and sweats"><label class="me-4">Chills and sweats</label>
                            </div>
                            <div class="input-group mb-3">
                            <label class="form-check-label fw-bold me-4"><i class="fa-solid fa-heart-pulse"></i> Heart Disease: </label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Chest pain"><label class="me-4">Chest pain</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Shortness of Breath"><label class="me-4">Shortness of Breath</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Pain: neck, jaw, throat, upper belly, back"><label class="me-4">Pain: neck, jaw, throat, upper belly, back</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Swelling: In the legs, ankles, or feet"><label class="me-4">Swelling: In the legs, ankles, or feet</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Numbness, weakness, or coldness"><label class="me-4">Numbness, weakness, or coldness</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="A fast or uneven heartbeat"><label class="me-4">A fast or uneven heartbeat</label><br>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Dizziness"><label class="me-4">Dizziness</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Achy muscles and bones"><label class="me-4">Achy muscles and bones</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Poor blood supply to extremities"><label class="me-4">Poor blood supply to extremities</label>
                            </div>
                            <div class="input-group mb-3">
                            <label class="form-check-label fw-bold me-4"><i class="fa-solid fa-lungs"></i> Bacterial sinusitis: </label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Nasal discharge"><label class="me-4">Nasal discharge</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Nasal congestion"><label class="me-4">Nasal congestion</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Facial pain"><label class="me-4">Facial pain</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Postnasal drip"><label class="me-4">Postnasal drip</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Coughing"><label class="me-4">Coughing</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Headache"><label class="me-4">Headache</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Cloudy/colored drainage from your nose"><label class="me-4">Cloudy/colored drainage from your nosea</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value=" Loss of smell and taste"><label class="me-4"> Loss of smell and taste</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Fever"><label class="me-4">Fever</label>
                            </div>
                            <div class="input-group mb-3">
                            <label class="form-check-label fw-bold me-4"><i class="fa-solid fa-hand-holding-medical"></i> Cancer: </label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Unexplained bleeding"><label class="me-4">Unexplained bleeding</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Lumps"><label class="me-4">Lumps</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Skin changes"><label class="me-4">Skin changes</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Changes in bowel or bladder habits"><label class="me-4">Changes in bowel or bladder habits</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Persistent cough or trouble breathing"><label class="me-4">Persistent cough or trouble breathing</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Eating problems"><label class="me-4">Eating problems</label><br>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Persistent muscle or joint pain"><label class="me-4">Persistent muscle or joint pain</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Persistent fevers or night sweats"><label class="me-4">Persistent fevers or night sweats</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Neurological problems like headaches, seizures"><label class="me-4">Neurological problems like headaches, seizures</label>
                            <input type="checkbox" name="symptoms[]" class="in1 me-1" value="Vision changes, hearing changes"><label class="me-4">Vision changes, hearing changes</label>
                            </div>

                            <div class="form-group mb-3">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </div>

                    </form>
                 </div>    
            </div>
</section>
<!-- End Symptom -->



<section class="labtest">
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
</section>
<!-- End Labtest -->

<?php include 'footer.php'?>


