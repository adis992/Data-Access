<?php

$cockie_name = "user";
$cookie_value = "Ben";
setcookie($cockie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

$cockie2_name = "color";
$cookie2_value = "black";
setcookie($cockie2_name, $cookie2_value, time() + (86400 * 30), "/"); // 86400 = 1 day

$cookie3_name = "code";
$cookie3_value = "3j2h5t24uth";
setcookie($cookie3_name, $cookie3_value, time() + (86400 * 30), "/"); // 86400 = 1 day

?>
