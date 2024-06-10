<?php
session_start();

    include("connection.php");

  if($_SERVER['REQUEST_METHOD'] == "POST"){
   //Something was posted
    
    $email= $_POST['email'];
    $password= $_POST['password'];
   if(!empty($email)&& !empty($password))
   {
      //read from database
      $query = "select * from registration where email = '$email' limit 1";
      $result = mysqli_query($con, $query);
      if($result)
      {
          if($result && mysqli_num_rows($result) > 0)
         {
         $user_data = mysqli_fetch_assoc($result);
         
         if($user_data['password'] === $password){
             
             $_SESSION['id'] = $user_data['id'];

             header("Location:dashboard.php");
                 die;
         }
      }

   }
    echo"wrong email or password";
   }else
   {
      echo"please enter some valid information!";
   }

  }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Myles Fashion House</title>
	<link rel="stylesheet" type="text/css" href="pp.css">
</head>
<body background="C:\xampp\htdocs\MylesFashionHouse\img\TIMBER.jpeg">
<header>
	<strong>Welcome to Myles Fashion House Online Shopping.</strong>
	

		
	</div>
</header>
<h1>Enter credentials to Login</h1>
<marquee><strong>The House of Fashion</strong> </marquee>
<img src="house.png" alt="logo" width="200" height="200">


<form action="log.php" method="POST">
	<h1>Login form</h1>

	<label>Email:</label>
	<input type="email" name="email" placeholder="Enter your email address"><br><br>


	<label>Password</label>
	<input type="password" name="password" placeholder="Enter your password"><br><br>


	<button type="submit">  Login</button><br><br>


	Dont have an Account? <button><a href="registration.php"> SignUp</button></a>
</form><br><br>


<hr>
<table>
	
	<thead>
		<tr>
			<th>ID</th>
			<th>Names</th>
			<th>Email</th>
			<th>Contact</th>
			<th>Address</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>1</td>
			<td>Achim A A</td>
			<td>achimug0@gmail.com</td>
			<td>0701812177</td>
			<td>Mbarara city</td>
			<td> 
				<a href="">edit</a> 
				<a href="">delete</a>
			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Allan A</td>
			<td>allan@gmail.com</td>
			<td>075837261</td>
			<td>Kampala city</td>
			<td> 
				<a href="">edit</a> 
				<a href="">delete</a>
			</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Sheebah A</td>
			<td>sheebah@gmail.com</td>
			<td>074137261</td>
			<td>Tungamo city</td>
			<td> 
				<a href="">edit</a> 
				<a href="">delete</a>
			</td>
		</tr>
	</tbody>

</table>

	<p> This ia a paragraph content in the 
		<b>body</b> </p>



</body>
</html>