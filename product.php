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

        echo '<p class="intro">NORSBORG - 3-pohovka, Edum jasná zelená svetlozelená/kov <br>';
        echo 'Cena 429€';
        echo '</p>';

        echo '<img src="https://www.ikea.com/sk/sk/images/products/norsborg-3-seat-sofa-edum-bright-green-metal__0537799_PE651332_S5.JPG?fg" alt="Italian Trulli blablala">';

    } elseif ($product == 'sofa-3') {      
        echo '<h2 class="intro" style="color:black; text-align: center;">sofa 3</h2>';
        
        echo '<p class="intro">SÖDERHAMN - 4-miestna rohová pohovka, s jednou voľnou stranou, Samsta oranžová <br>';
        echo 'Cena 794€';
        echo '</p>';

        echo '<img src="https://www.ikea.com/sk/sk/images/products/soederhamn-corner-sofa-4-seat__0802739_PE768577_S5.JPG?f=xs" alt="Italian Trulli blablala">';
        
    } elseif ($product == 'sofa-4') {
        echo '<h2 class="intro" style="color:black; text-align: center;">sofa 4</h2>';

        echo '<p class="intro">LIDHULT - 4-miestna rohová pohovka, Lejde červená/hnedá červenohnedá <br>';
        echo 'Cena 1378€';
        echo '</p>';
        
        echo '<img src="https://www.ikea.com/sk/sk/images/products/lidhult-corner-sofa-4-seat-lejde-red-brown__0620089_PE689400_S5.JPG?f" alt="Italian Trulli blablala">';

    } elseif ($product == 'sofa-5') {
        echo '<h2 class="intro" style="color:black; text-align: center;">sofa 5</h2>';

        echo '<p class="intro">ANGERSBY 2-pohovka, Knisa svetlo sivá <br>';
        echo 'Cena 149€';
        echo '</p>';

        echo '<img src="https://www.ikea.com/sk/sk/images/products/angsta-sofa-bed-with-chaise-longue-dark-grey__0277578_PE416612_S5.JPG?f=g" alt="Italian Trulli blablala">';

    } elseif ($product == 'sofa-6') {
        echo '<h2 class="intro" style="color:black; text-align: center;">sofa 6</h2>';

        echo '<p class="intro">GRÖNLID - 4-pohovková, s ležadlom <br>';
        echo 'Cena 949€';
        echo '</p>';

        echo '<img src="https://www.ikea.com/sk/sk/images/products/groenlid-4-seat-sofa__0747902_PE744752_S5.JPG?f=s" alt="Italian Trulli blablala">';

    } elseif ($product == 'sofa-7') {
        echo '<h2 class="intro" style="color:black; text-align: center;">sofa 7</h2>';
        
        echo '<p class="intro">GRÄLVIKEN - Rozkladacia 3-pohovka ,sivá <br>';
        echo 'Cena 279€';
        echo '</p>';

        echo '<img src="https://www.ikea.com/sk/sk/images/products/graelviken-3-seat-sofa-bed__0443267_PE594242_S5.JPG?f=g" alt="Italian Trulli blablala">';

    } elseif ($product == 'sofa-8') {
        echo '<h2 class="intro" style="color:black; text-align: center;">sofa 8</h2>';

        echo '<p class="intro">GRUNNARP - Rozkladacia 3-pohovka, Gunnared tmavosivá <br>';
        echo 'Cena 349€';
        echo '</p>';        

        echo '<img src="https://www.ikea.com/sk/sk/images/products/grunnarp-3-seat-sofa-bed__0666760_PE713649_S5.JPG?f=g" alt="Italian Trulli blablala">';

    } elseif ($product == 'sofa-9') {
        echo '<h2 class="intro" style="color:black; text-align: center;">sofa 9</h2>';

        echo '<p class="intro">KNOPPARD - 2-pohovka , Knisa svetlosivá <br>';
        echo 'Cena 79.90€';
        echo '</p>';

        echo '<img src="https://www.ikea.com/sk/sk/images/products/knopparp-2-seat-sofa__0713943_PE729858_S5.JPG?f=g" alt="Italian Trulli blablala">';

    } elseif ($product == 'sofa-10') {
        echo '<h2 class="intro" style="color:black; text-align: center;">sofa 10</h2>';

        echo '<p class="intro">KLIPPAN - 2-pohovka , Bomstad čierna <br>';
        echo 'Cena 299€';
        echo '</p>';

        echo '<img src="https://www.ikea.com/sk/sk/images/products/klippan-2-seat-sofa-bomstad-black__0562963_PE663653_S5.JPG?f=s" alt="Italian Trulli blablala">';

    } else {
        echo "nic<br>";
        echo "TODO dopln udaje pre product=$product";
    }

?>