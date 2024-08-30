<?php include 'header.php'?>
<?php include 'loginCheck.php'?>
<?php include 'navbar.php'?>
<?php include 'core/Code.php'?>

<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/report.css">

<section class="report">
	<div class="s1head">
            <div class="divider-head1">
                <div class="divider1"></div>
                <h3 class="heading-1">Check-up List</h3>
                <div class="divider1"></div>
            </div>
            <h2 class="heading-2">Disease & Symptoms</h2>
        </div>

         <div class="container">
                <div class="row justify-content-center">
                	   <div class="col-md-8 sym">
                        <h2 class="text-center m-auto"><i class="fa-regular fa-snowflake symIcon"></i>Cold & Cough</h2>
                        <p class="text-grey mt-2">
                            A cough is a common symptom of the common cold, which can also cause other symptoms, such as:
                        </p>
                        <form action="" method="POST">
                         <div class="form-group mb-2">
                          <fieldset>
                              <legend>Choose your Symptoms:</legend>
                              <div>
                                <input type="checkbox" name="symptom" value="Runny or stuffy nose">
                                <label for="symptom">Runny or stuffy nose</label>
                              </div>
                              <div>
                                <input type="checkbox" name="symptom" value="Generally feeling unwell">
                                <label for="symptom">Generally feeling unwell</label>
                              </div>
                              <div>
                                <input type="checkbox" name="symptom" value="Sore or scratchy throat">
                                <label for="symptom">Sore or scratchy throat</label>
                              </div>
                              <div>
                                <input type="checkbox" name="symptom" value="Sneezing">
                                <label for="symptom">Sneezing</label>
                              </div>
                              <div>
                                <input type="checkbox" name="symptom" value="Hoarse voice">
                                <label for="symptom">Hoarse voice</label>
                              </div>
                              <div>
                                <input type="checkbox" name="symptom" value="Headache">
                                <label for="symptom">Headache</label>
                              </div>
                              <div>
                                <input type="checkbox" name="symptom" value="Watering eyes">
                                <label for="symptom">Watering eyes</label>
                              </div>
                              <div>
                                <input type="checkbox" name="symptom" value="Low-grade fever">
                                <label for="symptom">Low-grade fever</label>
                              </div>
                              <div>
                                <input type="checkbox" name="symptom" value="Achy muscles and bones">
                                <label for="symptom">Achy muscles and bones</label>
                              </div>

                             </fieldset>
                            </div>
                            <div class="form-group mb-3">
                                    <button type="submit" name="submit" class="btn btn-primary mt-4">Send</button>
                            </div>
                            </form>
                        <!-- <button class="btn btn-primary mt-4 align-items-center" type="submit">Click</button>       -->
                     </div>
                	   <div class="col-md-8 mt-3 sym">    
                        <h2 class="text-center m-auto"><i class="fa-solid fa-mask-face symIcon"></i>Asthma</h2>
                        <p class="text-grey mt-2">
                            Asthma symptoms vary from person to person and can include:
                        </p>
                        <form action="" method="POST">
                         <div class="form-group mb-2">
                         <fieldset>
                              <legend>Choose your Symptoms:</legend>
                              <div>
                                <input type="checkbox" id="cough" name="symptoms" value="" />
                                <label for="coding">Persistent cough</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Wheezing</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Difficulty breathing</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Chest tightness</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">A fast heartbeat</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Drowsiness, confusion</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Exhaustion or dizziness</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Too breathless to eat/speak/sleep</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">blue lips or fingers</label>
                              </div>

                            </fieldset>
                            </div>
                            <div class="form-group mb-3">
                                    <button type="submit" name="submit" class="btn btn-primary mt-4">Send</button>
                                </div>
                            </form>  
                     </div>
                     <div class="col-md-8 mt-3 sym">
                        <h2 class="text-center m-auto"><i class="fa-solid fa-syringe symIcon"></i>Diabetes</h2>
                        <p class="text-grey">
                            If you have any of the following diabetes symptoms, see your doctor about getting your blood sugar tested:
                        </p>
                        <form action="" method="POST">
                         <div class="form-group mb-2">
                         <fieldset>
                              <legend>Choose your Symptoms:</legend>
                              <div>
                                <input type="checkbox" id="cough" name="symptoms" value="" />
                                <label for="coding">Urinate (pee) a lot, often at night</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Are very thirsty</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Have blurry vision</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Numb/tingling hands or feet</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Feel very tired</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Lose weight without trying</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Have very dry skin</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">slow to heal cuts or ulcers</label>
                              </div>
                            </fieldset>
                        </div>
                        <div class="form-group mb-3">
                                 <button type="submit" name="submit" class="btn btn-primary mt-4">Send</button>
                            </div>
                        </form>        
                     </div>
                     <div class="col-md-8 mt-3 sym">
                        <h2 class="text-center m-auto"><i class="fa-solid fa-virus-covid symIcon"></i>Allergies</h2>
                        <p class="text-grey">
                            Symptoms of an allergic reaction can include:
                        </p>
                        <form action="" method="POST">
                         <div class="form-group mb-2">
                         <fieldset>
                              <legend>Choose your Symptoms:</legend>
                              <div class="d-flex ">
                                <input type="checkbox" id="cough" name="symptoms" value="" />
                                <label for="coding">Runny nose or sneezing</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Pain/tenderness around cheeks</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Eyes/forehead ache</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Coughing</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Wheezing or breathlessness</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Itchy skin or a raised rash (hives)</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Diarrhoea</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Swollen eyes, lips, mouth or throat</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Feeling or being sick</label>
                              </div>

                            </fieldset>
                        </div>
                        <div class="form-group mb-3">
                                 <button type="submit" name="submit" class="btn btn-primary mt-4">Send</button>
                            </div>
                        </form>      
                     </div>
                     <div class="col-md-8 mt-3 sym">
                        <h2 class="text-center m-auto"><i class="fa-solid fa-vial-virus symIcon"></i>Hepatitis</h2>
                        <p class="text-grey">
                            The symptoms of types A, B, and C may include:
                        </p>
                        <form action="" method="POST">
                         <div class="form-group mb-2">
                         <fieldset>
                              <legend>Choose your Symptoms:</legend>
                              <div class="d-flex ">
                                <input type="checkbox" id="cough" name="symptoms" value="" />
                                <label for="coding">Pain / bloating in the belly area</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Dark urine & pale stools</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Fatigue</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Itching</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Jaundice(yellowing of the skin/eyes)</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Loss of appetite</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Nausea and vomiting</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Low-grade fever</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Unusual tiredness and weakness</label>
                              </div>

                            </fieldset>
                        </div>
                        <div class="form-group mb-3">
                                 <button type="submit" name="submit" class="btn btn-primary mt-4">Send</button>
                            </div>
                        </form>       
                     </div>
                     <div class="col-md-8 mt-3 sym">
                        <h2 class="text-center m-auto"><i class="fa-solid fa-shield-virus symIcon"></i>Influenza</h2>
                        <p class="text-grey">
                            People who are sick with Influenza often feel some or all of these symptoms:
                        </p>
                        <form action="" method="POST">
                         <div class="form-group mb-2">
                         <fieldset>
                              <legend>Choose your Symptoms:</legend>
                              <div class="d-flex ">
                                <input type="checkbox" id="cough" name="symptoms" value="" />
                                <label for="coding">Feeling feverish/ Fever</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Cough</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Sore or scratchy throat.</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Runny or stuffy nose</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Muscle or body aches</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Headaches</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Fatigue (tiredness)</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Vomiting and diarrhea</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Chills and sweats</label>
                              </div>
                            </fieldset>
                        </div>
                        <div class="form-group mb-3">
                                 <button type="submit" name="submit" class="btn btn-primary mt-4">Send</button>
                            </div>
                        </form>      
                     </div>
                     <div class="col-md-8 mt-3 sym">
                        <h2 class="text-center m-auto"><i class="fa-solid fa-heart-pulse symIcon"></i>Heart Disease</h2>
                        <p class="text-grey">
                            Heart disease can cause a variety of symptoms, including:
                        </p>
                        <form action="" method="POST">
                         <div class="form-group mb-2">
                         <fieldset>
                              <legend>Choose your Symptoms:</legend>
                              <div class="d-flex ">
                                <input type="checkbox" id="cough" name="symptoms" value="" />
                                <label for="coding">Chest pain</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Shortness of Breath</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Pain: neck, jaw, throat, upper belly, back</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Swelling: In the legs, ankles, or feet</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Numbness, weakness, or coldness</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">A fast or uneven heartbeat</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Dizziness</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Poor blood supply to extremities</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Achy muscles and bones</label>
                              </div>
                            </fieldset>
                             </div>
                            <div class="form-group mb-3">
                                    <button type="submit" name="submit" class="btn btn-primary mt-4">Send</button>
                            </div>
                            </form>     
                     </div> 
                     <div class="col-md-8 mt-3 sym">
                        <h2 class="text-center m-auto"><i class="fa-solid fa-lungs symIcon"></i>Bacterial sinusitis</h2>
                        <p class="text-grey">
                            Bacterial sinusitis, also known as a sinus infection, is an inflammation of the tissues lining the sinuses. Symptoms include:
                        </p>
                        <form action="" method="POST">
                         <div class="form-group mb-2">
                         <fieldset>
                              <legend>Choose your Symptoms:</legend>
                              <div class="d-flex ">
                                <input type="checkbox" id="cough" name="symptoms" value="" />
                                <label for="coding">Nasal discharge</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Nasal congestion</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Facial pain</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Postnasal drip</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Coughing</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Headache</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Cloudy/colored drainage from your nose</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Loss of smell and taste</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Fever</label>
                              </div>

                            </fieldset>
                        </div>
                        <div class="form-group mb-3">
                                 <button type="submit" name="submit" class="btn btn-primary mt-4">Send</button>
                            </div>
                        </form>       
                     </div>
                     <div class="col-md-8 mt-3 sym">
                        <h2 class="text-center m-auto"><i class="fa-solid fa-hand-holding-medical symIcon"></i>Cancer</h2>
                        <p class="text-grey">
                            Cancer can cause many general symptoms that affect any part of the body or the whole body. Some symptoms include:
                        </p>
                        <form action="" method="POST">
                         <div class="form-group mb-2">
                         <fieldset>
                              <legend>Choose your Symptoms:</legend>
                              <div class="d-flex ">
                                <input type="checkbox" id="cough" name="symptoms" value="" />
                                <label for="coding">Unexplained bleeding</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Lumps</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Skin changes</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Changes in bowel or bladder habits</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Persistent cough or trouble breathing</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Eating problems</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Persistent muscle or joint pain</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Persistent fevers or night sweats</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Neurological problems like headaches, seizures</label>
                              </div>
                              <div>
                                <input type="checkbox" id="Runny or stuffy nose" name="interest" value="Runny or stuffy nose" />
                                <label for="music">Vision changes, hearing changes</label>
                              </div>

                            </fieldset>
                        </div>
                        <div class="form-group mb-3">
                                 <button type="submit" name="submit" class="btn btn-primary mt-4">Send</button>
                            </div>
                        </form>       
                    </div>
                    <div class="col-md-8 mt-3">
                         <nav aria-label="Page navigation example">
                          <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                              <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#">Next</a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                   </div>
                   </div> 

</section>


<?php include 'footer.php'?>