<?php
include('connect.php');
if (isset($_GET['stud_id']))
{


 $delete = mysqli_query($connect,"delete from contact where
id='".$_GET['stud_id']."'");


if ($delete)
{
echo "<script>;";
echo "alert(' contact Record delete....!');";
echo 'window.location.href = "contact_details.php";';
echo "</script>;";
}
else
{
echo "<script>;";
echo "alert('error....!');";
echo 'window.location.href = "contact_details.php";';
echo "</script>;";
}
}
?>