<?php ob_start();?>
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'core/Amount.php'; ?>

<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/pricing.css">

<div class="container">
    <h2 class="text-center my-3">Select Disease and Package</h2>

    <form action="payment.php" method="POST">
                <!-- Item 1: Cold & Cough -->
                <div class="col-12 text-center mt-2">  
                        <img src="assets/images/towfiqu-barbhuiya-Yw9Vgr6i_-0-unsplash.jpg" alt="Cold & Cough" class="pricing-img ms-4">
                        <label>
                            <input type="checkbox" name="items[]" value="1" class="ms-4"> 
                            <span class="text3 me-4">Cold</span> 
                        </label>
                        <select name="package[1]" class="border border-5">
                            <option value="Basic">Basic Package</option>
                            <option value="Premium">Premium Package</option>
                        </select>
                        <input type="number" name="quantities[1]" min="1" placeholder="Quantity" class="border border-5">
                        <!-- <input type="number" name="amount[1]" step="0.01" min="0" placeholder="Amount" class="text-secondary border border-5"> -->
                </div>
                <!-- Item 2: Diabetes -->
                <div class="col-12 text-center mt-2">
                        <img src="assets/images/myriam-zilles-KltoLK6Mk-g-unsplash.jpg" alt="Diabetes" class="pricing-img ms-4">
                        <label>
                            <input type="checkbox" name="items[]" value="2" class="ms-4">
                            <span class="text3">Diabetes</span>
                        </label>
                        <select name="package[2]" class="border border-5">
                            <option value="Basic">Basic Package</option>
                            <option value="Premium">Premium Package</option>
                        </select>
                        <input type="number" name="quantities[2]" min="1" placeholder="Quantity" class="border border-5">
                        <!-- <input type="number" name="amount[2]" step="0.01" min="0" placeholder="Amount" class="text-secondary border border-5"> -->
                </div>
                <!-- Item 3: Allergies -->
                <div class="col-12 text-center mt-2">
                        <img src="assets/images/pexels-pixabay-208512.jpg" alt="Allergies" class="pricing-img ms-4">
                        <label>
                            <input type="checkbox" name="items[]" value="3" class="ms-4"> <!-- Use item ID for value -->
                            <span class="text3">Allergies</span> 
                        </label>
                        <select name="package[3]" class="border border-5">
                            <option value="Basic">Basic Package</option>
                            <option value="Premium">Premium Package</option>
                        </select>
                        <input type="number" name="quantities[3]" min="1" placeholder="Quantity" class="border border-5">
                        <!-- <input type="number" name="amount[3]" step="0.01" min="0" placeholder="Amount" class="text-secondary border border-5"> -->
                </div>
                <!-- Item 4: Asthma -->
                <div class="col-12 text-center mt-2">
                        <img src="assets/images/mufid-majnun-cM1aU42FnRg-unsplash.jpg" alt="Asthma" class="pricing-img ms-4">
                        <label>
                            <input type="checkbox" name="items[]" value="4" class="ms-4">
                            <span class="text3 me-2">Asthma</span>
                        </label>
                        <select name="package[4]" class="border border-5">
                            <option value="Basic">Basic Package</option>
                            <option value="Premium">Premium Package</option>
                        </select>
                        <input type="number" name="quantities[4]" min="1" placeholder="Quantity" class="border border-5">
                        <!-- <input type="number" name="amount[4]" step="0.01" min="0" placeholder="Amount" class="text-secondary border border-5"> -->
                </div>
                <!-- Item 5: Hepatitis -->
                <div class="col-12 text-center mt-2">
                        <img src="assets/images/pexels-daniel-frank-287227.jpg" alt="Hepatitis" class="pricing-img ms-4">
                        <label>
                            <input type="checkbox" name="items[]" value="5" class="ms-4"> <!-- Use item ID for value -->
                            <span class="text3">Hepatitis</span> 
                        </label>
                        <select name="package[5]" class="border border-5">
                            <option value="Basic">Basic Package</option>
                            <option value="Premium">Premium Package</option>
                        </select>
                        <input type="number" name="quantities[5]" min="1" placeholder="Quantity" class="border border-5">
                        <!-- <input type="number" name="amount[5]" step="0.01" min="0" placeholder="Amount" class="text-secondary border border-5"> -->
                </div>
                <!-- Item 6: Influenza -->
                <div class="col-12 text-center mt-2">
                        <img src="assets/images/marcelo-leal-k7ll1hpdhFA-unsplash.jpg" alt="Influenza" class="pricing-img ms-4">
                        <label>
                            <input type="checkbox" name="items[]" value="6" class="ms-4">
                            <span class="text3">Influenza</span>
                        </label>
                        <select name="package[6]" class="border border-5">
                            <option value="Basic">Basic Package</option>
                            <option value="Premium">Premium Package</option>
                        </select>
                        <input type="number" name="quantities[6]" min="1" placeholder="Quantity" class="border border-5">
                        <!-- <input type="number" name="amount[6]" step="0.01" min="0" placeholder="Amount" class="text-secondary border border-5"> -->
                </div>
                <!-- Item 7: Heart Disease -->
                <div class="col-12 text-center mt-2">
                        <img src="assets/images/louis-reed-pwcKF7L4-no-unsplash.jpg" alt="Heart Disease" class="pricing-img ms-4">
                        <label>
                            <input type="checkbox" name="items[]" value="7" class="ms-4"> <!-- Use item ID for value -->
                            <span class="text3">Heart D.</span> 
                        </label>
                        <select name="package[7]" class="border border-5">
                            <option value="Basic">Basic Package</option>
                            <option value="Premium">Premium Package</option>
                        </select>
                        <input type="number" name="quantities[7]" min="1" placeholder="Quantity" class="border border-5">
                        <!-- <input type="number" name="amount[7]" step="0.01" min="0" placeholder="Amount" class="text-secondary border border-5"> -->
                </div>
                <!-- Item 8: Bacterial sinusitis -->
                <div class="col-12 text-center mt-2">
                        <img src="assets/images/national-cancer-institute-XknuBmnjbKg-unsplash.jpg" alt="Sinusitis" class="pricing-img ms-4">
                        <label>
                            <input type="checkbox" name="items[]" value="8" class="ms-4">
                            <span class="text3">Sinusitis</span>
                        </label>
                        <select name="package[8]" class="border border-5">
                            <option value="Basic">Basic Package</option>
                            <option value="Premium">Premium Package</option>
                        </select>
                        <input type="number" name="quantities[8]" min="1" placeholder="Quantity" class="border border-5">
                        <!-- <input type="number" name="amount[8]" step="0.01" min="0" placeholder="Amount" class="text-secondary border border-5"> -->
                </div>
            <!-- Add more items as needed -->
        <div class="text-center"><button type="submit" class="btn btn-primary mt-3 mb-5 px-5">Submit</button></div>
        
    </form>
</div>

<?php include 'footer.php'; ?>
