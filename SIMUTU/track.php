<?php 
	session_start();
	include 'config.php';
	?>
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
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Target</h2>  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Target</th>
        <th>ID Tabungan</th>
        <th>Nama Target</th>
        <th>Nominal Target</th>
      </tr> 
      </thead>  
      <tbody> 
      <?php
		$query = pg_query($db,"SELECT * FROM tb_target");
		// $query = mysqli_query($db, $sql);


		while($target = pg_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$target['id_target']."</td>";
			echo "<td>".$target['id_register']."</td>";
			echo "<td>".$target['nama_target']."</td>";
			echo "<td>".$target['nominal_target']."</td>";
			echo "</td>";
			echo "</tr>";}?>

	</tbody>
	</table>

	<p>Total: <?php echo pg_num_rows($query) ?></p>

	</body>
</html>

<div class="container">
  <h2>Tabungan</h2>  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Tabungan</th>
        <th>ID Target</th>
        <th>Tanggal</th>
        <th>Nominal Tabungan</th>
      </tr> 
      </thead>  
      <tbody> 
      <?php
		$query = pg_query($db,"SELECT * FROM tb_tabungan");
		// $query = mysqli_query($db, $sql);


		while($target = pg_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$target['id_tabungan']."</td>";
			echo "<td>".$target['id_target']."</td>";
			echo "<td>".$target['tanggal']."</td>";
			echo "<td>".$target['jumlah_tabungan']."</td>";
			echo "</td>";
			echo "</tr>";}?>

	</tbody>
	</table>

	<p>Total: <?php echo pg_num_rows($query) ?></p>

	</body>
</html>
<div class="container">
  <h2>Hutang</h2>  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Hutang</th>
        <th>ID Tabungan</th>
        <th>Tanggal</th>
        <th>Nominal Hutang</th>
      </tr> 
      </thead>  
      <tbody> 
      <?php
		$query = pg_query($db,"SELECT * FROM tb_hutang");
		// $query = mysqli_query($db, $sql);


		while($target = pg_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$target['id_hutang']."</td>";
			echo "<td>".$target['id_tabungan']."</td>";
			echo "<td>".$target['tanggal']."</td>";
			echo "<td>".$target['jumlah_hutang']."</td>";
			echo "</td>";
			echo "</tr>";}?>

	</tbody>
	</table>

	<p>Total: <?php echo pg_num_rows($query) ?></p>

	</body>
</html>