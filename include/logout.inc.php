<?php session_start(0);
session_unset();
session_destroy();
header("Location: ../index.php");
