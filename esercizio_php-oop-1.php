<?php
// GOAL: Nell'ottica di quanto visto a lezione, generare una classe User definendo alcune variabili d'istanza che rappresentino
// alcune informazioni rilevanti nella registrazione di un utente in un qualsiasi sito a vostra scelta.
// Generare inoltre costruttore e metodo toString nelle modalita' viste in classe. Generare inoltre alcune istanze della classe
// e stamparne il valore attraverso la toString.


// Registrazione su un ipotetico forum dedicato alle distro di Linux.
  class User {
    public $name;
    public $email;
    public $gender;
    public $country;
    public $birthdate;
    public $distro;

    public function __construct($name, $email, $gender, $country, $birthdate, $distro="Unknown") {
      $this -> name = $name; // Mandatory
      $this -> email = $email; // Mandatory
      $this -> gender = $gender; // Mandatory
      $this -> country = $country; // Mandatory
      $this -> birthdate = $birthdate; // Mandatory
      $this -> distro = $distro; // Optional
    }

    public function __toString() {
      return "<u>Info Utente</u>:<br> Nome completo: <b>" . $this -> name . "</b><br>"
            . "Email: <b>"  . $this -> email . "</b><br>"
            . "Gender: <b>" . $this -> gender . "</b><br>"
            . "Country: <b>" . $this -> country . "</b><br>"
            . "Birthdate: <b>" . $this -> birthdate . "</b><br>"
            . "Distro: <b>" . $this -> distro . "</b><br>";
    }
  }

  $user1 = new User("Marco Longo", "mlongo@alice.it", "Male", "Italy", "20.01.1990", "Ubuntu");
  $user2 = new User("Roberta Vincenti", "rvincenti@gmail.com", "Female", "Switzerland", "19.09.1998");
  $user3 = new User("Andrea Belardi", "abelardi@virgilio.it", "Male", "Italy", "21.02.1982", "Kubuntu");
  $user4 = new User("Rodrigo Taddei", "rtaddei@email.br", "Male", "Brasil", "20.01.1974", "Linux Mint");
  $user5 = new User("Xiao Wang", "xiaowang@telecom.ch", "Female", "China", "04.04.1999", "Manjaro");

  echo "<b> Lista utenti registrati su Forum Appassionati Linux: </b><br><br>";
  echo $user1 . "<br>" . $user2 . "<br>" . $user3 . "<br>" . $user4 . "<br>" . $user5 . "<br>";

 ?>
