<?php
header('Content-type: application/json');
$jsondata='[{"id":1,"text":"Root node","children":[{"id":2,"text":"Child node 1","children":true},{"id":3,"text":"Child node 2"}]}]';

echo $jsondata;

//echo json_encode($jsondata);
?>