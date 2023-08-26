<?php
function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}

function redirectTo($location) {
    header("Location: $location");
    exit;
}
?>
