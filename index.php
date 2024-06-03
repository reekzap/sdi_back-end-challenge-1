<?php

/*****************************************
 * Title: Back-end Developer Challenge 1
 * Submitted By: Ricardo Zapanta Jr.
 * Date: June 03, 2024
******************************************/

//My car rental TABLE
$car_rental_json=array(
    [
        "size" => "Small",
        "symbol" => "S",
        "seat_capacity" => 5,
        "cost" => 5000
    ],
    [
        "size" => "Medium",
        "symbol" => "M",
        "seat_capacity" => 10,
        "cost" => 8000
    ],
    [
        "size" => "Large",
        "symbol" => "L",
        "seat_capacity" => 15,
        "cost" => 12000
    ],
);

// Input Field
$no_of_seats = readline("Please input number (seat): "); 

// Init global variables
$prev_total_cost = null;
$my_stored_values = [];

// loop car rental json
foreach($car_rental_json as $car) {
    $cost = $car["cost"]; //cost per car

    //get multiplier
    $multiplier = ceil($no_of_seats / $car["seat_capacity"]);
    //get total cost
    $total_cost = $multiplier * $cost;

    //check if current total cost is lower than previous
    if($prev_total_cost == null || $total_cost < $prev_total_cost){
        //update previous value and stored value
        $prev_total_cost = $total_cost;
        $my_stored_values = array($car["symbol"], $multiplier, $prev_total_cost);
    }else{
        continue;
    }
}

//Display Output
list($symbol, $count, $cost) = $my_stored_values;
echo "$symbol x $count \n";
echo "Total = PHP $cost \n";
?>