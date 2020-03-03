<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="shortcut icon" type="image/png" href = "image/favicon.png">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="academicspage.php">Academics</a></li>
                    <li><a href="projectspage.php">Projects</a></li>
                    <li><a href="contactpage.php">Contact</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
                <h3>Quick Links:</h3>
                <ul id="nav">
                    <li><a href="https://www.linkedin.com/in/abhishek2910/"><h5>Linkedin Profile</h5></a></li>
                    <li><a href="https://github.com/Abhishek2202"><h5>GitHub Profile</h5></a></li>
                    <li><a href="https://www.facebook.com/profile.php?id=100003181280195"><h5>Facebook Profile</h5></a></li>
                </ul>
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>
