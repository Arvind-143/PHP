<?php
if(isset($_GET["btn"])){
$con=mysqli_connect('localhost:3306','root','','student');
$usn=$_GET["usn"];

$sql="Delete from info where usn='".$usn."'";

mysqli_query($con,$sql);
$val=mysqli_affected_rows($con);

if($val)

print "Record Deleted";
else
print "Unable to Delete";
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
<form action="delete.php" onsubmit="return validateForm();" method="get">
<h1>DELETE STUDENT RECORD</h1><br/>
Enter USN to Delete <input type="text" name="usn" id="usn"><br>
<input type="submit" value="Delete" name="btn">
<input type="reset" value="Clear"  onclick="location.href='http://localhost/php/delete.php'">
</form>
</body>
</html>