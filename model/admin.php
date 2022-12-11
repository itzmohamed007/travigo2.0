<?php

class Admin {
    // ________________________________connection ________________________________________
    private $hostName = "localhost";
    private $userName = "root";
    private $password = "";
    private $dbName = "gestion_de_voyages";

    public function connection() {
        $conn = new mysqli(
            $this->hostName,
            $this->userName,
            $this->password,
            $this->dbName
        );

        return $conn;
    }

    // fetching data part
    public function getData($connectDb) {
        $querry = "SELECT * FROM admin";
        $sql = $connectDb->query($querry);

        while($row = $sql->fetch_assoc()) {
            $data = $row;
        }
        return $data;
    }
}