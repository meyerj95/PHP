<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factorial = $factorial * $i;
    }
    echo "Le factoriel de $number est $factorial";
}
?>