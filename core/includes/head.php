<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="Support Ticket System.">
  <meta name="author" content="Debjyoti Guha">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='//fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
  <link href='//weloveiconfonts.com/api/?family=entypo' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo $website_url; ?>css/normalize.css">
  <link rel="stylesheet" href="<?php echo $website_url; ?>css/skeleton.css">
  <link rel="icon" type="image/png" href="">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="<?php echo $website_url; ?>js/ajax.js"></script>
  
  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#log").load(location.href + " #log");
$("#update").load(location.href + " #update");
$("#update1").load(location.href + " #update1");
}, 1000);
});

</script>
</head>
<body>
	
<div style="margin-top:5%;display: block;"><!-- space acting nav --></div>
