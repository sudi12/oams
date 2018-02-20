<?php
include("head.php");
include("db.php");
include("server.php");
$flag=0;
$update=0;
if(isset($_POST['submit']))
{
    $date=date("y-m-d");
    $records=mysqli_query($con,"select * from attendence_record where date='$date'" );
    $num=mysqli_num_rows($records);

    if($num)
    {
        foreach($_POST['attendence_status'] as $id=>$attendence_status)
        {
            $student_name=$_POST['student_name'][$id];
            $roll_number=$_POST['roll_number'][$id];
                

            $result=mysqli_query($con,"update attendence_record set student_name='$student_name',roll_number='$roll_number',attendence_status='$attendence_status',date='$date'where date='$date'");
            if($result)
            {
                $update=1;
                
            }
        }
    }
    else
    {
        foreach($_POST['attendence_status'] as $id=>$attendence_status)
        {
            $student_name=$_POST['student_name'][$id];
            $roll_number=$_POST['roll_number'][$id];

            $result=mysqli_query($con,"insert into attendence_record(student_name,roll_number,attendence_status,date)values('$student_name','$roll_number','$attendence_status','$date')");
            if($result)
            {
                $flag=1;
               
            }
        }
    }
}
?>
<!DOCTYPE html>

<html>

<body>
<div  class="header">
</div>
  <div class="content">
    <?php if(isset($_SESSION['success'])){ ?>
    <h3>
        <?php echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?></h3>
              <?php }?>
    </div>
<?php if(isset($_SESSION['username'])){ ?>
       <p>welcome<?php echo $_SESSION['username']?></p>
       <p><a href="ind.php?logout='1' " style="color: red;">logout</a></p>
<?php }?>
</body>
</html>
<div class="panel panel-default">
    <div class"panel-heading">
        <h2>
            <a  class="btn btn-success" href="add.php"> add student</a>
            <a class="btn btn-info pull-right" href="view_all.php"> view all </a>
        </h2>
   </div>
</div>
 <?php if($flag) { ?>
     <div class="alert alert-success">
      attendence data insert successfully
        </div>
 <?php }?>
<?php if($update) { ?>
     <div class="alert alert-success">
              student attendence updated successfully
       </div>
<?php }?>
<h3><div class="well text-center">DATE:<?php echo date("y-m-d");?></div></h3>
<div class ="panel panel-body">
       <form action="ind.php" method="POST">
        <table class="table table-striped">
<tr>
<th>#serial no.</th><th>student name</th><th>roll no.</th><th>attendance  status</th>
</tr>


<?php
$result=mysqli_query($con,"select * FROM attendence");
$serialnumber=0;
$counter=0;
while($row=mysqli_fetch_array($result))
   {
      $serialnumber++;
      ?>
  <tr>
   <td><?php echo $serialnumber;?></td>
   <td><?php echo $row['student_name'];?>
       <input type="hidden" value="<?php echo $row['student_name'];?>" name="student_name[]"></td>
      <td><?php echo $row['roll_number'];?> 
       <input type="hidden" value="<?php echo $row['roll_number'];?>" name="roll_number[]"></td></td>
    <td>
  <?php if(isset($_POST['attendence_status'][$counter]) && $_POST['attendence_status'][$counter]=="present" )?>
   <input type="radio" name="attendence_status[<?php echo $counter;?>]" value="present"
     <?php if(isset($_POST['attendence_status'][$counter]) && $_POST['attendence_status'][$counter]=="present" )
              {echo"checked=checked";
                }?> >present
    <input type="radio" name="attendence_status[<?php echo $counter;?>]" value="absent"
   <?php if(isset($_POST['attendence_status'][$counter]) && $_POST['attendence_status'][$counter]=="absent" )
              {echo"checked=checked";
                }?> >absent
    </td>
    </tr>

    <?php
      $counter++;
      }
      ?>
</table>
    <input type="submit" name="submit" value="submit" class="btn btn-primary">
</form>