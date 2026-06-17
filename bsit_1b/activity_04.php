<html>
    <head><title>Activity 04</title></head>

    <style type="text/css">
        body{
            background-color: F4FFAB;
        }
        label{
            font-weight: bold;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>

<body>
<h1>SOLVER</h1>

    <?php
        if (isset($_POST["btnSubmit"])){

            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            $addition = $num1 + $num2;
            $subtraction = $num1 - $num2;
            $multiplication = $num1 * $num2;
            $division = $num1 / $num2;

            echo "The addition is ".$addition."</strong><br>";
            echo "The subtraction is ".$subtraction."</strong><br>";
            echo "The multiplication is ".$multiplication."</strong><br>";
            echo "The division is ".$division."</strong><br><br>";
           
            echo "<a href='activity_04.php'>Back</a>";

            
        } else {
        ?>

    <form method="post" action="activity_04.php">
        <label>Enter first Number:</label> <br>
            <input type="number" name="num1" placeholder="1st number..."> <br>
        <label>Enter second Number:</label> <br>
            <input type="number" name="num2" placeholder="2nd number..."> <br><br>
            <input type="submit" name="btnSubmit" value="Solve" />
    </form>


        <?php 
        } 
        ?>
</body>
</html>