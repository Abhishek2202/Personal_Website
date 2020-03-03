<?php

require 'Controller/PersonalController.php';
$personalController = new PersonalController();

if(isset($_POST['types']))
{
    //Fill page with coffees of the selected type
    $coffeeTables = $personalController->CreateCoffeeTables($_POST['types']);
}
else 
{
    //Page is loaded for the first time, no type selected -> Fetch all types
    $coffeeTables = $personalController->CreateCoffeeTables('%');
}

//Output page data
$title = 'Coffee overview';
$content = $personalController->CreateCoffeeDropdownList(). $coffeeTables;

include 'Template.php';
?>
