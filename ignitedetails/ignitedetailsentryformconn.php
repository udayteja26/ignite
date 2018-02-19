<?php session_start();
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
include("connection.php");
  $con =mysqli_connect('localhost','root','klu@1234');
  
   if(!$con)
   {
	   echo 'not connected to server';
   }
   
   if(!mysqli_select_db($con,'ignite'))
   {
	   echo 'database not selected';
   }
   
   $ignite_id=$_POST['ignite_id'];
   $loginId = $_SESSION['id'];
   $name = $_POST['name'];
	$email = $_POST['email'];
	$mobile=$_POST['mobile'];
	$user_city=$_POST['user_city'];
    $college_name=$_POST['college_name'];
	$college_id=$_POST['college_id'];
	$branch=$_POST['branch'];
	$tech=$_POST['tech'];
    $n_tech=$_POST['n_tech'];
    $web_development=$_POST['web_development'];
    $app_development=$_POST['app_development'];
    $game_development=$_POST['game_development'];
    $graphics_designing=$_POST['graphics_designing'];
    
	
	$result = mysqli_query($mysqli, "SELECT * FROM ignite_details ");

   
     while($res = mysqli_fetch_array($result))
       {
	     $igniteid = $res['ignite_id'];
	     
	      
	
	   }
	    

	    $sam=$igniteid;

    	if($ignite_id==$sam)
		{
			echo 'Please provide valid ignite id';
		}
        else
		{
           
           $sql ="INSERT INTO ignite_details (name,email,mobile,user_city,college_name,college_id,branch,tech,n_tech,web_development,app_development,game_development,graphics_designing,ignite_id,login_id) VALUES ('$name','$email','$mobile','$user_city','$college_name','$college_id','$branch','$tech','$n_tech','$web_development','$app_development','$game_development','$graphics_designing','$ignite_id','$loginId')";


                   
             

               
	         if(!mysqli_query($con,$sql))
	          {
	           	 echo 'not inserted';
	          }
	 
	         else
	          {
		            header('Location:index.php');
	          }

		 }

   
	   
?>