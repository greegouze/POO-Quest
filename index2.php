<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First step to POO</title>
</head>
<body>
    <h1>Premier pas en POO</h1>
    <?php require_once "car.php";

    $polo = new Car ('Blanche', 4, 'Essence');
    var_dump($polo);
    

    $mercedes = new Car ('Noire', 5, 'Diesel');
    var_dump($mercedes);

    $twingo = new Car ('Verte', 2, 'Ethanol');
    var_dump($twingo);



    
echo '<br> Polo de couleur : ' . $polo->getColor() . ', comportant : ' . $polo->getNbSeats() . ' sièges' . '<br>';

echo '<br> Twingo de couleur : ' . $twingo->getColor() . ', comportant : ' . $twingo->getNbSeats() . ' sièges' . '<br>';
   

var_dump(Car::ALLOWED_ENERGIES);




require_once "camion.php";

$camion = new Truck ('Red', 2, 'fuel',100);
    echo $camion->full(150). PHP_EOL;
    
    echo $camion->forward() . PHP_EOL;

    echo $camion->brake();

    var_dump($camion);

    $gigaliner = new Truck ('Gray', 3, 'electric', 850);
    echo $gigaliner->full(850). PHP_EOL;
    
    echo $gigaliner->forward() . PHP_EOL;

    echo $gigaliner->brake();

    var_dump($gigaliner);


    ?>



</body>
</html>


