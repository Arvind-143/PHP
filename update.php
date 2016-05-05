<?php
if(isset($_GET['btn'])){
$con=mysqli_connect("localhost:3306","root",'',"student");
$usn=$_GET['usn'];
$name=$_GET['name'];
$dob=$_GET['dob'];
$department=$_GET['department'];
$address=$_GET['address'];
$semester=$_GET['semester'];

$sql="update info set name='".$name."' , dob='".$dob."' , department='".$department."' , address='".$address."', semester='".$semester."' where usn='".$usn."'";
echo "Affected rows: " . mysqli_affected_rows($con);

mysqli_query($con,$sql);
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
<form action="update.php" onsubmit="return validateForm();"  method="GET">
<h1> <font color="blue">UPDATE STUDENT RECORD</font></h1><br/>
<h2>Enter USN:<input type="text" name="usn" id="usn"><br></h2>
<h2>Enter Name:<input type="text" name="name" id="name"><br></h2>
<h2>Enter Dob:<input type="text" name="dob"><br></h2>
<h2>Enter Department:<input type="text" name="department"><br></h2>
<h2>Enter Address:<input type="text" name="address"><br></h2>
<h2>Enter Semester:<input type="text" name="semester"><br></h2>
<input type="submit" value="Update" name="btn">
</form>
</body>
</html>