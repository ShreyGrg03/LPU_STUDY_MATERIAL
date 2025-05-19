<?php
setcookie("test_cookie", "test", time() + 5);
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}
?>