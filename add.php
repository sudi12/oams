<?php
include("head.php");
?>
<body>
<div class="container">
    <h2><b><div class="text-center"></div></b></h2>
    <?php
        if(isset($_GET['code']))
        {
            if($_GET['code']==1)
            {
                echo "<div class='alert alert-success'>Student Inserted Successfully</div>";
            }
            else if($_GET['code']==0)
            {
                echo "<div class='alert alert-danger'>Insertion not Successful</div>";
            }
            else if($_GET['code']==-1)
            {
                echo "<div class='alert alert-danger'>Incorrect Request</div>";
            }
        }
    ?>
    <div class="panel panel-default">
        <div class="panel panel-heading">
            <h2>
                <a class="btn btn-success" href="add.php"> add student</a>
                <a class="btn btn-info pull-right" href="ind.php"> back </a>
            </h2>
        </div>
    </div>
    <div class ="panel panel-body">
        <form action="insert_student.php" method="POST">
            <table>
                <tr style="margin-bottom: 10px">
                    <td><label for="name">Student Name</label></td>
                    <td><input type="text" name="name" id="name" class="form-control" required></td>
                </tr>
                <tr style="margin-bottom: 10px">
                    <td><label for="roll">roll number</label></td>
                    <td><input type="number" name="roll" id="roll" class="form-control" required></td>
                </tr>
                <tr>
                    <td><button type="submit" value="submit" class="btn btn-primary">Submit</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>



