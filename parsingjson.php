<?php
$url="http://localhost:81/php5adv/json.php";
$data= file_get_contents($url);
$obj = json_decode($data);
echo '<pre>';
print_r($obj);
echo '</pre>';

foreach ($obj as $row){
    echo 'kode:'.strtoupper($row->code).' ';
    echo 'kode:'.strtolower($row->code).' ';
    echo 'nama:'. substr($row->name,3,2);
    echo '<br>';
}

$tipedata = array(1,1.6,'setring');
foreach ($tipedata as $row){
    echo $row.' --> '. gettype($row).'<br>';
}
if(is_array($tipedata)){
    echo 'array';
}else{
    echo 'bukan array';
}

?>