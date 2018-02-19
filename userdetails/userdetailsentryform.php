<?php session_start();


if(!isset($_SESSION['valid'])) {
	header('Location:login.php');
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Ignite User Data Form</title>
  
         <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
   
    <body>
	<h2 align="right" >		
		   Welcome: <?php echo $_SESSION['name'] ?> </br>
		    <a href="index.php">Home</a>
		   <a href="logout.php">Logout</a>
          	   
		 </h2> 

      <form action="userdetailsentryconn.php" method="post">
      
        <h1>Ignite User Data Form</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your Personal Information</legend>
          <label for="name">Name:</label>
          <input type="text"  name="name" required />
          
          <label for="mail">Email:</label>
          <input type="text"  name="email" required />
		  
		   <label for="mobile">mobile:</label>
           <input type="number"  name="mobile" required />
		   
		   
		   <label for="user_city">City:</label>
           <input type="user_city"  name="user_city" required/>
           
      
		   		   
				   
         
     	</fieldset>
		
		
		
		<fieldset>
          <legend><span class="number">2</span>Your College Information</legend>
         
           <label for="college_name">College name:</label>
           <input type="text"  name="college_name" required />
		  
		    <label for="college_id">college id:</label>
            <input type="number" name="college_id" required />
		  
		    <label for="branch">Branch:</label>
             <input type="branch" id="branch" name="branch" required />
			 
         

         </fieldset>
	 
		
		
		
         <button type="submit" name="view" value="view">View Data</button>
		
        <button type="submit" name="insert" value="insert">Save</button>
      </form>
      
    </body>
</html>