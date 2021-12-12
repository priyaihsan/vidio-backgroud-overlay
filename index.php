<?php 

$getdata = $_POST['add-vidio']
$index = 'localstorage.php';
if($getdata != null){
    $index = 'second.html';
}

include_once($index); ?>