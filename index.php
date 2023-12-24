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

<!-- To read & print out data form the file -->
<?php
$mileAge = file_get_contents("data.json");
$decoded = json_decode($mileAge, true);

foreach ($decoded as $item => $value) {
    echo '<div id=\'items\'>';
    echo '<div><span>', $item, '</span>: <span>', $value, '</span></div>';
    echo '</div>';
}
?>

<hr>
Add a new item <input type="text" id="newitem">
<button onclick="addItem()">Add</button>

<hr>
<button onclick="saveItems()">Save2Serv</button>
</body>
</html>