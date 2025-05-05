<?php
    session_start();
    if(!isset( $_SESSION['user'])) {
        header("location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4" style="max-width: 800px">
        <h1 class="h3 mb-3">Profile</h1>
        <ul class="list-group mb-3">
            <li class="list-group-item">Name : Alice</li>
            <li class="list-group-item">Email: alice@gail.com</li>
            <li class="list-group-item">Phone: 238094212</li>
            <li class="list-group-item">Address: Alice's address</li>
        </ul>

        <a href="_actions/logout.php" class='text-danger'>Logout</a>


    </div>
</body>
</html>