<!--  nell'ottica di quanto visto a lezione, generare una classe User definendo alcune variabili
      d'istanza che rappresentino alcune informazioni rilevanti nella registrazione di un utente
      in un qualsiasi sito a vostra scelta. Generare inoltre costruttore e metodo toString nelle modalita' viste in classe.
      Generare inoltre alcune istanze della classe e stamparne il valore attraverso la toString -->
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
      return $this -> avatar . "<br>"
            . "Username: " . $this -> username . "<br>"
            . "Password: " . $this -> password . "<br>"
            . "email: " . $this -> email . "<br>"
            . "<br><br>";
    }
    // public function getRandom(){
    //   return $psw1 = rand ( void ): int
    // }

  }

  $img1 = '<img src="https://upload-icon.s3.us-east-2.amazonaws.com/uploads/icons/png/4664092721557740377-512.png" style="width:50px;">';
  $img2 = '<img src="https://upload-icon.s3.us-east-2.amazonaws.com/uploads/icons/png/5202224201557740378-512.png" style="width:50px;">';

  $psw1 = rand();
  $psw2 = rand();

  $u1 = new User("pippo", $psw1, "pippo@mail.com", $img1);
  $u2 = new User("paperino", $psw2, "pap@mail.com", $img2);

  echo $u1;
  echo $u2;
