<?php session_start(0);
sessipon_unset();
session_destroy();
header("Location: ../index.php");