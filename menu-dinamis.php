<?php

function connect(){
    $host       = 'localhost';
    $user       = 'root';
    $password   = '';
    $database   = 'ecommerce';
    return mysqli_connect($host, $user, $password, $database);
}

function makeList($id){
    $query = "select * from task where parent_id='$id'";
    $list = mysqli_query(connect(), $query);
    echo '<ul>';
    while ($row = mysqli_fetch_array($list)){
        echo '<li>'.$row['task'].'</li>';
        makeList($row['task_id']);
    }
    echo '</ul>';
}

makeList(0);
?>
