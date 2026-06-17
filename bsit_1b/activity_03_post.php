<html>
    <head><title>Activity 03</title></head>
    <style type="text/css">
    body{
        background-color: F4FFAB;
    }
    .form-control {
        font-family: verdana;
    }
    .btn {
        background-color: blue;
        color: white;
    }
    .btn:hover {
        background-color:white;
        color:blue;
    }
    label {
        font-weight: bold; 
        font-family: arial;   
    }


    </style>

    <body>
        <form method="post" action="activity_03_receiver.php">
            <label>First Name</label> <br>
            <input type="text" name="txtFirstName" placeholder="First name..."> <br>
            <label>Last Name</label> <br>
            <input type="text" name="txtLastName" placeholder="Last name..."> <br>
            <label>Status</label><br>
            <select name="status">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
            </select><br>
            <label>DOB</label> <br>
            <input type="date" class="form-control" name="txtDOB"> <br>
            <label>Address</label> <br>
            <textarea rows="15" cols="15" name="txtAreaAddress" placeholder= "Address../."></textarea><br>
            <input class="btn" type="submit" name="btnSubmit" value="Submit" />
            <input class="btn" type="reset" value="Clear" />
        </form>
    </body>
</html>