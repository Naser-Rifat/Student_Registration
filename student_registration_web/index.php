<?php
require_once('SQLconnection.php');
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" herf="style.css" >
  </head>
  <body>
    
    <div id="container">
           <div>
          <h1 style="color:red;">COMP207-Register Here For a pactical Sloat.</h1>
             <h3><b>Register only if you know what you doing:</b></h3>  
            <ul> 
           <li>Please <b>enter all information</b> and select your  desired with valid SID.</li>
         <li>Before register please check available seat.</li>
         <li>Register only one slot.</li>
  
        </ul>
      </div> 

            
      <form action="Reg.php" method="POST">
          <div class="form-group">
              <label for="firstname">Firstname:&nbsp;&nbsp;&nbsp;</label>
              <input type="text" class="form-control" placeholder="Enter Firstname" name="fname"required>
          </div>
                 <br>
          <div class="form-group">
            <label for="Lastname">LastName:&nbsp;&nbsp;&nbsp;</label>
            <input type="text" class="form-control" placeholder="Enter Lastname" name="lname"required>
          </div>
                  <br>
           <div class="form-group">
            <label for="SID">SID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" class="form-control" placeholder="Enter Student id" name="sid"required>
          </div>
                   <br>
           <div class="form-group">
            <label for="Email">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" class="form-control" placeholder="Email" name="email"required>
          </div>

        </form>
          </br>
          <div class="form-group">
            <label for="Slot"><span class="text-success" style="color:blue"><b>Select the practical slot: </b></span></label>
            <?php
            	$sql = "SELECT slot From students";
            	$result = mysqli_query($conn, $sql) or die("Database can't save");
            	$s1seat = 0;
            	$s2seat = 0;
            	$s3seat = 0;
            	$s4seat = 0;
            	while ($row = mysqli_fetch_array($result)) {

            		if ($row['slot'] == 's1') {
            			$s1seat = $s1seat + 1;
            		}
            		elseif ($row['slot'] == 's2') {
            			$s2seat = $s2seat + 1;
            		}
            		elseif ($row['slot'] == 's3') {
            			$s3seat = $s3seat + 1;
            		}
            		elseif ($row['slot'] == 's4') {
            			$s4seat = $s4seat + 1;
            		}
            	}
            ?>
            <br>
          <select class="custom-select" name="slot" required>
            <option value="s1">Monday 15:00 - 17:00 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Available Seats <?php echo 8-$s1seat;?></option>
            <option value="s2">Tuesday 14:00 - 16:00 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Available Seats <?php echo 8-$s2seat; ?></option>
            <option value="s3">Thursday 11:00 - 13:00 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Available Seats <?php echo 8-$s3seat; ?></option>
            <option value="s4">Friday 10:00 - 12:00   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Available Seats <?php echo 8-$s4seat; ?></option>
          </select>

        <br>
        <br>
        <br>
        <br>

        <?php
          mysqli_close($conn);
        ?>
		   </div>

        <input type="submit" name="" value="Register">
        <input type="reset" name="" value="Clear">

        <br>
        <br>
      </form>
    </div>
  </table>
</body>
</html>
