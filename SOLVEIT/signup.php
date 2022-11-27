<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
        <link rel="stylesheet" href="main.css">
    </head>
<body>
<?php
include_once 'create.php';
$passuseErr="";
$nameErr = $passwordErr=$password2Err=$mismatchErr=$emailErr="";
$username = $password=$password2=$email="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "UserName is required";
  } else {
    $username = test_input($_POST["username"]);
  }
  if (empty($_POST["email"])) {
    $emailErr= "gmail is required";
  
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  
  } else {
    $password = test_input($_POST["password"]);
  }
  if (empty($_POST["password2"])) {
    $password2Err = "password is required";
  
  } else {
    $password2= test_input($_POST["password2"]);
  }
  if($password!=$password2)
  {
    $mismatchErr="passwords does not match";
  }
  if (!empty($username)&&!empty($password))
  {
  $conn = OpenCon();
  $sql = "SELECT * FROM user WHERE username='$username' and password = '$password'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==1) 
  {
		
     $_SESSION['auth']='true';
	 header('Location: http://localhost/pro 2/welcome.html');
     }
     else{
     echo "<text colr='red'>Invalid username or password.Retry in 3 seconds </text>"; 
      header("refresh: 3");
    }
     }
    }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  <form >
        <h1>Register</h1>
        <div class="textBoxdiv1">
        <input type="text" name="username" placeholder="username" value="<?php echo $username;?>"> 
        </div> 
        <span class="error"> <?php echo $nameErr;?></span>
        <div class="textBoxdiv1">
        <input type="text" name="email" placeholder="email" value="<?php echo $email;?>">
        </div>
        <span class="error"> <?php echo $emailErr;?></span>
        <div class="textBoxdiv1">
        <input type="text" name="password" placeholder="password" value="<?php echo $password;?>">
        </div>
        <span class="error"> <?php echo $passwordErr;?></span>
        <div class="textBoxdiv1">
        <input type="text" name="password2" placeholder="confirm password" value="<?php echo $password2;?>">
        </div>
        <span class="error"> <?php echo $password2Err;?></span>
        <input type="submit" value="Register" class="logindiv">
        <div class="signup">
        Already have an account?
        <br>
        <a href="login.html">Login</a>
    </div>
    </form>

</body>
</html>