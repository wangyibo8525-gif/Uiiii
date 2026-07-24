<?php
// api.php
header('Content-Type: application/json');
require_once 'db.php';
echo json_encode(["status" => "success", "system" => "Unity Studio API Active"]);
?>
