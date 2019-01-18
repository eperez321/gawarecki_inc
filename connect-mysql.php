<?php

DEFINE ('DB_HOST', 'localhost\gawarecki');
DEFINE ('DB_NAME', 'gawarecki_inc');

$dbcon = mysqli_connect(DB_HOST, DB_NAME);

if (!$dbcon) {
	die('error connecting to database');
	}

	echo 'you have connected successfully';

?>