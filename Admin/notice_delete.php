<?php
include('connect.php');
if (isset($_GET['stud_id']))
{



 $delete = mysqli_query($connect,"delete from notice where
id='".$_GET['stud_id']."'");


if ($delete)
{
echo "<script>;";
echo "alert('Notice record delete....!');";
echo 'window.location.href = "notice_details.php";';
echo "</script>;";
}
else
{
echo "<script>;";
echo "alert('Notice data error....!');";
echo 'window.location.href = "notice_details.php";';
echo "</script>;";
}
}
?>