<?php
if(isset($_GET["btn"])){
$con=mysqli_connect('localhost:3306','root','','student');
$usn=$_GET["usn"];
$sql="Select * from info where usn='".$usn."'";
$result=mysqli_query($con,$sql);
$val=mysqli_affected_rows($con);


$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
echo "<br/>"."------------------------------------------------------"."<br/>";

echo "<font size=4 face='Arial'>USN:</font>".$row['usn']. "</br>";
print "<font size=4 face='Arial'>NAME:</font>" .$row['name']."</br>";
print "<font size=4 face='Arial'>DOB:</font>".$row['dob']. "</br>";
print "<font size=4 face='Arial'>DEPARTMENT:</font>".$row['department']."</br>";
print "<font size=4 face='Arial'>ADDRESS:</font>".$row['address']."</br>";
print "<font size=4 face='Arial'>SEMESTER:</font>".$row['semester']."</br>";
echo "------------------------------------------------------"."<br/>";


if($val)
print "Record found";
else
print "Record NOT found";
mysqli_close($con);
}
?>

<html>

<style> 
body {
    background: url("0011.jpg");
    background-size: 800px 600px;
    background-repeat: no-repeat;
    padding-top: 40px;
}
h1 {
    text-align: center;
}

h2 {
    text-align: left;
}


}
</style>
<script type="text/javascript">
function validateForm() {
   
	 var textusn = document.getElementById('usn');
   
	if (textusn.value == '') 
	{
        alert('Please enter a USN.');
        return false;
    	}
    return true;
}
</script>
<form action="search.php" onsubmit="return validateForm();" method="GET">
<h1>SEARCH STUDENT RECORD</h1><br/>
Enter USN to Search <input type="text" name="usn" id="usn"> <br>
<input type="submit" value="Search" name="btn">
<input type="reset" value="Clear"  onclick="location.href='http://localhost/php/search.php'">
</form>
</body>
</html>