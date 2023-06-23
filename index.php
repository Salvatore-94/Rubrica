<?php

include('header.php');

// Conessione DB
$conn = mysqli_connect('localhost', 'sitidev_salrubrica', 'i3@vV3_r8WnG', 'sitidev_salrubrica');

$query = "SELECT * FROM rubrica";

$risultati = $conn->query($query);



while ($row = $risultati->fetch_assoc()) {
    $final_ary[] = $row;
}
?>
<div class="container">

<table class="table table-hover">
    <tr>
        <td>Nomeeee</td>
        <td>Cognome</td>
        <td>Numero</td>
        <td>Email</td>
        <td>Sesso</td>
    </tr>

    <?php
    foreach ($final_ary as $k => $v) {
        $nome = $v['nome'];
        $cognome = $v['cognome'];
        $numero_tel = $v['numero_tel'];
        $email = $v['email'];
        $sesso = $v['sesso'];

    ?>
        <tr>
            <td><?php echo $nome ?></td>
            <td><?php echo $cognome ?></td>
            <td><?php echo $numero_tel ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $sesso ?></td>
        </tr>

    <?php

    }

    ?>
</table>
</div>

<a href='http://salvatore.sitidev.it/rubrica.php' class="btn btn-primary"> Aggiungi</a>

<?php
include('footer.php'); ?>