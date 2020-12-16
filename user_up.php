<?php

require_once 'connect.php';

class User_Up {

    private $dbase;

    public function __construct() {

        $this->dbase = new Connect();
        $this->dbase = $this->dbase->Connection();

    }

    public function UserSubmit_Up($Name, $Email, $Phone, $Password, $Confirm_Password) {

        try {

            $st = $this->dbase->prepare("INSERT INTO register_details VALUES (:Name, :Email, :Phone, :Password, :Confirm_Password)");

            $st->bindparam(":Name", $Name);
            $st->bindparam(":Email", $Email);
            $st->bindparam(":Phone", $Phone);            
            $st->bindparam(":Password", $Password);            
            $st->bindparam(":Confirm_Password", $Confirm_Password);


            if($st->execute()) {

                echo ' Inserted successfully.';
            }

        } catch (PDOException $e) {

            echo 'Something failed :' . $e->getMessage;
        }

    }

}


?>