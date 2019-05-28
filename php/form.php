<?php 
    $bicycle = $_POST['bicycle'];
    $helmet = $_POST['helmet'];
    $water_bottle = $_POST['waterBottle'];
    $bicycle_cost = $_POST['bicycleAmount'];
    $helmet_cost = $_POST['helmetAmount'];
    $water_bottle_cost = $_POST['waterBottleAmount'];
    $total = ($bicycle * $bicycle_cost) + ($helmet * $helmet_cost) + ($water_bottle * $water_bottle_cost);

    echo "You have ordered Bicycle for " . $bicycle . ", Helmet for " . $helmet . ",and water bottle for " . $water_bottle . ".";  
    echo "<br>";
    echo "Amount Bicycle " .$bicycle_cost . " Helmet " .$helmet_cost . " Water Bottle " . $water_bottle_cost . ".";
    echo "<br>";
    echo "Total: ";
    echo $total;
?>