<?php
include('connect.php');
if (isset($_GET['stud_id']))
{

 $delete = mysqli_query($connect,"delete from result where
id='".$_GET['stud_id']."'");


if ($delete)
{
echo "<script>;";
echo "alert(' Student Result deleted....!');";
echo 'window.location.href = "Result_details.php";';
echo "</script>;";
}
else
{
echo "<script>;";
echo "alert('error....!');";
echo 'window.location.href = "Result_details.php";';
echo "</script>;";
}
}
?>