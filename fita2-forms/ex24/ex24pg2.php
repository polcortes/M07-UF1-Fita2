<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $contrasenya1 = $_POST["pass1"];
        $contrasenya2 = $_POST["pass2"];

        if ($contrasenya1 === $contrasenya2) {
            if (str_contains($contrasenya1, '1234567890')) {
                echo "Contrasenya correcta.";
            } else {
                echo "ERROR: La contrasenya ha de tenir almenys un número.";
            }
        } else {
            echo "ERROR: Les contrasenyes han de coincidir.";
        }
    }
?>