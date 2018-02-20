<?php
/**
 * Created by PhpStorm.
 * User: abhisek_ch
 * Date: 2/2/18
 * Time: 12:53 AM
 */
include 'db.php';
if(isset($_POST['name']))
{
    $name=$_POST['name'];
    $roll=$_POST['roll'];
    $sql = "INSERT INTO attendence(student_name, roll_number) VALUES('$name','$roll')";
    if(mysqli_query($con, $sql)==true)
    {
        header('location: add.php?code=1');
    }
    else
    {
        header('location: add.php?code=0');
    }
}
else
{
    header('location: add.php?code=-1');
}