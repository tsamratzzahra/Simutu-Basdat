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
  <h1>SIMUTU</h1> 
  <p class="bg-primary text-white">Set Your Target!</p>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">

    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="dashboard_coba.php">HOME</a></li>
	  <li><a href="Target.php">PASANG TARGET</a></li>
			<li><a href="Tabungan.php">MENABUNG</a></li>
                <li><a href="Hutang.php">CATAT HUTANG</a></li>
                <li><a href="track.php">CEK DISINI</a></li>
                  <li><a href="Logout_simutu.php">LOGOUT</a></li>
		</ul>
    </ul>
  </div>
</nav>

<div class="container">
  <h2>YOUR TARGET</h2>
  <form method="post" action="target.php" name="target">
  
    <div class="form-group">
      <label for="name">TARGET</label>
      <input type="text" class="form-control" id="text" placeholder="Target" name="target" required>

    </div>
    
    <div class="form-group">
      <label for="nominal">NOMINAL</label>
      <input type="number" class="form-control" id="nominal" placeholder="Nominal" name="nominal">
    </div>
    
     
    <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT">
  </form>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p><mark>GOOD LUCK EVERYONE!<mark></p>
</div>

</body>
</html>

<?php
error_reporting(0);
$db = pg_connect("host=localhost port=5432 dbname=db_simutu user=postgres password=bismillahUSA2022");
$query = "INSERT INTO tb_target (id_register, nama_target, nominal_target) VALUES ('1','$_POST[target]','$_POST[nominal]')";
$result1= pg_query($query);
if ($result1==TRUE and $_POST['target'] != "")
{
  echo "Target successfull";
  header("location: dashboard_coba.php");
} else
{
  echo "";
} 
?>