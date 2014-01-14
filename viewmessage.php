<link rel="stylesheet" href="assets/css/global.css" type="text/css">

<?php 
	include_once('config.php');
	include_once('messageDAO.php');

?>

	<table class='table table-striped table-bordered table-condensed'>
	  <tr>
	  	<td>id</td>
	  	<td>Sender</td>
	  	<td>Sender Email</td>
	  	<td>Message</td>
	  	<td>is_approved</td>
	  	<td>Date Posted</td>
	  	<td>Action</td>

	  	<?php echo $viewmessage = messageDAO::viewallmessage();?>

	  </tr>
	</table>
  <script src="assets/js/jquery-1.7.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/admin.min.js"></script>