<?php
require_once('SQLconnection.php');

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$sid = $_POST['sid'];
  $email = $_POST['email'];
	$slot = $_POST['slot'];
	$query = "INSERT INTO students(fname, lname,sid, email,slot) VALUES('$fname','$lname','$sid','$email', '$slot')";
	$result = mysqli_query($conn, $query) or die("Database can't save");
	if($result){ ?>
	<h2>Registration Sucessfull!</h2> 
  <?php
	}
	mysqli_close($conn);
?>
<table>
<tr>
      <th scope="row"><?php echo"Name: $fname " . " $lname"; ?></th> <br>
      <td><?php echo "Student Id : $sid"; ?></td>
      <td><?php echo " Email: $email"; ?></td>
      <td>
      	<?php
      		if($slot=='s1'){
      			echo "Slot is: Monday 15:00 - 17:00";
      		}
      		elseif($slot=='s2'){
      			echo "Slot is: Tuesday 14:00 - 16:00";
      		}
      		elseif($slot=='s3'){
      			echo "Slot is: Thursday 11:00 - 13:00";
      		}
      		elseif($slot=='s4'){
      			echo "Slot is: Friday 10:00 - 12:00";
      		}
      	?>
      </td>
    </tr>
    </table>

		<br>
		<br>
		<br>
		<br>
<a href="Home.php"><button type="button"> &lt;-Back to Registration Page</button></a>
