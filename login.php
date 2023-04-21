
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
	<h1 style="color:white;" id="message"></h1>
  <div class="login_form_container">
    <div class="login_form" >
      <h2>Login</h2>
      <form method="post">
        <div class="input_group">
          <i class="material-symbols-outlined">person</i>
          <input type="text" placeholder="Username" class="input_text" id="username" name="user_name" autocomplete="off" required>
        </div>
        <div class="input_group">
          <i class="material-symbols-outlined">lock</i>
          <input type="password" placeholder="Password" class="input_text" id="password" name="password" autocomplete="off" required>
        </div>
        <p style="color: #00ccff;text-align: center;margin-top:5px;" id="message"></p>

        <div class="button-center">
          <input id="login_button" type="submit" name="log" value="Submit">

        </div>
		
      </form>
      <div class="fotter" >
		<a href="signup.php">Click to Signup</a><br><br>
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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "<script>alert('Wrong username or password')</script>";
		}else
		{
			echo "<script>alert('Please put username and password')</script>";
		}
	}

?>
			
		