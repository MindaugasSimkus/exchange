<?php 
	include 'Classses\DB.php';
	define("SITEURL", "//localhost/mindaugassimkus/exchange");
	$result = DB::query("SELECT * FROM files WHERE crypt = " . $_GET['crypt']. "'")[0];

	print_r($result);




?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
 		<a class="navbar-brand" href="#"> <h1>File exchange</h1></a>
	</nav>
</div>
<div class ="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="jumbotron jumbotron-fluid">
			 <div class="container">
			    <h1 class="display-3">File exchange services</h1>
			    <p class="lead">here you can upload</p>
			  </div>
			</div>
			<h2> Your file <?= $result->original_file_name ?> is ready for download</h2>
			<p>File size: <?=  $result->file_size?></p>
			<p>File link: <a downlaod href="<?=SITEURL;?>download.php?files/<?= $result->$encoded_file_name; ?>">Download</a></p>
		</div>
	</div>
</div>
</body>
</html>