<div class="login-form">

        <?php
        $message = "";

        if (isset($_POST['submit'])) {
            if ($_POST['userName'] == "admin" && 
                $_POST['userPassword'] == "123") {

                header("location: index.php?page=success");
                exit();
            } else {
                $message = "Login Fail";
            }
        }
        ?>

        <form method="post" action="index.php?page=access.php">
            <label>Username</label><br>
            <input type="text" name="userName" required><br>
        
            <label>Password</label><br>
            <input type="password" name="userPassword" required><br><br>
        
            <input type="submit" name="submit" value="Submit">
        </form>

       

        <?php if ($message != "") { echo "<p>$message</p>"; } ?>
    </div>