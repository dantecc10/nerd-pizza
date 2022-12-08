<?php
session_start();
session_destroy();
header("Location: ../index.php");
# Puro naco hace commit con '..'
?>