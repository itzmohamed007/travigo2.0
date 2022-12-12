<?php

include("admin.php");
class Tour extends Admin{

    public $destination;
    public $imageFolder;
    public $imageName;
    public $oldLocation;
    public $newLocation;
    public $price;
    public $duration;

    // adding to data base
    public function add($connectDb, $destination, $oldLocation, $newLocation, $price, $duration) {
        // changing the locations of the image into the new location
        move_uploaded_file($oldLocation, $newLocation);
        $sql = $connectDb->query("INSERT INTO `tours`(`destination`, `image`, `price`, `duration`) VALUES ('$destination','$newLocation','$price','$duration')");
        if($sql) {
            return true;
        }else {
            return false;
        }
    }

    // getting data from database
    public function get($connectDb) {
        $sql = $connectDb->query("SELECT * FROM tours");
        if($sql->num_rows > 0) {
            return $sql;
        } else {
            return false;
        }
    }

    // deleting data
    public function delete($connectDb, $id) {
        $sql = $connectDb->query("DELETE FROM tours WHERE id = $id");
        if($sql->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    // updating data
    public function update($connectDb, $id, $destination, $oldLocation, $newLocation, $price, $duration) {
        // changing the locations of the image into the new location
        move_uploaded_file($oldLocation, $newLocation);
        if(!empty($oldLocation)) {
            $sql = $connectDb->query("UPDATE tours SET destination='$destination',image='$newLocation',price='$price',duration='$duration' WHERE id = '$id'");
        } else {
            $sql = $connectDb->query("UPDATE tours SET destination='$destination',price='$price',duration='$duration' WHERE id = '$id'");
        }
        if($sql) {
            return true;
        }else {
            return false;
        }
    }   
}