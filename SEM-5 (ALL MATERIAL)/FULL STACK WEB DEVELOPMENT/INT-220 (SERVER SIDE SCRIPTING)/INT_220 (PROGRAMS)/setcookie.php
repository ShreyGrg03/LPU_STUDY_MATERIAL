<?php
echo "Welcome to the world of cookies<br>";
echo time();
setcookie("category","Books",time()+ 86400,"/");
echo "The cookie is set<br>";

?>