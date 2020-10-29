<?php 
  //creating connection to database
$con=mysqli_connect("sql202.emulasite.ml","emul_26940396","","v4q95h60") or die(mysqli_error());
  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['name']);
$Email = $con->real_escape_string($_POST['email']);
$Sub = $con->real_escape_string($_POST['sub']);
$Content = $con->real_escape_string($_POST['content']);
  //query to insert the variable data into the database
$sql="INSERT INTO contact_form (name, email, sub, content) VALUES ('".$Name."','".$Email."', '".$Sub."', '".$Content."')";
  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo "Thank you! We will get in touch with you soon";
}
?>