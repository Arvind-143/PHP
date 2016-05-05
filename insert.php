<?php
if(isset($_GET['btn'])){

$con=mysqli_connect('localhost:3306','root','','student');
$usn=$_GET['usn'];
$name=$_GET['name'];
$dob=$_GET['dob'];
$department=$_GET['department'];
$address=$_GET['address'];
$semester=$_GET['semester'];
$val=mysqli_affected_rows($con);


$sql="Insert into info values('".$usn."','".$name."','".$dob."','".$department."','".$address."','".$semester."')";
if($val==0)
print "Record Inserted Successfully";
else
print "Unable To Insert";

$ret_val=mysqli_query($con,$sql);
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
    var textarea = document.getElementById('name');
	 var textusn = document.getElementById('usn');
    if (textarea.value == '') 
	{
        alert('Please enter a Name.');
        return false;
    	}
	if (textusn.value == '') 
	{
        alert('Please enter a USN.');
        return false;
    	}
    return true;
}
</script>
<form action="insert.php" onsubmit="return validateForm();" method="GET">
<center>
<h1><font color="blue">INSERT STUDENT RECORD</font></h1><br/>
<h2>Enter USN:<input type="text" name="usn" id="usn"><br></h2>
<h2>Enter Name of Student:<input type="text" name="name" id="name"><br></h2>
<h2>Enter Date of Birth:<input type="text" name="dob"><br></h2>
<h2>Enter Department:<input type="text" name="department"><br></h2>
<h2>Enter Address:<input type="text" name="address"><br></h2>
<h2>Enter Semester:<input type="text" name="semester"><br></h2>
<h2><input type="Submit" value="Insert" name="btn" onclick="return check();"></h2>
<h2><input type="reset" value="Reset"></h2>
</center>

</form>
</body>
</html>