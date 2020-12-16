<?php

require_once 'user_in.php';

$user_in = new User_In();

if(isset($_POST['submit_in'])) {
  $Name = ($_POST['Name']);
  $Password = ($_POST['Password']);
  $Email = ($_POST['Email']);
  
  $user_in->UserSubmit_In($Name, $Email, $Password);
}
?>