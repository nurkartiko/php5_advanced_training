<?php
$url = "http://localhost:81/php5adv/createxml.php";
$data = file_get_contents($url);
$obj = simplexml_load_string($data);
foreach($obj as $row){
    echo $row->id;
    echo '<br>';
    echo $row->name;
    echo '<br>';
    echo $row->price;
    echo '<hr>';
}