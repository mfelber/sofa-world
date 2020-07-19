<?php

    if (isset($_GET['category'])) {
        $category = $_GET['category'];
    }
    
    echo "<h3><li><a href=\"index.php\">Menu</a></li></h3>";

    if ($category == 'sofa') {
        echo '<ul>';
        $color = "siva";
        for ($x = 1; $x <= 10; $x++) { 
            echo "<li><a href=\"index.php?category=$category&product=sofa-$x\">sofa $x $color</a></li>";
        }
        echo "</ul>";
    } elseif ($category == 'chair') {

        echo "TODO"; // TODO

    } else {
        include 'category.php';
    }
    
?>

