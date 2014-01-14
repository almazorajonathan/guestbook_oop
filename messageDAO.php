<link rel="stylesheet" href="assets/css/global.css" type="text/css">

<?php 
	class messageDAO {
		public static function sendmessage($receiver,$email,$message,$is_approved){
			global $db;
			$sql = "INSERT INTO
					message(receiver,sender_email,message,is_approved,date_posted)
					VALUES('$receiver','$email','$message','$is_approved',(CURRENT_DATE()))";
			$result = $db->query($sql);
		}

		public static function viewallmessage(){
			global $db;
			$sql = "SELECT * FROM message";
			$result = $db->query($sql);
			if ($result) {
				$fetch = $result->fetch_assoc();
				echo "<tr>";
				echo "<td>".$fetch['id']."</td>";
				echo "<td>".$fetch['receiver']."</td>";
				echo "<td>".$fetch['sender_email']."</td>";
				echo "<td>".$fetch['message']."</td>";
				echo "<td>".$fetch['is_approved']."</td>";
				echo "<td>".$fetch['date_posted']."</td>";
				if ($fetch['is_approved'] == 'n') {
					echo "<td><button class='btn btn-success' href='approved.php?id='".$fetch['id']."'>Approved</button></td>";
				} else {
					echo "<td><button class='btn btn-primary' href='#'>Reject</button></td>";
				}

				echo "<td><button class='btn btn-danger' href='#'>Delete</button></td>";
				echo "</tr>";

			} else {
				return false;
			}
		}
	}
?>

  <script src="assets/js/jquery-1.7.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/admin.min.js"></script>

