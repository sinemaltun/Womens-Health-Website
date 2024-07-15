<?php
session_start();
session_destroy(); // Important
setcookie("user", "", time() - 1, "/altuns20"); // Unset the cookie by setting its expiration time to the past
setcookie("user", "", time() - 1, "/");
//Sometimes path is / and sometimes it is /altuns20, so tried both.
header('Location: p_index.php'); 
exit();
?>
