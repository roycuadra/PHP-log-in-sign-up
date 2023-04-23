


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
      <form method="post" onsubmit=" Form()">
        <div class="input_group">
          <i class="material-symbols-outlined">person</i>
          <input type="text" placeholder="Username" class="input_text" id="username" name="user_name" autocomplete="off">
        </div>
        <div class="input_group">
          <i class="material-symbols-outlined">lock</i>
          <input type="password" placeholder="Password" class="input_text" id="password" name="password" autocomplete="off">
        </div>
        <p id="message" style="text-align:center;"></p>

        <div class="input_group">
          <i class="material-symbols-outlined">lock</i>
          <input type="password" placeholder="Confirm-Password" class="input_text" id="cpassword" name="cpassword" autocomplete="off">
          
          
       
        </div>
        <p id="cmessage" style="text-align:center;"></p>

        <div class="button-center">
          <input id="login_button" type="submit" name="log" value="Sign Up">
          <p style="color: #00ccff;text-align: center;margin-top:1px;" id="message"></p>

        </div>
		
      </form>
      <div class="fotter" >
		<a href="login.php">Click to Log-In</a><br><br>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="./main.js"></script>
  <script>
    function Form() {
      const username = document.getElementById("username").value;
      const password = document.getElementById("password").value;
      const confirmPassword = document.getElementById("cpassword").value;
      var message = "Password do not match";
      var cmessage = "Password do not match";
     
      if (username === "" || password === "" || confirmPassword === "") {
        alert("Please fill in all fields.");
        return false;
      } else if (password !== confirmPassword) {
        document.getElementById("message").innerHTML = message;
        document.getElementById("cmessage").innerHTML = cmessage;
        document.getElementById("message").style.color = "red";
        document.getElementById("cmessage").style.color = "red";

        return false;
      } else {
        alert("Registered Successfully!!")
        return false;
      }
    }
    
  </script>
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
			$user_id = random_num(1);
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