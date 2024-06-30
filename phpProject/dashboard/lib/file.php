<?php
function AddNewPro($filename , $desc , $user_id){
    $con = mysqli_connect("localhost","root","","fs8_proone");
    $sql = "INSERT INTO `protofolio` (`img`,`description`,`user_id`)  VALUES ('$filename','$desc',$user_id)";

    mysqli_query($con,$sql);
    $res = mysqli_affected_rows($con);
    if($res= 1){
    
        return true;
    }else{
        return false;
    }

}

function GetPortfolio(){

    $con = mysqli_connect("localhost","root","","fs8_proone");
    $sql = "SELECT * FROM `userportfolio`";

    $q= mysqli_query($con,$sql);

    $project=[];
    while($res= mysqli_fetch_assoc($q)){
        $project[]=$res;
    }
    return $project;

}

//part 5
function DeletePortfolio($proid){

    $con = mysqli_connect("localhost","root","","fs8_proone");

    $sql = " DELETE FROM `protofolio` WHERE `id` = $proid ";

    mysqli_query($con,$sql);
    $res = mysqli_affected_rows($con);
    if($res= 1){
    
        return true;
    }else{
        return false;
    }

}

//part6
function GetUpadePortfolio($pro_id){

    $con = mysqli_connect("localhost","root","","fs8_proone");
    $sql = "SELECT * FROM `userportfolio` WHERE `id` ='$pro_id'";

    $q= mysqli_query($con,$sql);

    $res = mysqli_fetch_assoc($q);
    return $res;

}

function UpdatePro($desc , $filename , $upid){
    $con = mysqli_connect("localhost","root","","fs8_proone");
    $sql = "UPDATE `protofolio` SET `description`='$desc' ";

    if(!empty($_FILES['img'])){
        $sql .=" , `img`='$filename'";
    }
    $sql .="WHERE `id`='$upid'";

    mysqli_query($con,$sql);
    $res = mysqli_affected_rows($con);
    if($res= 1){
    
        return true;
    }else{
        return false;
    }

}