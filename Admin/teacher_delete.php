<?php
include('connect.php');
if (isset($_GET['stud_id']))
{
$sel=mysqli_query($connect,"select * from teacher_details where
id='".$_GET['stud_id']."' ");
while ($fetch=mysqli_fetch_array($sel))
 {
 $img=$fetch["Photo"];
 }
 $isrc="../Admin/teacher_image/".$img;
 unlink($isrc);

 $delete = mysqli_query($connect,"delete from teacher_details where
id='".$_GET['stud_id']."'");


if ($delete)
{
echo "<script>;";
echo "alert(' Teacher Record delete....!');";
echo 'window.location.href = "teacher_details.php";';
echo "</script>;";
}
else
{
echo "<script>;";
echo "alert('error....!');";
echo 'window.location.href = "teacher_details.php";';
echo "</script>;";
}
}
?>