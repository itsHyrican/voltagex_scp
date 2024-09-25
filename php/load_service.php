<?php
if (isset($_GET['service_file'])) {
    $serviceFilePath = '/etc/systemd/system/' . basename($_GET['service_file']);
    if (file_exists($serviceFilePath)) {
        echo file_get_contents($serviceFilePath);
    }
}
?>
