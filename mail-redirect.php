<?php
/*
 * mail-redirect.php
 * 
 * Copyright 2017 Esat Tunahan TUNA <etuna@Tunas-MacBook-Pro.local>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>handling</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.30.1" />
</head>

<body>
	
	<?php
	$To = "etuna@ku.edu.tr";	
	$From = $_POST["name_surname"];
	$mailOf_From = $_POST["email"];
	$teamOf_From = $_POST["team"];
	$gsmOf_From = $_POST["gsm"];
	$sportOf_From = $_POST["sport"];
	$commentFrom_From = $_POST["comment"];
	$message =   "Subject : Message From Your Website\nDate :".date("Y/m/d")."  " . date("h:i:sa") . "\nFrom : " . $From . "\nTo :" .$To
								."\n\nThis mail is sent from your website. It is submitted by ".$From."(".$mailOf_From.").\n--------------------------------------------------------\n\n"
								."Favourite Team :".$teamOf_From. "\nGSM Operator :" . $gsmOf_From . "\nSport Activities :" .$sportOf_From ."\nComments :". $commentFrom_From ."\n-----------------------------------------------------------\n\n";
	
	
	mail($To,"New Message From Website!", $message);
	header('Location: thankyou.html');
	die();
	?>
	
	
	
	
	
</body>

</html>
