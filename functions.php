<?php
function addUserLog($jméno, $příjmení, $profese)
{$filename = "log.txt";
$data = date("Y-m-d h:i") . " " . $jméno . " " . $příjmení . " " . " | Profese: " . $profese . "\n";
file_put_contents($filename, $data, FILE_APPEND);}
?>