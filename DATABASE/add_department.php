<!doctype html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">


</head>
<body>
<?php
include "admin_header.php";
?>
<div class="container">
    <form method="post" action="insert_dept.php">
        <div class="form-group">
            Enter name of department:
            <input type="text" data-rule-required="true" data-msg-require="please enter department name"
                   class="form-control" name="dept_name">
        </div>

        <div class="form-group">
            Enter Email address:
            <input type="text" data-rule-required="true" data-msg-required="Please please provide Email"
                   data-rule-email="true" data-msg-email="Please Enter a Valid Email" class="form-control"
                   name="email_address">
        </div>

        <div class="form-group">
            Enter Mobile Number:
            <input type="text" data-rule-required="true" data-msg-required=" provide ur number" data-rule-number="true"
                   class="form-control" name="contact_no">
        </div>

        <div class="form-group">
            Enter Contact Person Name:
            <input type="text" class="form-control" data-rule-required="true"
                   data-msg-required="please enter contact person name" name="contact_person_name">
        </div>

        <div class="form-group">
            <input type="submit" value="submit" class="btn btn-success">
        </div>
    </form>
    <?php
    if (isset($_GET["msg"])) {
        echo $_GET["msg"];
    }
    ?>
</div>
</body>
</html>