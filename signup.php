


<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="author" content="roy Cuadra">
  <meta name="description" content="HTML">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./material-icon.css" type="text/css" >
  <link rel="stylesheet" href="./style.css">
  <title>Animated Login From</title>
</head>

<body>
  <div class="login_form_container">
    <div class="login_form">
      <h2>Sign Up</h2>
      <form method="post">
        <div class="input_group">
          <i class="material-symbols-outlined">person</i>
          <input type="text" placeholder="Username" class="input_text" id="username" name="user_name" autocomplete="off">
        </div>
        <div class="input_group">
          <i class="material-symbols-outlined">lock</i>
          <input type="password" placeholder="Password" class="input_text" id="password" name="password" autocomplete="off">
        </div>
        <p style="color: #00ccff;text-align: center;margin-top:5px;" id="message"></p>

        <div class="button-center">
          <input id="login_button" type="submit" name="log" value="Sign Up">

        </div>
		
      </form>
      <div class="fotter" >
		<a href="login.php">Click to Log-In</a><br><br>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="./main.js"></script>
</body>

</html>

<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "<script>alert('PLEASE PUT SOME INFORMATION');</script>";
		}
	}
?>