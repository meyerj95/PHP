<?php
      if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "admin" && $password == "admin") {
          echo "Bienvenue M.admin : Connexion reussie. <br> Heure et date de connexion : " . date("h:i:sa") . " " . date("d/m/Y");
        } else {
          echo "Mot de passe eronner";
        }
      }
    ?>