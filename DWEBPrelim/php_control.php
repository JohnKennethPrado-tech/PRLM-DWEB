<?php
if (isset($_POST["buy"])) {

    $candy1 = "Chocolate";
    $price1 = 25;

    $candy2 = "Gummy Bears";
    $price2 = 20;

    $candy3 = "Lollipop";
    $price3 = 10;

    $c1 = isset($_POST["candy1"]);
    $c2 = isset($_POST["candy2"]);
    $c3 = isset($_POST["candy3"]);

    $qty1 = isset($_POST["qty1"]) ? intval($_POST["qty1"]) : 0;
    $qty2 = isset($_POST["qty2"]) ? intval($_POST["qty2"]) : 0;
    $qty3 = isset($_POST["qty3"]) ? intval($_POST["qty3"]) : 0;

    $grandTotal = 0;

    echo "<h2>Your Order:</h2>";

    $orderedSomething = false;

    if ($c1 && $qty1 > 0) {
        $total1 = $price1 * $qty1;
        $grandTotal += $total1;
        echo "<p>$candy1 × $qty1 = ₱$total1</p>";
        $orderedSomething = true;
    }

    if ($c2 && $qty2 > 0) {
        $total2 = $price2 * $qty2;
        $grandTotal += $total2;
        echo "<p>$candy2 × $qty2 = ₱$total2</p>";
        $orderedSomething = true;
    }

    if ($c3 && $qty3 > 0) {
        $total3 = $price3 * $qty3;
        $grandTotal += $total3;
        echo "<p>$candy3 × $qty3 = ₱$total3</p>";
        $orderedSomething = true;
    }

    if (!$orderedSomething) {
        echo "<p>No valid items ordered.</p>";
    } else {
        echo "<h3>Total Amount: ₱$grandTotal</h3>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>The Candy Shop</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <h1>The Candy Shop</h1>
        <form method="POST">
            <p>
                <input type="checkbox" name="candy1">
                Chocolate - ₱25  
                <input type="number" name="qty1" min="0" value="0">
            </p>
            <p>
                <input type="checkbox" name="candy2">
                Gummy Bears - ₱20  
                <input type="number" name="qty2" min="0" value="0">
            </p>
            <p>
                <input type="checkbox" name="candy3">
                Lollipop - ₱10  
                <input type="number" name="qty3" min="0" value="0">
            </p>
            <button type="submit" name="buy">Buy</button>
        </form>
    </body>
</html>
