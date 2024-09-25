<?php
session_start();

// Die korrekte PIN
$correctPin = '1a2b3c';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pin'])) {
    if ($_POST['pin'] === $correctPin) {
        // PIN korrekt, setze eine Session-Variable und leite zur Zielwebseite weiter
        $_SESSION['authenticated'] = true;
        header('Location: /php/scp_login.php');
        exit();
    } else {
        // PIN falsch, zeige eine Fehlermeldung
        echo "<script>alert('Falsche PIN!'); window.history.back();</script>";
    }
}
?>
