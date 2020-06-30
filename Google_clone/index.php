<?php

?>

<!doctype html>
<html>
<head>
    <title>Welcome to Doodle!</title>
    <link rel="icon" href="assets/images/logo.png">
    <link rel = "stylesheet" type = "text/css" href = "assets/css/style.css">
    
</head>
<body>
    <div class = "wrapper indexPage">
        <div class = "mainSection">
            <div class = "logoContainer">
                <img src="assets/images/logo.png" alt="Logo">
            </div>
            <div class = "searchContainer">
                <form action="search.php" method = "GET">
                    <input type="text" class = "searchBox" name = "term" placeholder = "Search...">
                    <input type="submit" class = "searchButton" value = "search">
                </form>
            </div>
        </div>
    </div>
</body>
</html>