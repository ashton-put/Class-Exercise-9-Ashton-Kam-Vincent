<!-- Connecting cdb -->
<?php
define ('DATABASE_NAME', 'ALPUTNAM_cs148_lab_6');
include 'DataBase.php';

$thisDataBaseReader = new DataBase('alputnam_reader', DATABASE_NAME);
$thisDataBaseWriter = new DataBase('alputnam_writer', DATABASE_NAME);
?>
<!-- Connection Complete cdb -->