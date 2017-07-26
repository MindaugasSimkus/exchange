<?php

class Download_link_type {
	public function check_extension($db_record) {

		$file_name_exploaded = explode(".", $db_record->encoded_file_name);
		if ($file_name_exploaded[count($file_name_exploaded)-1] == 'jpg' || $file_name_exploaded[count($file_name_exploaded)-1] == 'png' ) {
			echo '<a download href="files/' . $db_record->encoded_file_name . '"><img src="files/' . $db_record->encoded_file_name . '" alt="thumbnail" class="img-thumbnail"></a><br/> Upload another file: <a class="btn btn-lg btn-secondary" href="index.php">Link</a> ';
		} else if($file_name_exploaded[count($file_name_exploaded)-1] == 'mp3') {
			echo '<audio controls><source src="files/' . $db_record->encoded_file_name . '" type="audio/mpeg"></audio> <br/>Upload another file: <a class="btn btn-lg btn-secondary" href="index.php">Link</a> ';

		} else if($file_name_exploaded[count($file_name_exploaded)-1] == 'mp4' || $file_name_exploaded[count($file_name_exploaded)-1] == 'avi') {
			echo '<video width="320" height="240" controls><source src="files/' . $db_record->encoded_file_name . '" type="video/mp4"><source src="files/' . $db_record->encoded_file_name . '" type="video/avi"></video>  <br/>Upload another file: <a class="btn btn-lg btn-secondary" href="index.php">Link</a> ';

		} else {
			echo '<a class="btn btn-lg btn-secondary" download href="files/' . $db_record->encoded_file_name . '">Download</a>
				Upload another file: <a class="btn btn-lg btn-secondary" href="index.php">Link</a>';
		}

	}	


}

