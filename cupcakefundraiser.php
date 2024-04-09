<?php
// Cupcake form
        <div class="form-container">
            <form action="newApplication.php" method="post">
                <p class="form-title">Cupcake Fundraiser</p>
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>

<label>Cupcake flavors:</label>
<input type='checkbox' name='flavor[]'> The Grasshopper
<input type='checkbox' name='flavor[]'> Whiskey Maple Bacon
<input type='checkbox' name='flavor[]'> Carrot Walnut
<input type='checkbox' name='flavor[]'> Salted Caramel Cupcake
<input type='checkbox' name='flavor[]'> Red Velvet
<input type='checkbox' name='flavor[]'> Lemon Drop
<input type='checkbox' name='flavor[]'> Tiramisu

 <input type="submit" value="Submit">
            </form>
        </div>

$flavors = $_POST['flavor'];
        foreach($flavors as $flavor)
            print($flavor);

        else if (!empty($_POST) && !empty($_POST["name"]) && !empty($_POST["flavor"])){
    $name = $_POST["name"];
    $flavor = $_POST["flavor"];
    $form = true; // send an email
    // Display a confirmation message
    echo '<p>Thank you, ' . $name . ', for your order!</p>';
    echo '<p>Order Summary: </p>';
    echo '<p>Order Total: $3.50 </p>';
}
else {
    $form = false; // dont send an email
    // Display error message
    echo '<p>ERROR</p>';
    echo '<p>Incomplete form</p>';
}
?>