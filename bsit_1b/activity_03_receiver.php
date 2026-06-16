<html>
    <head><title>Activity 03 Receiver</title></head>
    <style type="text/css">
    body{
        background-color: F4FFAB;
    }
    </style>
    <body>
        <form method="post" action="activity_03_receiver.php">
            <label>First Name</label> <br>
            <strong><?php echo $_POST["txtFirstName"] ?></strong> <br> <br>
            <label>Last Name</label> <br>
            <strong><?php echo $_POST["txtLastName"] ?></strong> <br> <br>
            <label>Status</label><br>
            <strong><?php echo $_POST["status"] ?></strong> <br> <br>
            <label>DOB</label> <br>
            <strong><?php echo $_POST["txtDOB"] ?></strong> <br> <br>
            <label>Address</label> <br>
            <strong><?php echo $_POST["txtAreaAddress"] ?></strong> <br> <br>
            <a href="activity_03_post.php">Back</a>
        </form>


    </body>
</html>