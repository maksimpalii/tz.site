<?php

if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['phone']) && isset($_POST['email']) ){
    $comma_separated = implode("\t", $_POST);
    $fp = fopen('file.txt', 'a');
    fwrite($fp, $comma_separated . PHP_EOL);
    fclose($fp);
    echo 'success';
}
else{
    echo 'bad request';
}
