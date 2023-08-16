<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">Welcome to Dashboard</h1>
        <div class="home-img" style="text-align: center;">
            <img width="50%" src="https://static.vecteezy.com/system/resources/thumbnails/009/554/509/original/aerial-view-of-sea-and-sand-beach-beautiful-top-view-of-sand-beach-perfect-for-holiday-summer-background-tropical-destination-phuket-beach-sea-sand-free-video.jpg" alt="">
        </div>
        
        <div style="text-align: center; padding-top:10px">
            <a href="logout.php" class="btn btn-warning" style="width: 90%;">Logout</a>

        </div>
    </div>
</body>
</html>