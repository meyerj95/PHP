<?php
      if (isset($_POST['submit'])) {
        $t1 = $_POST['t1'];
        $t2 = $_POST['t2'];
        $operator = $_POST['t3'];

        switch ($operator) {
          case "Addition":
            $result = $t1 + $t2;
            break;
          case "Reste":
            $result = $t1 % $t2;
            break;
          case "Multiplication":
            $result = $t1 * $t2;
            break;
          case "Division":
            $result = $t1 / $t2;
            break;
          default:
            $result = "Opération non valide";
        }

        echo "Le resultat est : " . $result;
      }
    ?>