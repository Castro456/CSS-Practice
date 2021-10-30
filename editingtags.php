<?php

if (!empty($_POST['email']) && !empty($_POST['pass']))
{
  $email = $_POST['email'];
  $password = $_POST['pass'];
  if ($email == "software@gmail.com" && $password == "software") {
    echo '<h1 style="font-size:50px; color:green">Welcome</h1>';
  }
  else {
    echo '<h1 style="font-size:50px; color:red">Email or Password is Incorrect </h1>';
  }
}
else {
  echo '<h1 style="font-size: 50px; color:yellow">Fill both the fields </h1>';
}