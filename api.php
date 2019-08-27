<?php
header('Content-type: application/json');
$jsondata='[{"id":0,"text":"Root node","children":[{"id":1,"text":"Child node 1","children":true},{"id":2,"text":"Child node 2"}]}]';

$note2json='["Child node 3","Child node 4"]';

$note2json_v2='[{"id":3,"text":"Child node 3","type":"file"},{"id":4,"text":"Child node 4","children":true}]';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    if($id==1){
        echo $note2json_v2;
    }    
    if($id=='#'){
        echo $jsondata;
    }
}


//echo json_encode($jsondata);
?>