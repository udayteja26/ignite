<?php session_start();

if(!isset($_SESSION['valid'])) {
	header('Location:login.php');
}
  $con =mysqli_connect('localhost','root','klu@1234');
  
   if(!$con)
   {
	   echo 'not connected to server';
   }
   
   if(!mysqli_select_db($con,'ignite'))
   {
	   echo 'database not selected';
   }
  $name = $_POST['name'];
	$loginId = $_SESSION['id'];
	$email = $_POST['email'];
	$mobile=$_POST['mobile'];
	$user_city=$_POST['user_city'];
	$college_name=$_POST['college_name'];
	$college_id=$_POST['college_id'];
	$branch=$_POST['branch'];


    	if(isset($_POST['view'])) 
{
	?>
	<html>
	<script>
     function goBack() {
    window.history.back();
}
</script>

	   
	  <body align="center" >
	      <h1>Name :- <?PHP echo $name;    ?> </h2><br>
		  <h1>Email :- <?PHP echo $email;    ?> </h2><br>
		  <h1>Mobile :- <?PHP echo $mobile;    ?> </h2><br>
		  <h1>College Name :- <?PHP echo $college_name;    ?> </h2><br>
		  
		 <button onclick="goBack()">Go Back</button>
	  </body>
	</html>
	
<?PHP	
	
}
if(isset($_POST['insert'])) 
{

$sql ="INSERT INTO user_details (name,login_id,email,mobile,user_city,college_name,college_id,branch) VALUES ('$name','$loginId','$email','$mobile','$user_city','$college_name','$college_id','$branch')";
     
	 if(!mysqli_query($con,$sql))
	 {
		 echo 'not inserted';
	 }
	 
	 else
	 {
		 
		 
		 header('Location:userdetailsentryform.php');
	 }

}  
 ?>