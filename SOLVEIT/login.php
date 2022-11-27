
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>

<?php
include_once 'create.php';
$passuseErr="";
$nameErr = $passwordErr ="";
$username = $password= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "UserName is required";
  } else {
    $username = test_input($_POST["username"]);
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
  if (!empty($username)&&!empty($password))
  {
  $conn = OpenCon();
  $sql = "SELECT * FROM user WHERE username='$username' and password = '$password'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==1) 
  {
		$_SESSION['auth']='true';
	 header('Location:http://localhost/SOLVEIT/maincode.php');
     }
     else{
     echo '<h1> <centre>Invalid username or password.Retry in 3 seconds </centre></h1>'; 
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

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <h1>Login</h1>
        <div class="textBoxdiv">
        Name: <input type="text" name="username" placeholder="username" value="<?php echo $username;?>">
       </div>
        <span class="error"> <?php echo $nameErr;?></span>
        <div class="textBoxdiv">
        password: <input type="password" name="password" placeholder="password" value="<?php echo $password;?>">
        </div>
        <span class="error"> <?php echo $passwordErr;?></span>
        <input type="submit" value="Login" class="logindiv" name="submit">
       <centre> OR LOGIN USING</centre>
        
       <br> 
       <div class="social-icons">
          <a href="https://www.google.com">  <div class="social-icon google"><span class="fa fa-Google"></span></div></a>
          <a href="https://in.linkedin.com/">  <div class="social-icon linkedin"><span class="fa fa-LinkedIn"></span></div></a>
          <a href="https://github.com/login">  <div class="social-icon github"><span class="fa fa-GitHub"></span></div></a>
        </div>
        <div class="signup">
        Dont have an account?
        </br>
        <a href="signup.html">Sign up</a>
    </div>

    </form>


</body>
</html>