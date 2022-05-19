<!--SQL QUERY START HERE-->
<?php
 $sql ="SELECT *FROM messages
  ORDER BY id";
   $query =$con->query($sql);
   WHILE($row=$query->fetch_assoc())
   {
       ?>
<tr>
    <td><?php echo $row['fullname'];?></td>
    <td><?php echo $row['subject'];?></td>
    <td><?php echo $row['message'];?></td>
</tr>
<?php
                }
                ?>