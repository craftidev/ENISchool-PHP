<?php

try {
    echo 'Current PHP version: ' . phpversion();
    echo '<br />';

    $host = 'db';
    $dbname = 'database';
    $user = 'user';
    $pass = 'pass';
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $connection = new PDO($dsn, $user, $pass);

    echo 'Database connected successfully';
    echo '<br />';

    $sql = "SELECT * FROM restaurants";
    $statement = $connection->prepare($sql);
    $statement->execute();
    //display results
    $result = $statement->fetchAll();
    foreach ($result as $row) {
        echo '<br />';
        foreach ($row as $key => $value) {
            if (!is_int($key)) {
                echo '<br />';
                echo $key . ": " . $value;
            }
        }
        echo '<hr />';
    }


} catch (\Throwable $t) {
    echo 'Error: ' . $t->getMessage();
    echo '<br />';
}
