<?php
require_once 'config.php';
include "db.config.php";
class User
{
    private $First_Name;
    private $Last_Name;
    private $Email;
    private $Password;
    private $Gender;

    public function __construct($fName, $lName, $email, $pw, $gender){
        $this ->First_Name = $fName;
        $this ->Last_Name = $lName;
        $this ->Email = $email;
        $this ->Password = $pw;
        $this ->Gender = $gender;
    }
    public function __get($name) {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }
    public function __set($name, $value) {
        if (property_exists($this, $name)) {
            $this->$name = $value;
            update();
        }
    }
    private function update(){
        try {
            $sql = "UPDATE User 
            SET Password = '$this->Password', First_Name = '$this->First_Name', Last_Name = '$this->Last_Name', Gender = '$this->Gender'
            WHERE Email = $this->Email";
            $conn->exec($sql);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
