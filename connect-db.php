<?php
date_default_timezone_set("Africa/Nairobi");
// server info
// $server = 'localhost';
// $user ='mintarik_kenya';
// $pass ='MintariK254';
// $db = 'mintarik_mintari';

// server info
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'mintarik_mintari';

// connect to the database
$con = new mysqli($server, $user, $pass, $db);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);
