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
  <p class="bg-primary text-white">Ayo Nabung!</p>
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
  <h2>YOUR GOALS</h2>
  <form method="post">
  
    <div class="form-group">
      <label for="date">DATE</label>
      <input type="date" class="form-control" id="date" placeholder="" name="date" required>

    </div>
    
    <div class="form-group">
      <label for="number">NOMINAL</label>
      <input type="number" class="form-control" id="number" placeholder="Nominal" name="number">
    </div>
    
    
     
    <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT">
  </form>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>DON'T GIVE UP!</p>
</div>

</body>
</html>
<?php
error_reporting(0);
$db = pg_connect("host=localhost port=5432 dbname=db_simutu user=postgres password=bismillahUSA2022");
$query = "INSERT INTO tb_tabungan (id_target, tanggal, jumlah_tabungan) VALUES ('1','$_POST[date]','$_POST[number]')";
$result2 = pg_query($query); 
if ($result2==TRUE and $_POST['number'] != "")
{
  header("location: dashboard_coba.php");
} else
{
  echo "";
} 
?>