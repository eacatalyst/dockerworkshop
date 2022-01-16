<?php
$hourofDay = date('H');
if ($hourofDay < 12) {
    $message = "Good Morning";
} elseif ($hourofDay > 11 && $hourofDay < 18) {
    $message = "Good Afternoon";
} elseif ($hourofDay > 17) {
    $message = "Good Evenining";
}

echo $message

?>