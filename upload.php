
<?php 
	ini_set('memory_limit', '48M');
	ini_set('post_max_size', '48M');
	ini_set('upload_max_filesize', '48M');
	include 'Classses\DB.php';
	include 'Classses\File_check.php';
	define("SITEURL", "//localhost/mindaugassimkus/exchange/");
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
			<?php 
				$check = new File_check();
				$check->check_size($_FILES['file']['size'], 10000000);
				

				$file_name = explode(".", $_FILES['file']['name']);

				$check->check_type($file_name[count($file_name)-1]);

				$encoded_file_name = md5($file_name[0]);
				$target_file = "files/" . $encoded_file_name . "." . $file_name[1];

				move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

				$crypt = md5($file_name[0] . rand(1, 100000));

				$query = "INSERT into files 
				(original_file_name, encoded_file_name, file_size, crypt) 
				VALUES ('" . $_FILES["file"]["name"] ."' ,'" . $encoded_file_name . "." . $file_name[count($file_name)-1] . "','" . $_FILES["file"]["size"] . "', '". $crypt . "')";


				DB::store($query);

			?>
			<h2> Your file has been uploaded</h2>
			<p>File name: <?=  $_FILES["file"]["name"]?></p>
			<p>File size: <?=  $_FILES["file"]["size"]?> bytes.</p>
			<p>File link: <a class="btn btn-lg btn-secondary" href="<?=SITEURL;?>download.php?crypt=<?= $crypt; ?>">Link</a></p>
		</div>
	</div>
</div>
</body>
</html>