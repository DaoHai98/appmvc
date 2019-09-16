<?php

namespace MVC\Models;
class Database
{
    public $connection;
    const DATABASE_SEVER = "localhost";
    const DATABASE_USER = "root";
    const DATABASE_PASSWORD = "";
    const DATABASE_NAME = "mvc";

    public function __construct()
    {
        if (!$this->connection) {
            $this->connection = mysqli_connect(self::DATABASE_SEVER, self::DATABASE_USER, self::DATABASE_PASSWORD, self::DATABASE_NAME);

        }
    }
}
?>