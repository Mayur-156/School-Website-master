<?php
include('connect.php');
if (isset($_GET['stud_id']))
{
$sel=mysqli_query($connect,"select * from admission_form where
id='".$_GET['stud_id']."' ");
while ($fetch=mysqli_fetch_array($sel))
 {
 $img=$fetch["Photo"];
 }
 $isrc="../image/".$img;
 unlink($isrc);

 $delete = mysqli_query($connect,"delete from admission_form where
id='".$_GET['stud_id']."'");


if ($delete)
{
echo "<script>;";
echo "alert(' Student Record delete....!');";
echo 'window.location.href = "class4.php";';
echo "</script>;";
}
else
{
echo "<script>;";
echo "alert('error....!');";
echo 'window.location.href = "class4.php";';
echo "</script>;";
}
}
?>