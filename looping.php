<?php

//for
for($i=1;$i<=10;$i++){
    echo $i.' ';
}
echo '<br>';

//foreach
$products = array('semsang', 'lenovo', 'lg', 'oppo', 'htc', 'asus');
foreach ($products as $product) {
    echo $product.' ';
}
echo '<br>';

//multidimensional array
$students = array(
    array('nim'=>'005410','name'=>'nurkartiko'),
    array('nim'=>'005411','name'=>'trikusumo'),
);
echo '<pre>';
print_r($students);
echo '</pre>';

$parents = array(
    array('name'=>'nurkartiko','umur'=>32,'child'=>array('zufar','hanif')),
    array('name'=>'trikusumo','child'=>array('fulan1','fulan2'))
);


echo '<pre>';
print_r($parents);
echo '</pre>';
echo $parents[0]['child'][1];

echo json_encode($parents);

echo '<br>';echo '<br>';

foreach ($students as $student) {
    echo 'nim : '.$student['nim'].'<br>';
    echo 'nama: '.$student['name'].'<hr>';
}

echo '<hr>if and switch<br>';
$selectedchannel = 6;
if($selectedchannel == 1){
    echo 'TRVI';
}elseif($selectedchannel==6){
    echo 'AdiTV';
}else{
    echo 'Other';
}
echo '<br>';

switch ($selectedchannel) {
    case 1:
        echo 'TRVI';
        break;
    case 6:
        echo 'AdiTV';
        break;
    default:
        echo 'KTV';
        break;
}
echo '<br>';
echo $selectedchannel > 6 ? 'ngawur' : 0;//ngawur ini kok bisa tipe data beda 