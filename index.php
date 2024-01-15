<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="functions.js"></script>
</head>
<body>

<?php
$mileAge = file_get_contents("data.json");
$decoded = json_decode($mileAge, true);

echo '<div id="mileage"><span>Actual mileage: </span><span>', $decoded['mileage'], '</span></div>';

unset($decoded['mileage']);
//destroy a single element of an array
?>

<br>
To update mileage <input type="number" id="newMileage"> <button onclick="updateAll()">OK</button>
<hr>

<!-- To read & print out data form the file -->
<!-- <?php
foreach ($decoded as $item => $value) {
    echo '<div id=\'items\'>';

    echo '<div id="', $item, '"><span>', $item, '</span>: <span>', $value, '</span><span></span></div>';

    echo '</div>';
}
?>
 -->

 <?php
foreach ($decoded as $item => $fields)
{
    echo '<div id=\'items\'>';
    echo '<div id="', $item, '">';
    echo "<span>$item</span> | ";

    foreach ($fields as $field => $value)
    {
        echo "<span>$value</span>", " ";
    }
    
    echo '</div>';
    echo '</div>';
    echo '<hr>';
}
?>

Add a new item <input type="text" id="newitem"><br>
Add item note <input type="text" id="newitem_note">
<button onclick="addItem()">Add</button>
<hr>

<button onclick="saveItems()">Save2Serv</button>
</body>
</html>