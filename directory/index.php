<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

//Fetch an array of directories in the parent directory
$Directories = glob('../*', GLOB_ONLYDIR);

//Trim leading '../'
foreach($Directories as $Index=>$Directory) {
	$Directories[$Index] = substr($Directory, 3);
}

//Strip out ignored directories
$Ignore = array('cgi-bin');
$Directories = array_diff($Directories, $Ignore);

//Sort alphabetically just incase they don't come in that way
sort($Directories);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vidya.Space Directory</title>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<style>
	
	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Vidya.Space Directory</h1>
		<table class="table table-striped">
			<tr>
				<th>#</th>
				<th>Link</th>
			</tr>
			<?php
			foreach($Directories as $Index=>$Directory) {
				echo '<tr>' . "\n";
					echo '<td><strong>' . ($Index + 1) . '</strong></td>' . "\n";
					echo '<td><a href="http://' . $Directory . '.vidya.space">' . $Directory . '</a></td>' . "\n";
				echo '</tr>' . "\n";
			}
			?>
		</table>
	</div>
</body>
</html>