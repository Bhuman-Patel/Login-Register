<?php

require_once 'user_up.php';

$user_up = new User_Up();

if(isset($_POST['submit_up'])) {
  $Name = ($_POST['Name']);
  $Email = ($_POST['Email']);
  $Phone = ($_POST['Phone']);
  $Password = ($_POST['Password']);
  $Confirm_Password = ($_POST['Confirm_Password']);

  $user_up->UserSubmit_Up($Name, $Email, $Phone, $Password, $Confirm_Password);
}
?>