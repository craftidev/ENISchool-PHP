<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST["name"];
        $address = $_POST["address"];
        $postalCode = $_POST["postalCode"];
        $city = $_POST["city"];
        $phone = $_POST["phone"];
        $description = $_POST["description"];

        echo "Name: " . $name . "<br/>";
        echo "Address: " . $address . "<br/>";
        echo "Postal code: " . $postalCode . "<br/>";
        echo "City: " . $city . "<br/>";
        echo "Phone: " . $phone . "<br/>";
        echo "Description: " . $description . "<br/>";
    }
?>

<form method="POST" action="index.php" class="flex-form">
<label for="name">Name: </label>
<input name="name" type="text" />

<label for="address">Address: </label>
<input name="address" type="text" />

<label for="postalCode">Postal code: </label>
<input name="postalCode" type="text" />

<label for="city">City: </label>
<input name="city" type="text" />

<label for="phone">Phone: </label>
<input name="phone" type="text" />

<label for="description">Description: </label>
<textarea name="description"></textarea>

<input type="submit" value="Submit" />
</form>
