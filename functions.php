<?php
// functions.php
function calculateRank($monthsActive) {
    if ($monthsActive >= 4) return 7;
    if ($monthsActive == 3) return 3;
    if ($monthsActive == 2) return 2;
    return 1;
}
?>
