<!--SQL QUERY START HERE-->
<?php
 $sql ="SELECT *FROM bookings
  ORDER BY id";
   $query =$con->query($sql);
   WHILE($row=$query->fetch_assoc())
   {
       ?>
<tr>
    <td><?php echo $row['fullname'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['phone'];?></td>
    <td><?php echo $row['roomtype'];?></td>
    <td><?php echo $row['checkin'];?></td>
    <td><?php echo $row['checkout'];?></td>
    <td><?php echo $row['card_number'];?></td>
    <td><?php echo $row['security_code'];?></td>
    <td><?php echo $row['exp_month'];?></td>
    <td><?php echo $row['exp_year'];?></td>
    <td><?php echo $row['name_on_card'];?></td>
    

</tr>
<?php
                }
                ?>