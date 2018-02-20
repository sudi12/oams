<?php
include("head.php");
include("db.php");


?>
<div class="panel panel-default">

   <div class=" panel panel-heading">

<h2>
    <a  class="btn btn-success" href="add.php"> add student</a>
    <a class="btn btn-info pull-right" href="ind.php"> back </a></h2>
   </div>

</div>
<div class ="panel panel-body">
<table class="table table-striped">
<tr>
<th>serial no.</th><th>#dates</th><th>show_attendance</th>
</tr>


<?php
$result=mysqli_query($con,"select distinct date FROM attendence_record");
$serialnumber=0;
while($row=mysqli_fetch_array($result))
{
$serialnumber++;

?>
<tr>
<td><?php echo $serialnumber;?></td>
<td><?php echo $row['date']?> </td>
<td>
 <form action="show_attendence.php" method="POST">
<input type="hidden" value="<?php echo $row['date']?>" name="date">
<input type="submit" name="show attendence"value="show attendence" class="btn btn-primary">
</form>
</td>
</tr>
<?php

}
?>
</table>