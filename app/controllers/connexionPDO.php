<?php
class connexionPDO {
    private $connection = null;

    public function getConnexion() {
        if ($this->connection === null) {
            try {
                $host = 'db';
                $dbname = 'database';
                $user = 'user';
                $password = 'pass';
                $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
                $this->connection = new PDO($dsn, $user, $password);
            } catch (\Throwable $t) {
                echo 'Error: ' . $t->getMessage();
                echo '<br />';
            }
        }

        return $this->connection;
    }
}
