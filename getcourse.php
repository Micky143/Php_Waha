
<select id="course" name="course" class="form-control" required onchange="showsemester(this.value)">
    <option value="">Choose One</option>
    <?php
    include "connection.php";
    $dept=$_REQUEST["deptname"];
    $s="SELECT * FROM `course` WHERE `dept_name` ='$dept'";
    $res=mysqli_query($con,$s);
    while ($row=mysqli_fetch_array($res)){

        echo "<option value='$row[0]'>$row[0]</option>";
    }
    ?>

</select>!


