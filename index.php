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
  $u2 = new User("paperino", "rossi", "pap@mail.com", ?><img src="<?php echo "https://upload-icon.s3.us-east-2.amazonaws.com/uploads/icons/png/5202224201557740378-512.png"?><?php  alt="">);

  echo $u1;
  echo $u2;
