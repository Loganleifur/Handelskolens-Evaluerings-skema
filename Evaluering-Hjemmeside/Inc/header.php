<?php 
session_start();
require 'DB.php';
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
    <head> 
	
                <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
                <meta name="description" content="<?php echo $pdescription; ?>">
		        <meta name="keyword" content="<?php echo $pkeyword; ?> ">
                <meta name="author" content="<?php echo $admin; ?> ">
                <title><?php print $ptitle ?> </title>
                <!-- links and scrips is her --->
                <link rel="stylesheet" type="text/css" href="Inc/style.css" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	</head>
	<body>