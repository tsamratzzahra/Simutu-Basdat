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
<body>

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">

    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">HOME</a></li>
	  <li><a href="Register_simutu.php">REGISTRATION SIMUTU</a></li>
			<li><a href="Login_Simutu.php">LOGIN SIMUTU</a></li>
		</ul>
    </ul>
  </div>
</nav>
<div class="container">
  <h1>WELCOME TO OURS!</h1>
  <p>Realizing the convenience and consistency in saving, to be able to achieve the savings target.</p> 
  <p><mark>HOPE YOU REACH THE TARGET.</mark></p> 
  <p><mark>GOOD LUCK.</mark></p>          
</div>


<div class="jumbotron text-center" style="margin-bottom:0">
  <p>THANK YOU :)</p>
</div>

	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "SELAMAT ANDA SUDAH MENCAPAI TARGET!";
			} else {
				echo "Tetap semangat, dan coba lagi ";
			}
		?>
	</p>
	<?php endif; ?>

	</body>
</html>
