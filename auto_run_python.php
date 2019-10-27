<?php 
$path = 'C:\xampp\htdocs\wastedata\python\1.py';
$command = escapeshellcmd('python '.$path);
$output = shell_exec($command);
echo $output

 ?>