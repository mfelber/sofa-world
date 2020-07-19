<?php

    if (isset($_GET['product'])) {
        $product = $_GET['product'];
    }

    if ($product == 'sofa-1') {
        echo '<h2 class="intro" style="color:black; text-align: center;">sofa 1</h2>';

        echo '<p class="intro">FRIHETEN - Rohová rozkladacia poh s úl.priest, Skiftebo tmavosivá <br>';
        echo 'Cena 329€';
        echo '</p>';

        echo '<img src="https://www.ikea.com/sk/sk/images/products/friheten-corner-sofa-bed-with-storage__0175610_PE328883_S5.JPG?f=g" alt="Italian Trulli blablala">';

    } elseif ($product == 'sofa-2') {
        echo '<h2 class="intro" style="color:black; text-align: center;">sofa 2</h2>';


    } else {
        echo "nic<br>";
        echo "TODO dopln udaje pre product=$product";
    }

?>