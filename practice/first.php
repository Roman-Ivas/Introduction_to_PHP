<?
$cars=array('bmw' => array(
    'model' => 'x5',
    'price' => 10000,
    'year' => 2015
),
'Toyota' => array(
    'model' => 'Camry',
    'price' => 15000,
    'year' => 2018
),
'skoda' => array(
    'model' => 'Octavia',
    'price' => 8000,
    'year' => 2014
));

$carCount = 1;

foreach ($cars as $carBrand => $carDetails) {
    
    echo "<div>";
    echo "<h3>Car #" . $carCount . ":</h3>";
    echo "<span>model - " . $carDetails['model'] . ", price - " . $carDetails['price'] . ", year - " . $carDetails['year'] . " ;</span>";
    echo "</div>";
    $carCount++;
    
}


