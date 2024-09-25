<?php
if (isset($_POST['action']) && isset($_POST['service'])) {
    $action = $_POST['action'];
    $service = $_POST['service'];

    $allowedServices = ['palworld', 'enshrouded', 'craftopia','ark-island', 'valheim', 'satisfactory', 'ark-scorched', 'ark-center', 'ark-aberration'];
    $allowedActions = ['start', 'stop'];

    // Überprüfen, ob der angeforderte Service und die Aktion erlaubt sind
    if (in_array($service, $allowedServices) && in_array($action, $allowedActions)) {
        $command = "sudo /bin/systemctl $action $service";

        exec($command, $output, $return_var);
        if ($return_var === 0) {
            echo "Aktion für den '$service' Server erfolgreich ausgeführt.";
        } else {
            echo "Fehler beim {$action}en des Servers '$service': " . implode("\n", $output);
        }
    } else {
        echo "ERROR: invalid inputs -> CONTACT itsHyrican";
    }
} else {
    echo "ERROR: Service and action must be given. -> CONTACT itsHyrican";
}
?>
