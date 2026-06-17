<html>
    <head><title>My webpage</title></head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
<body>
    <div id="wrapper">
        <div class="header">
            <br>
            <div class="title">
                <h1> CASE 6 </h1>
            </div>
            <div class="navbar">
            
                <button><a href="index.php">Home</a></button> 
                <button><a href="index.php?page=project">Project</a></button>  
                <button><a href="index.php?page=job-posting">Job Posting</a></button>  
                <button><a href="index.php?page=testimonies">Testimonies</a></button>  
                <button><a href="index.php?page=contact-us">Contact Us</a></button>  

            </div>
            <br>
        </div>  
        
        <div class="content">
        <?php
            switch(@$_GET["page"])
            {
                case "project":
                    include("project.php");
                    break;
                case "job-posting":
                    include("job-posting.php");
                    break;
                case "testimonies":
                    include("testimonies.php");
                    break;
                case "contact-us":
                    include("contact-us.php");
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