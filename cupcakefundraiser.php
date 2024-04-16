<!--
Blake Hansen
SDEV328
Cupcake Assignment

need to create counter for each flavor selected called $flavorCount
-->
    <div class="form-container">
    <form method="post" action="">
        <p class="form-title">Cupcake Fundraiser</p>
        <label for="name">Your Name</label>
        <input name="name" placeholder="Name">

        <label>Cupcake flavors:</label>
        <input type='checkbox' name='flavor[]' value = " Grasshopper"> The Grasshopper
        <input type='checkbox' name='flavor[]' value = " Whiskey Maple Bacon"> Whiskey Maple Bacon
        <input type='checkbox' name='flavor[]' value = " Carrot Walnut"> Carrot Walnut
        <input type='checkbox' name='flavor[]' value = " Salted Caramel"> Salted Caramel
        <input type='checkbox' name='flavor[]' value = " Red Velvet"> Red Velvet
        <input type='checkbox' name='flavor[]' value = " Lemon Drop"> Lemon Drop
        <input type='checkbox' name='flavor[]' value = " Tiramisu"> Tiramisu

        <input id="submit" name="submit" type="submit" value="Submit">
    </form>
    </div>
<?php


    // Error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Check if things filled out
    if(!empty($_POST['name'])&&!empty($_POST['flavor'])) {

        $name = $_POST['name'];

        // Create array and loop through for count
        $cupCakesArray = $_POST['flavor'];
        $arrLength = count($cupCakesArray);
        for ($count = 0; $count < $arrLength; $count++) {
            echo $cupCakesArray[$count];
        }

        // Confirmation message
        echo '<h2>Order Summary:</h2> <br>';
        echo '<p>Cupcake order submitted! Thank you, ' . $name . ' for your order.</p> <br>';
        echo '<p>Order total: ' . (3.5 * $arrLength) . '</p> <br>';
    }
?>