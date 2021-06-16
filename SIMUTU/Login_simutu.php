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
  <h2>LOGIN MUTU</h2>
  <form method="post" action="proseslogin.php" method="POST">
  
     
    <div class="form-group">
      <label for="text">Username:</label>
      <input type="text" class="form-control" id="text" placeholder="Username" name="username">
    </div>
    
     
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    </div>
     
    <input type="submit" name="submit" class="btn btn-primary" value="LOG IN">
  </form>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>THANK YOU</p>
</div>

</body>
</html>