<?php
include "connection.php";
$coursename=$_REQUEST["coursename"];
$s="SELECT * FROM `course` WHERE `course_name` ='$coursename'";
$res=mysqli_query($con,$s);
$row=mysqli_fetch_array($res);
?>
<select name="sem" id="sem" class="form-control" required>
    <option value="">Select Semester</option>
    <?php
    $count=$row[3]*2;
    for ($i=1;$i<=$count;$i++)

    {
        echo "<option>$i</option>";

    }    ?>
</select>
