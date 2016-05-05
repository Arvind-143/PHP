<?php

session_start();

if(isset($_SESSION['user']))
{
$con=mysqli_connect('localhost:3306','root','','student');

$sql="Select * from info";

$result=mysqli_query($con,$sql);

$cnt=mysqli_affected_rows($con);

while($row=mysqli_fetch_array($result,MYSQLI_NUM))
{
print "USN=".$row[0]. " and NAME=" .$row[1]."</br>";
print "DOB=".$row[2]. " and DEPARTMENT=" .$row[3]."</br>";
print "Address=".$row[4]. " and Semester=" .$row[5]."</br>";
echo "------------------------------------------------------"."<br/>";
}
mysqli_close($con);
}
else
{
header("location: http://localhost/php/login.php");
}
?>

<html>
<body>
<form action="fetch.php" method="get'>
<input type="Submit" value="Fetch" name="btn">
</form>
</body>
</html>