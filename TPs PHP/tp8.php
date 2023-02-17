<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $premierNombre = $_POST['premierNombre'];
    $deuxiemeNombre = $_POST['deuxiemeNombre'];

    if ($premierNombre > $deuxiemeNombre) {
      $temp = $premierNombre;
      $premierNombre = $deuxiemeNombre;
      $deuxiemeNombre = $temp;
    }

    echo "Les nombres pairs entre " . $premierNombre . " et " . $deuxiemeNombre . " sont :<br>";

    for ($i = $premierNombre; $i <= $deuxiemeNombre; $i++) {
      if ($i % 2 == 0) {
        echo $i . "/";
      }
    }
    echo "Fin des nombres pairs";
  }
?>