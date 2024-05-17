<?php include "_data.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP With the Beatles</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include "header.php" ?>

    <main>
        <?php 
            include "about.php";
        
            foreach ($members as $member){
                include "member-profile.php";
            }
        ?>
    </main>
</body>

</html>

