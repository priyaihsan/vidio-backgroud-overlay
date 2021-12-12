<?php 

$getdata = $_POST['add-vidio']
$index = 'localstorage.html';
if($getdata != null){
    $index = 'second.html';
}

include_once($index); ?>