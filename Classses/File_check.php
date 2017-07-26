<?php

class File_check {

	private static $extensions = ["rar", "zip", "jpg", "png", "mp3", "mp4", "avi", "msi"];

	public function check_size($file_size, $size) {	
		if ($file_size > $size) {
				
			echo "<br/>Sorry. You can not upload file that exceeds 10 mb size. <br/>Upload another file: <a class='btn btn-lg btn-secondary' href='index.php'>Link</a>";
			die();

		}
	}

	public function check_type($file_extension) {	

		if (array_search($file_extension, File_check::$extensions) == false) {
			
		echo "<br/>Sorry. You can not upload this type of file. <br/>Upload another file: <a class='btn btn-lg btn-secondary' href='index.php'>Link</a>";
		die();

		}
	}
}

