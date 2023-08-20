<?php


function AddNewUser($name,$password,$email){
    
    $connection=   mysqli_connect("localhost","root","","project1");
    $query="INSERT INTO `user` (`name`,`password`,`email`) VALUE ('$name','$password','$email') ";

    mysqli_query($connection," $query ");

    $res=mysqli_affected_rows($connection);
    if( $res==1 ){
        return true;

    }
    else{
        return false;    };
}

function login($email,$password){

    $connection=   mysqli_connect("localhost","root","","project1");
    $query="SELECT * FROM `user` WHERE `email`='$email' && `password`='$password' ";

    $q= mysqli_query($connection," $query ");
   
    $row = mysqli_fetch_assoc($q);
    return $row ;
   //return mysqli_affected_rows($connection);

   

}



?>