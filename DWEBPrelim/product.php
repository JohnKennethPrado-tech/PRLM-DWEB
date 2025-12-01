<?php
    include "includes/header.php";
    include "includes/footer.php";

    $name = "Ivy";
    if($name == $name){
        $greeting = "Welcome Back, $name";
    }

    elseif(!empty($name)){
        $greeting = "Hello!";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>The Candy Store</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <p><?= $greeting ?></p>
        <h2>Lollipop Discounts</h2>
                
        <footer>&copy; <?php echo date('Y')?></footer>
    </body>
</html>