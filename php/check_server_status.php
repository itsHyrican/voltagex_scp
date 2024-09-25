<?php
$servers = [
    'craftopia' => 'craftopia.service',
    'ark-island' => 'ark-island.service',
    'ark-scorched' => 'ark-scorched.service',
    'ark-center' => 'ark-center.service',
    'ark-aberration' => 'ark-aberration.service',
    'enshrouded' => 'enshrouded.service',
    'palworld' => 'palworld.service',
    'satisfactory' => 'satisfactory.service',
    'valheim' => 'valheim.service'
];

$statuses = [];
foreach ($servers as $id => $serviceName) {
    exec("systemctl is-active $serviceName", $output, $status);
    $statuses[$id] = ($status === 0) ? 'online' : 'offline';
}

header('Content-Type: application/json');
echo json_encode($statuses);
