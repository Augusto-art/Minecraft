<?php
session_start();
session_destroy();
header('Location: ../inventario/index.php');
exit();
