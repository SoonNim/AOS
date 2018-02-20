<?php

session_start();
session_unset();

// On détruit la session
session_destroy();
header("Location: ../../page-user.php");
 ?>
