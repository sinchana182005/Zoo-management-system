<!DOCTYPE html>
<html>
<head>
<title>Add Animal</title>
</head>

<body>

<h2>Add Animal Details</h2>

<form method="post">

Animal Name:<br>
<input type="text" name="name"><br><br>

Species:<br>
<input type="text" name="species"><br><br>

Age:<br>
<input type="number" name="age"><br><br>

Enclosure:<br>
<input type="text" name="enclosure"><br><br>

<input type="submit" name="submit" value="Add Animal">

</form>

<?php

if(isset($_POST['submit'])){

$name=$_POST['name'];
$species=$_POST['species'];
$age=$_POST['age'];
$enclosure=$_POST['enclosure'];

echo "<h3>Animal Added Successfully</h3>";

echo "Name: ".$name."<br>";
echo "Species: ".$species."<br>";
echo "Age: ".$age."<br>";
echo "Enclosure: ".$enclosure."<br>";

}

?>

</body>
</html>
