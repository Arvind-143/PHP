<?php

session_start();

if(isset($_SESSION['counter']))
{
$_SESSION['counter']+=1;
}
else
{
$_SESSION['counter']=1;
}

$msg="you have visited this page ".$_SESSION['counter']. "number of times";

session_destroy();
?>

<html>
<body>

<h3><?php echo($msg) ?> </h3>

</body>
</html>