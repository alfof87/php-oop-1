<?php
  class User{
    public $username;
    public $password;
    public $email;
    public $avatar;

    public function __construct($username, $password, $email, $avatar){
      $this -> username = $username;
      $this -> password = $password;
      $this -> email = $email;
      $this -> avatar = $avatar;
    }
    public function __toString(){
      return "Username: " . $this -> username . "<br>"
            . "Password: " . $this -> password . "<br>"
            . "email: " . $this -> email . "<br>"
            . "avatar" . $this -> avatar . "<br>";
    }
  }

  $u1 = new User("pippo", "pluto", "pippo@mail.com", "x");
  $u2 = new User("paperino", "rossi", "pap@mail.com", ?><img src="https://lh3.googleusercontent.com/proxy/X-8yhOtrra3GbJU7fN7j5poCHMv-MR2DmAQCMc5VTn-f4PLKLHwhOLqzeuuu_hIH5xzodIE2R-T9HTvTgqj0_MAN2nfH_y8IPitKsObT508906Bi-tZlLq7wyYzfwylXPnZg273D6Cwivg1WdkCT_4PO" alt="">  <?php);

  echo $u1;
  echo $u2;
