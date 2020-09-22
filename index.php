<?php
  class User{
    public $username;
    public $password;
    public $email;
    public $avatar;

    public function _construct($username, $password, $email, $avatar){
      $this -> username = $username;
      $this -> password = $password;
      $this -> email = $email;
      $this -> avatar = $avatar;
    }
    public function _toString(){
      return "Username: " . $this -> username . "<br>"
            . "Password: " . $this -> password . "<br>"
            . "email: " . $this -> email . "<br>"
            . "avatar" . $this -> avatar . "<br>";
    }
  }

  $u1 = new User("pippo", "pluto", "pippo@mail.com", "x");
  $u2 = new User("paperino", "rossi", "pap@mail.com", "x");

  echo $u1;
  echo $u2;
