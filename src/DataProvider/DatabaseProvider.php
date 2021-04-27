<?php

namespace App\DataProvider;
use PDO;

class DatabaseProvider
{
    private \PDO $dbh;

    public function __construct()
    {
        try {
            $this->dbh = new PDO(
                'mysql:dbname=project;host=mysql',
                $_ENV['DBUSERNAME'],
                $_ENV['DBPASSWD']
            );

            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            // We could/should log this!
            die('Unable to establish a database connection');
        }

    }
}
