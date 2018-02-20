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
<form action="ind.php" method="POST">
<table class="table table-striped">
<tr>
<th>#serial no.</th><th>student name</th><th>roll no.</th><th>attendance  status</th>
</tr>


<?php
$queried_date = $_POST['date'];
$sql = "SELECT * FROM attendence_record WHERE date='$queried_date'";
$result=mysqli_query($con,$sql);
$serialnumber=0;
$counter=0;
while($row=mysqli_fetch_array($result))
{
$serialnumber++;

?>
<tr>
<td><?php echo $serialnumber;?></td>

<td><?php echo $row['student_name']?> </td>
<td><?php echo $row['roll_number']?></td>
<td><input type="radio" name="attendance_status[<?php echo $counter;?>]"
 <?php if($row['attendence_status']=="present")
echo"checked=checked";?>value="present">present
<input type="radio" name="attendence_status[<?php echo $counter;?>]" value="absent"
<?php if($row['attendence_status']=="absent")
echo"checked=checked";?>>absent
</td>
</tr>
<?php
$counter++;
}
?>
</table>