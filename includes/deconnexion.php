<?php
session_unset();

// On détruit la session
session_destroy();
header("Location: ../index.php");
 ?>
