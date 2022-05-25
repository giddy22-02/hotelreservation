<?php
include ('../admin/actions/connect.php');
session_start();
    $search = $_POST['search'];
     //Check if the data Already Exist
     $check_data = mysqli_num_rows(mysqli_query($con, "SELECT * FROM bookings WHERE  checkin='$search'"));
     if ($check_data > 0) {
 $sql ="SELECT *FROM bookings Where checkin='$search'
  ORDER BY id";
   $query =$con->query($sql);
   WHILE($row=$query->fetch_assoc())
   {
       ?>
<table class="table">
    <thead>
        <tr cellpadding="5px">
            <th scope="col">Full Name</th>
            <th scope="col">Email Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Room Type</th>
            <th scope="col">Check In</th>
            <th scope="col">Check Out</th>
            <th scope="col">Card_Number</th>
            <th scope="col">Security Code</th>
            <th scope="col">Exp Month</th>
            <th scope="col">Exp Year</th>
            <th scope="col">Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php echo $row['fullname'];?>
            </td> 
            <td>
                <?php echo $row['email'];?>
            </td>
            <td>
                <?php echo $row['phone'];?>
            </td>
            <td>
                <?php echo $row['roomtype'];?>
            </td>
            <td>
                <?php echo $row['checkin'];?>
            </td>
            <td>
                <?php echo $row['checkout'];?>
            </td>
            <td>
                <?php echo $row['card_number'];?>
            </td>
            <td>
                <?php echo $row['security_code'];?>
            </td>
            <td>
                <?php echo $row['exp_month'];?>
            </td>
            <td>
                <?php echo $row['exp_year'];?>
            </td>
            <td>
                <?php echo $row['name_on_card'];?>
            </td>


        </tr>
    </tbody>
</table>

<?php
                }
    }else{ 
            $_SESSION['status'] = "Data Does not exist";
    }

?>