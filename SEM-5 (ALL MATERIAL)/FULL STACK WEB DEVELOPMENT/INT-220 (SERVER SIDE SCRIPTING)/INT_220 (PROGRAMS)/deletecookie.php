<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 5);
echo "Cookie 'user' is deleted.";
?>