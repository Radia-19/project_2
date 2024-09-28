<?php ob_start();?>
<?php include 'header.php'?>
<?php include 'loginCheck.php'?>
<?php include 'navbar.php'?>
<?php include 'core/Code.php'?>

<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/pricing.css">
<div class="container">
	<table class="table mt-5 mb-5">
	<thead>
    <tr class="text-center">
      <th scope="col">Serial No.</th>
      <th scope="col">Patient Name</th>
      <th scope="col">No. of Disaese</th>
      <th scope="col">Total Amount</th>
    </tr>
  </thead>
  <tr class="text-center">
    <td>1</td>
    <td>Ahmed Murtaja</td>
    <td>3</td>
    <td>&#2547; 500</td>
  </tr>
  <tr class="text-center">
    <td>2</td>
    <td>Jahan Ara</td>
    <td>5</td>
    <td>&#2547; 2,000</td>
  </tr>
  <tr class="text-center">
    <td>3</td>
    <td>Mariam Akter</td>
    <td>4</td>
    <td>&#2547; 2,50</td>
  </tr>
  <tr class="text-center">
    <td>4</td>
    <td>Sharjahan Islam</td>
    <td>1</td>
    <td>&#2547; 100</td>
  </tr>
</table>
</div>




<?php include 'footer.php'?>