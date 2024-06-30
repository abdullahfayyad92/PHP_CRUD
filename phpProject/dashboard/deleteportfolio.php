<?php
session_start();
require_once 'lib/file.php';

$pro_id =$_GET['proid'];

// echo $pro_id;die;
$result= DeletePortfolio($pro_id);


if($result == 1){
    header("LOCATION:allportfolio.php");
}else{

}