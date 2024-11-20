<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Firstname=$_POST['fname'];
    $MIName=$_POST['mname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $School=$_POST['scl'];

    $Male=$_POST['M'];
    $Female=$_POST['F'];
    $grade=$_POST['grade'];
    $me=$_POST['present'];
    $cont=$_POST['cont'];
    $country= $_POST['country'];

     echo"<h2>the records</h2>";
     echo"<table>";
     echo"<tr>";
     echo"<th>First Name</th> ";
     echo"<th>Middle name</th>";
echo"<th>Last name</th>";
echo"<th>Age</th> ";
echo"<th>School</th>"; 
echo"<th>Gender</th>";
echo"<th>IF present</th>";
echo"<th>Continent</th>";
echo"<th>Country</th>";
     echo"</tr>";
     echo"<tr>"
     echo"<td> $Firstname</td>";   
     echo"<td>  $MIName</td>";
echo "<td>  $lname</td>"; 
echo"<td>  $age </td>"; 
echo"<td>   $School</td>"; 
echo"<td> $exam</td>"; 
echo"<td> $grade</td>";
echo"<td> $cont</td>";
echo"<td> $country</td>";
echo"</tr>";
}
?>





