<?php
  include "includes/header.php";
  include "includes/footer.php";
  $username = "Ivy";
  $greeting = "Hello";

  $offer = array("Chocolate", 5, 20, 25);
  $usual_price = $offer[1] * $offer[3];
  $offer_price = $offer[1] * $offer[2];
  $saving = $offer_price - $usual_price;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>The Candy Store</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h2>MULTI-BUY OFFER</h2>
                
        <p><?= $greeting ?>, <?= $username ?></p>
        <p>Buy <?= $offer[1] ?> packs of <?= $offer[0] ?> for $<?= $offer[2] ?> <br>(usual price $<?= $offer[3] ?>)</p>
        <p>Save $<?= $offer[1]?></p>

        <footer>&copy; <?php echo date('Y')?></footer>
    </body>
</html>