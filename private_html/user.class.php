<?php
require_once 'config.php';
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
            $servername = "kraken.cs.messiah.edu";
            $dbusername = "csadmin";
            $dbpassword = "s3amonst3r";
            $dbname = "kraken_DB";

            try {
                $conn = new PDO("mysql:host=$servername; dbname=$dbname", $dbusername, $dbpassword);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(DPOException $e){
                echo 'ERROR: ' . $e->getMessage();
            }
            try {
                $sql = "UPDATE User 
            SET Password = '$this->Password', First_Name = '$this->First_Name', Last_Name = '$this->Last_Name', Gender = '$this->Gender'
            WHERE Email = '$this->Email'";
                $conn->exec($sql);
            } catch (PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
        }
    }
    public function update(){

    }
}
