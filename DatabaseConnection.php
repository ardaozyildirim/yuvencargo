<?php

abstract class DatabaseConnection {


    public function __construct()
    {

    }

    protected function connect() {



      if($_SERVER['SERVER_NAME'] == 'transmena.dev')

      {

          $servername = "localhost";
          $username = "root";
          $password = "root";
          $dbname = "transmenaDB";
      }
      elseif($_SERVER['SERVER_NAME'] == 'transmena.com.tr'){

          $servername = "localhost";
          $username = "transmena_db_usr";
          $password = "*04mvW97r";
          $dbname = "admin_transmena_db";
      }

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;

    }


    protected function query($sql) {


        return  $this->connect()->query($sql);


    }
}


?>