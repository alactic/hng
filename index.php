<?php 
   include("db_connection.php");

   if(isset($_POST['submitPost'])){
   	  $firstname=$_POST['firstname'];
   	  $middlename=$_POST['middlename'];
   	  $surname=$_POST['surname'];
   	  $github=$_POST['github'];
   	  $slack=$_POST['slack'];

   	  $insert=$connection->prepare("INSERT INTO details (`firstname`,`middlename`,`surname`,`github`,`slack`) VALUE('$firstname','$middlename','$surname','$github','$slack')");
   	    $insert->execute();
   	    if($insert){
   	    	echo "SUBMISSION WAS SUCCESSFUL";
   	    }
   }

?>

<!DOCTYPE html>
<html>
<head>
	<title>stage1</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <form  method="post" action="index.php"> 
     <center><h2>BRIEF DETAILS</h2></center>
   	  <div>
   	     <span>Firstname:</span><br>
   	      <input type="text" name="firstname" required></div>

   	  <div>
   	      <span>Middlename:</span> <br>
   	      <input type="text" name="middlename" required></div>

   	  <div>
   	     <span>Surname:</span><br>
   	       <input type="text" name="surname" required></div>

   	  <div>
   	     <span>Github Username:</span><br>
   	      <input type="text" name="github" required></div>

   	  <div>
   	     <span>Slack Usernsme:</span> <br>
   	       <input type="text" name="slack" required></div>

   	  <button type="submit" name="submitPost">SUBMIT</button>
   </form>
</body>
</html>