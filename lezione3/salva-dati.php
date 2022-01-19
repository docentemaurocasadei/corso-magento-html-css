<?php
    print_r($_POST);
    //print ($_POST['codice-fiscale']);
    if (preg_match("/[A-Z]{6}[0-9]{2}[A-Z]{1}[0-9]{2}[A-Z]{1}[0-9]{3}[A-Z]{1}/i", $_POST['codice-fiscale'])) {
        echo "Codice Fiscale Corretto";
    } else {
        echo "Codice Fiscale NON Corretto";
    }
