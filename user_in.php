<?php

require_once 'connect.php';

class User_In {

    private $dbase;

    public function __construct() {

        $this->dbase = new Connect();
        $this->dbase = $this->dbase->Connection();

    }

    public function UserSubmit_In($Name, $Email, $Password) {

        try {

            $st = $this->dbase->prepare("INSERT INTO login_details VALUES (:Name, :Email, :Password)");

            $st->bindparam(":Name", $Name);
            $st->bindparam(":Password", $Password);
            $st->bindparam(":Email", $Email);

            if($st->execute()) {

                echo ' Inserted successfully.';
            }

        } catch (PDOException $e) {

            echo 'Something failed :' . $e->getMessage;
        }

    }

}

?>