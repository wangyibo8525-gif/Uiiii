<?php
// security.php
session_start();
function scanUploadFile($file) {
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    if ($extension !== 'apk') {
        return false;
    }
    return true;
}
?>
