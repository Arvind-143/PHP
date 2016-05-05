<?php
if(isset($_GET['btn']))
{
session_start();
$con=mysqli_connect('localhost:3306','root','','student');
$uname=$_GET['uname'];
$pawd=$_GET['pawd'];

$sql="Select * from login where uname='".$uname."' and pawd='".$pawd."'";

$result=mysqli_query($con,$sql);

$cnt=mysqli_affected_rows($con);

$row=mysqli_fetch_array($result,MYSQLI_NUM);

$_SESSION['user']=$row[0];
//print $row[0]. "and" .$row[1]."</br>";

if($cnt==1)
header("location: http://localhost/php/home.html");
else
print "Please try again";
mysqli_close($con);
}
?>

<html>
<style> 
body {
    background: url("001.jpg");
    background-size: 800px 600px;
    background-repeat: no-repeat;
    padding-top: 40px;
}
</style>
<center><form action="login.php" method="get">
<h1>Enter User Name:<input type="text" name="uname"><h1>
Enter Password:<input type="password" name="pawd"></center>
<br/>
<center><input type="Submit" value="Login" name="btn"></center>
</form>
</body>
</html>