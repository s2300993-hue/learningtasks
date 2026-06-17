<html>
<head>
    <title>Login</title>
</head>
<body>

<link rel="stylesheet" href="style.css"/>


<div id="wrapper">
    <div class="header">
        <h1>Welcome to Site</h1> 
    </div> <br>

    <div class="content">
        <?php
            switch(@$_GET["page"])
            {
                case "success":
                    include("access.php");
                    break;
                
                default:
                    include("login.php");
                    break;
            }
            ?>
    </div>

</div>
</body>
</html>