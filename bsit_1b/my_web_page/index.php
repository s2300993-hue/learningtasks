<html>
    <head><title>My webpage</title></head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
<body>
    <div id="wrapper">
        <div class="header">
            <br>
            <div class="title">
                <h1> My PHP Webpage </h1>
            </div>
            <div class="navbar">
                <button><a href="index.php">Home</a></button> 
                <button><a href="index.php?page=about-us">About us</a></button>  
                <button><a href="index.php?page=gallery">Gallery</a></button>  
            </div>
            <br>
        </div>  
        
        <div class="content">
        <?php
            switch(@$_GET["page"])
            {
                case "about-us":
                    include("about-us.php");
                    break;
                case "gallery":
                    include("gallery.php");
                    break;
                case "Home":
                    include("home.php");
                    break;
                
                default:
                    include("home.php");
                    break;
            }
            ?>
        </div>
</div>
</body>
</html>