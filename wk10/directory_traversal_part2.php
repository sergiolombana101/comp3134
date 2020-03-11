<?php
$valid_path = true;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path=isset($_GET['q']) ? $_GET['q'] : '.';
if($path != '.' && strpos($path,'.')){
    $valid_path = false;
}
if($valid_path){
    if(!file_exists($path)){
        $valid_path = false;
    }else{
        $return_path = scandir($path);
        if(count($return_path) > 3 || $return_path[count($return_path)-1] != 'html'){
            $valid_path = false;
        }else{
            print "<pre>";
            print_r(scandir($path));
            print "</pre>";
        }
    }
}
if(!$valid_path){
    print("Invalid path");
}
?>
