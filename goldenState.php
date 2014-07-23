<?php
$file = $_GET['goldenState.pdf'];
header('content-type: application/octet-stream');
header('content-Disposition: attachment; filename='.$file);
header('Pragma: no-cache');
header('Expires: 0');
readfile($file);
?>