<?php
$title = "Registration Page";
require_once 'path.php';
require_once $header;
require_once $conn;
#require_once $Crud;
if(isset($_POST['submit']))
{ 
  $fname = $_POST['FirstName']; 
  $lname = $_POST['LastName'];
  $eml = $_POST['Email'];
  $pss = $_POST['PassWord'];
  $age = $_POST['Age'];
  $spcl = $_POST['speciality'];
  $addr = $_POST['inputAddress'];
  $add_2 = $_POST['inputAddress2'];
  $city = $_POST['InputCity'];
  $stte = $_POST['InputState'];
  $zip = $_POST['inputZip'];
  $dob = $_POST['DOB'];
  echo $eml;
  //Call function to insert and track if success or not
  $isSuccess = $Crud->InsertUserData(
    $fname, 
    $lname,
    $eml, 
    $pss, 
    $age,
    $spcl,
    $addr,
    $add_2,
    $city,
    $stte,
    $zip,
    $dob
  );
  if($isSuccess)
  {
    echo "<h1> You have successfully </h1>";
  }
  else
  {
    echo "<h1>errormessage</h1>";
  }

}
?>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['FirstName']." ".$_POST['LastName']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['speciality']; ?></h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>


<?php require_once $footer; ?>