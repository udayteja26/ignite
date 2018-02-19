<?php session_start();
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
include_once("connection.php");
$sno = $_GET['sno'];

$result = mysqli_query($mysqli, "SELECT * FROM user_details WHERE sno=$sno");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$email = $res['email'];
	$mobile = $res['mobile'];
	$user_city=$res['user_city'];
	$college_name=$res['college_name'];
	$college_id=$res['college_id'];
	$branch=$res['branch'];
	}
?>
<html>
<head>	
<meta charset="UTF-8">
  <title>Ignite User Data Form</title>
  
         <link rel="stylesheet" href="css/style.css">
	<title>Edit Data</title>
</head>

<body>
	
	<h2 align="right" >		
		   Welcome: <?php echo $_SESSION['name'] ?> </br>
		   <a href="logout.php">Logout</a>
	</h2>
	<br/><br/>
	
	<form name="form1" method="post" action="ignitedetailsentryformconn.php">
		<table border="0">
			
		
		
		 <fieldset>
          <legend><span class="number">1</span>Your Personal Information</legend>
          <label for="name">Name:</label>
          <input type="text"  name="name" value="<?php echo $name;?>" required />
          
          <label for="mail">Email:</label>
          <input type="text"  name="email" value="<?php echo $email;?>" required />
		  
		   <label for="mobile">mobile:</label>
           <input type="number"  name="mobile" value="<?php echo $mobile;?>" required />
		   
		   
		   <label for="user_city">City:</label>
           <input type="user_city"  name="user_city" value="<?php echo $user_city;?> "required/>

		  
              		   
              		   
         
     	</fieldset>
		<fieldset>
          <legend><span class="number">2</span>Your College Information</legend>
         
           <label for="college_name">College name:</label>
           <input type="text"  name="college_name" value="<?php echo $college_name;?>" required />
		  
		    <label for="college_id">college id:</label>
            <input type="number" name="college_id" value="<?php echo $college_id;?>" required />
		  
		   <label for="branch">Branch:</label>
             <input type="text" id="branch" name="branch" value="<?php echo $branch;?>" required /> 
		   
		    
		   
             </select>

  </fieldset>
                <fieldset>
          <legend><span class="number">3</span>Ignite Information</legend>
         
         
		  
         <legend>  <label for="tech">Tech Events</label></legend>
        <fieldset> <input type="radio" name="tech" value="tech" >Registered
                   <input type="radio" name="tech" value="N_I" checked>Not Registered </fieldset>
			
		<legend>  <label for="tech">NoN Tech Events</label></legend>
        <fieldset> <input type="radio" name="n_tech" value="n_tech" >Registered
                   <input type="radio" name="n_tech" value="N_I" checked>Not Registered </fieldset>
		 
		 <legend>  <label for="tech">Web development Workshop</label></legend>
          <fieldset><input type="radio" name="web_development" value="web_development" >Registered 
                   <input type="radio" name="web_development" value="N_I" checked>Not Registered </fieldset>
		 
		 <legend>  <label for="tech">App development Workshop</label></legend>
          <fieldset><input type="radio" name="app_development" value="app_development" >Registered 
                   <input type="radio" name="app_development" value="N_I" checked>Not Registered </fieldset>
				   
		
		 <legend>  <label for="tech">Game development Workshop</label></legend>
          <fieldset><input type="radio" name="game_development" value="game_development" >Registered 
                   <input type="radio" name="game_development" value="N_I" checked>Not Registered </fieldset>

          <legend>  <label for="tech">Graphics designing Workshop</label></legend>
          <fieldset><input type="radio" name="graphics_designing" value="graphics_designing" >Registered 
                   <input type="radio" name="graphics_designing" value="N_I" checked>Not Registered </fieldset>				   
		 
		 
		 
		 
    
	
	
          
     

         </fieldset>
		 <fieldset>
             
		     <label for="ignite_id">Ignite Id:</label>
             <input type="text" id="ignite_id" name="ignite_id" required />		 
            <fieldset>
        <button type="submit" name="insert">Save</button>
      </form>
      
    </body>
</html>
  
  
</body>
</html>