<?php

 // GETTING the current mileage from file
$file = fopen("data.txt", "r");
$srt1 = trim(fgets($file));
fclose($file);
 // GETTING the current mileage from file

// Caltulating DELTA 
$item1 = $_POST['item1']; // NEW mileage TAKEN from the input
$delta = $item1 - $srt1; // math
//echo $delta;

//file_put_contents("data.txt", ""); // cleaning up is no longer necessary

// to write MILEAGE before the loop
file_put_contents("data.txt", $item1); // 

// to remove MILEAGE from the array before the loop
unset($_POST['item1']);
//print_r($_POST);

foreach ($_POST as $key => $value) {

    $updatedItem = $value + $delta; // a variable for adding DELTA
    file_put_contents("data.txt", "\n". $updatedItem , FILE_APPEND);

    // This logic ↓ no longer needed
    /* if (next($_POST)) {
        file_put_contents("data.txt", "\n". $updatedItem , FILE_APPEND);
    } else {
        file_put_contents("data.txt", $updatedItem, FILE_APPEND);
    } */  
}

header("Location: http://localhost:8888/fetch");
?>