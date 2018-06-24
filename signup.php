<?php
session_start();
require 'dbconfig.php/config.php';
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login/Registration Form Transition</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="css/signupstyle.css">

  
</head>

<body style=" background:black">

<div class="cont">
  <div class="form sign-in">
   <form method="post" action="signup.php">
    <label style="text-shadow:200px">Email:</label>
      
      <input type="email" name="siemail" style="margin-bottom:20px;margin-left:50px" placeholder="Enter your email" />
    <label style="text-shadow:200px">Password:</label>

      <input type="password" name="sipassword" style="margin-bottom:20px;margin-left:50px" placeholder="Enter your password"/>
   
    <h1>  </h1><button type="submit" name="signin_submit" class="submit">Sign In</button>
    <button type="submit" name="adsignin_submit" class="submit">Admin Sign In</button>
    <button type="submit" name="gsignin_submit" class="submit">Guide Sign In</button>
    </form>
  </div>
  <div class="sub-cont" style="">
    <div class="img" style="">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and discover great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
<div class="form sign-up" style="margin-top:-5%">
    <form method="post" action="signup.php">
      <label style="text-shadow:200px">First Name:</label>
      <input type="text" name="ufirstname" placeholder="Enter your firstname" style="margin-bottom:20px;margin-left:50px" / required="">
  
      
<label style="text-shadow:200px">Last Name :</label>
        <input type="text"  name="ulastname" placeholder="Enter your lastname" style="margin-bottom:20px;margin-left:50px" / required="">
      
      
         <label style="text-shadow:200px">Email:</label>
        <input type="email" name="uemail" placeholder="Enter your email" style="margin-bottom:20px;margin-left:50px" / required="">
      
      
        <label style="text-shadow:200px">Phone no:</label>
        <input type="number" name="uphno" placeholder="Enter phonenumber" style="margin-bottom:20px;margin-left:50px" / required="">
    
        <label style="text-shadow:200px">Date Of Birth:</label>
        <input type="date" name="udob"  style="margin-bottom:20px;margin-left:50px;text:transparent" / required="">


  <label style="text-shadow:200px">Country:</label>
 <select name="ucountry" style="border:transparent;text-align:center;margin-left:45px;font-size:16px;" / required="">
  <option value="India">India</option>
  <option value="America">America</option>
  <option value="Thailand">Thailand</option>
  <option value="Saudi Arabia">Saudi Arabia</option>
  <option value="China">China</option>
  <option value="Russia">Russia</option>
  <option value="Portugal">Portugal</option>


        </select>
    
    
      <label style="text-shadow:200px">Password:</label>
        <input type="password" name="upassword" placeholder="Enter your password" style="margin-bottom:20px;margin-left:50px;text:transparent" / required="">
      
      <button type="submit" name="signup_submit" class="submit" value="Sign me">Sign me</button>
      

    </form>
    </div>
  </div>
</div>


    <script  src="js/index1.js"></script>

  <?php
if (isset($_POST['signup_submit'])) {
   // echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
    $ufirstname=$_POST['ufirstname'];
    $ulastname=$_POST['ulastname'];
    $uemail=$_POST['uemail'];
    $uphno=$_POST['uphno'];
    $udob=$_POST['udob'];
    $ucountry=$_POST['ucountry'];
    $upassword=$_POST['upassword'];
      $query="select * from user WHERE Uemail='$uemail'";
        $query_run = mysqli_query($con,$query);
            if (mysqli_num_rows($query_run)>0) {
                  echo '<script type="text/javascript"> alert("username already exists try another username") </script>';
                  }
            else{
             $query ="insert into user values('$ufirstname','$ulastname',NULL,'$uemail','$uphno','$udob','$ucountry','$upassword')";
                        $query_run = mysqli_query($con,$query);
                 if ($query_run) {
                   echo '<script type="text/javascript"> alert("user registered.. go to login page") </script>';
                  
                         }
                  else{
                        echo '<script type="text/javascript"> alert("!Error") </script>';
                  }
            }

}     
if(isset($_POST['signin_submit'])) 
    {     //echo '<script type="text/javascript"> alert("SignIn button clicked") </script>';

        $siemail = $_POST["siemail"]; 
        $sipassword = $_POST["sipassword"]; 
        //echo '<script type="text/javascript"> alert("values entered") </script>';
        $query= "select * FROM user WHERE Uemail = '$siemail' AND  Upassword = '$sipassword'";
        $query_run = mysqli_query($con,$query);
//echo '<script type="text/javascript"> alert("result found") </script>';
        if(mysqli_num_rows($query_run)>0)
        { 
        	//echo '<script type="text/javascript"> alert("Welcome") </script>' ;
        	header("Location:/Plan/index.php");
        	exit;
        	//echo '<script type="text/javascript"> alert("facebook") </script>' ;
         
        }
        else
        {
        	//header("Location:https://www.flipkart.com/");
        	echo '<script type="text/javascript"> alert("Wrong Try again") </script>' ;
            echo 'The username or password are incorrect!';
        }
}
else if(isset($_POST['adsignin_submit'])) 
    {     //echo '<script type="text/javascript"> alert("SignIn button clicked") </script>';

        $siemail = $_POST["siemail"]; 
        $sipassword = $_POST["sipassword"]; 
        //echo '<script type="text/javascript"> alert("values entered") </script>';
        $query= "select * FROM admin WHERE Aemail = '$siemail' AND  Apassword = '$sipassword'";
        $query_run = mysqli_query($con,$query);
//echo '<script type="text/javascript"> alert("result found") </script>';
        if(mysqli_num_rows($query_run)>0)
        { 
        	//echo '<script type="text/javascript"> alert("Welcome") </script>' ;
        	header("Location:/Plan/index.php");
        	exit;
        	//echo '<script type="text/javascript"> alert("facebook") </script>' ;
         
        }
        else
        {
        	//header("Location:https://www.flipkart.com/");
        	echo '<script type="text/javascript"> alert("Wrong Try again") </script>' ;
            echo 'The username or password are incorrect!';
        }
}
else if(isset($_POST['gsignin_submit'])) 
    {     //echo '<script type="text/javascript"> alert("SignIn button clicked") </script>';

        $siemail = $_POST["siemail"]; 
        $sipassword = $_POST["sipassword"]; 
        //echo '<script type="text/javascript"> alert("values entered") </script>';
        $query= "select * FROM guide WHERE Gemail = '$siemail' AND  Gpassword = '$sipassword'";
        $query_run = mysqli_query($con,$query);
//echo '<script type="text/javascript"> alert("result found") </script>';
        if(mysqli_num_rows($query_run)>0)
        { 
        	header("Location:https://www.flipkart.com/");
        	//echo '<script type="text/javascript"> alert("Welcome") </script>' ;
        	//header("Location:/Plan/index.php");
        	exit;
        	//echo '<script type="text/javascript"> alert("facebook") </script>' 
        }
        else
        {
        	//header("Location:https://www.flipkart.com/");
        	echo '<script type="text/javascript"> alert("Wrong Try again") </script>' ;
            echo 'The username or password are incorrect!';
        }
}
?>
</body>


</html>
