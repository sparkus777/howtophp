<?php
setcookie('userid', "", ['expires' => time() - 3600, 'path' => '/']);
setcookie('auth', "", ['expires' => time() - 3600, 'path' => '/']);
header('Location: /task4/index.php');