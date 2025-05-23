<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skenario 2</title>
</head>
<body>
    <h1>Skenario 2</h1>
</body>
</html>

<?php

$jam = date("24.00");
$jam = floatval($jam);

if ($jam >= 00.00 && $jam <= 04.00){
    echo "Dini hari";
}else if ($jam >= 04.00 && $jam <= 10.00){
    echo "Pagi";
}else if ($jam >= 10.00 && $jam <= 15.00){
    echo "Siang";
}else if ($jam >= 15.00 && $jam <= 17.30){
    echo "Sore";
}else if ($jam >= 17.30 && $jam <= 18.30){
    echo "Petang";
}else if ($jam >= 18.30 && $jam <= 24.00){
    echo "Malam";
}else if ($jam >= 24.00 && $jam <= 00.00){
    echo "Dunia lain";
}

?>