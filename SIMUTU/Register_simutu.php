<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP PostgreSQL Registration & Login Example </title>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>SiMutu</h1> 
  <p class="bg-primary text-white">Set Your Target!</p>
</div>

<div class="container">
  <h2>REGISTRATION SIMUTU</h2>
  <form name="register" action="Register_simutu.php" method="POST" >
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>

    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Eemail" name="email">
    </div>
    
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
    </div>
    
    <div class="form-group">
      <label for="number">No.Phone:</label>
      <input type="number" class="form-control" id="notlp" placeholder="No. Phone" name="notlp">
    </div> 
    
    
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
    </div>
<li>
<input type="submit" name="submit" class="btn btn-primary" value="REGISTER">
</form>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>THANK YOU</p>
</div>

</body>
</html>

<?php
error_reporting(0);
$db = pg_connect("host=localhost port=5432 dbname=db_simutu user=postgres password=bismillahUSA2022");
$query = "INSERT INTO tb_register (nama_lengkap, email, username, no_telepon, password) VALUES ('$_POST[name]','$_POST[email]',
'$_POST[username]','$_POST[notlp]','$_POST[pwd]')";
$result = pg_query($query);

if ($result==TRUE and $_POST['name'] != "")
{
  echo "Register successfull";
  header("location: index.php");
  
} else
{
  echo "";
} 
?>