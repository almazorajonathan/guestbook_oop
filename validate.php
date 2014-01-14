<?php 
	include_once('config.php');
	include_once('messageDAO.php');

	$receiver = $_POST['receiver'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$is_approved = 'n';
	$sendmessage = messageDAO::sendmessage($receiver,$email,$message,$is_approved);


	header('location:createmessage.php');
?>