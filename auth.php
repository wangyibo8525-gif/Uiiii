<?php
// auth.php
session_start();
require_once 'db.php';

function checkBanStatus($pdo, $identifier) {
    $stmt = $pdo->prepare("SELECT * FROM bans WHERE identifier = ?");
    $stmt->execute([$identifier]);
    if ($stmt->rowCount() > 0) {
        die("ACCESS DENIED: ระบบตรวจสอบพบประวัติการทำผิด แบนถาวรทันทีและไม่สามารถสมัครใหม่ได้");
    }
}
?>
