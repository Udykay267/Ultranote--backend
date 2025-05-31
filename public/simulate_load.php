<?php
$start = microtime(true);
while (microtime(true) - $start < 10) {
    // Busy wait
}
echo "CPU load simulated.";
?>