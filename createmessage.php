<?php
	include_once('script.php');
	
 ?>

<html>
<head>
	<title>Create Message</title>
	<link rel="stylesheet" href="assets/css/global.css" type="text/css">
</head>
<body>
	<div class='container'>
	  <div class='row'>
	  	<b>Create Message</b>
	  	<hr/>
<!--form-->
	  <form action = "validateMessage.php" method = 'POST'>
	  	<div class='well' style='width:350px'>
	  	  <div class='row'>
	  	    <b class='span2 columns'>To: </b>
	  	    <input type='text' id='receiver' onblur='c_receiver();' name='fname'>
	  	    <span id='h_receiver' class='pull-right' style='font-color:red'></span>
	  	  </div>

	  	  <div class='row'>
	  	    <b class='span2 columns'>Email Address: </b>
	  	    <input type='text' onblur='c_email();' name='email' id='email'>
	  	    <span id='h_email' class='pull-right' style='font-color:red'></span>
	  	  </div>

	  	  <div class='row'>
	  	    <b class='span2 columns'>Messages</b>
	  	    <textarea style='height:119px' onblur='c_message();' name='message' id='message'></textarea>
	  	  	<span id='h_message' class='pull-right' style='font-color:red'></span>
	  	  </div>

	  	  <div>
	  	  	<button class='btn btn-primary pull-right' type='submit' name='send' onclick='authenticator();'>Send Message</button>
	  	  </div>
	  	</div>
	  </form>
<!--end form-->
	  </div>
	</div>


  <script src="assets/js/jquery-1.7.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/admin.min.js"></script>

</script>
</body>
</html>