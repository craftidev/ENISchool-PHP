<?php
$name        = isset($_POST["name"])        ? $_POST["name"]        : "";
$address     = isset($_POST["address"])     ? $_POST["address"]     : "";
$postalCode  = isset($_POST["postalCode"])  ? $_POST["postalCode"]  : "";
$city        = isset($_POST["city"])        ? $_POST["city"]        : "";
$phone       = isset($_POST["phone"])       ? $_POST["phone"]       : "";
$description = isset($_POST["description"]) ? $_POST["description"] : "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Name: "        . $name .        "<br/>";
    echo "Address: "     . $address .     "<br/>";
    echo "Postal code: " . $postalCode .  "<br/>";
    echo "City: "        . $city .        "<br/>";
    echo "Phone: "       . $phone .       "<br/>";
    echo "Description: " . $description . "<br/>";
}
?>

<form method="POST" action="index.php" class="flex-form">
    <label for="name">Name: </label>
    <input name="name" type="text" value="<?= $name; ?>" required />

    <label for="address">Address: </label>
    <input name="address" type="text" value="<?= $address; ?>" required />

    <label for="postalCode">Postal code: </label>
    <input name="postalCode" type="number" value="<?= $postalCode; ?>" required />

    <label for="city">City: </label>
    <input name="city" type="text" value="<?= $city; ?>" required />

    <label for="phone">Phone: </label>
    <input name="phone" type="text" value="<?= $phone; ?>" required />

    <label for="description">Description: </label>
    <textarea name="description"><?= $description; ?></textarea>

    <input type="submit" value="Submit" />
</form>