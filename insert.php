<?php

// Conessione DB
$conn = mysqli_connect('localhost', 'sitidev_salrubrica', 'i3@vV3_r8WnG', 'sitidev_salrubrica');


//Errore di conessione
if($conn === false){
    die("ERROR: Connessione non riuscita. "
        . mysqli_connect_error());
}


//Valori da salvere in db
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$numero_tel = $_POST['numero_tel'];
$email = $_POST['email'];
$sesso =$_POST['sesso'];


//Salvatoaggio dati
$sql = "INSERT INTO rubrica (nome,cognome, numero_tel, email, sesso) VALUES ('$nome', '$cognome', '$numero_tel', '$email', '$sesso' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>