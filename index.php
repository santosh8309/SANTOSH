<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

 <?php
$firstname = $_GET['firstname'];
$password = $_GET['password'];

  if ($firstname=='santosh' and $password=='nenavath') {
  
	echo "<font color='green'>You are most welcome</font>". ' '.
	htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') .' '. 
	htmlspecialchars($password,ENT_QUOTES, 'UTF-8'). '!';

   }
   
   else{
 
   	echo "<font color='green'>You are most welcome Guest!</font>";
   }
   
?>

</body>
</html>
