<?php
session_start();
session_destroy();  
header("Location: http://localhost/latihsession/index.php", true, 301);
exit();
?>