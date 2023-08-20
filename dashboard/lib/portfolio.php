<?php 

function AddPortfolio($img,$description,$userid){
    
    $connection=   mysqli_connect("localhost","root","","project1");
    $query="INSERT INTO `portofolio`( `image`, `description`, `user_id`) VALUES ('$img','$description','$userid') ";

    mysqli_query($connection," $query ");

    $res=mysqli_affected_rows($connection);
    if( $res==1 ){
        return true;

    }
    else{
        return false;    };
}


function GetPortfolios(){
    $connection=   mysqli_connect("localhost","root","","project1");
    $query="SELECT * FROM `userportfolio` ";

   $q= mysqli_query($connection," $query ");
    $projects=[];
   while($res=mysqli_fetch_assoc($q)){
    $projects[]=$res;
   }
return $projects;


}


function DeletePortfolio($pro_id){
    
    $connection=   mysqli_connect("localhost","root","","project1");

    $query="DELETE FROM `portofolio` WHERE `id`=$pro_id ";

    mysqli_query($connection," $query ");

    $res=mysqli_affected_rows($connection);
    if( $res==1 ){
        return true;

    }
    else{
        return false;    };
}


function GetPortfoliosById($id){
    $connection=   mysqli_connect("localhost","root","","project1");
    $query="SELECT * FROM `userportfolio` WHERE `id`=$id";

   $q= mysqli_query($connection," $query ");
    
   $res=mysqli_fetch_assoc($q);
return $res;


}


function UpdatePortfolio($id,$description,$img){
    
    $connection=   mysqli_connect("localhost","root","","project1");
    $query="UPDATE  `portofolio` SET `description`='$description' ";
   // echo $img;die;
    if(!empty($img)){
        $query .=" , `image`='$img' ";
}
//else{echo "empty";}
    $query .="WHERE `id`=$id";
//     echo $query;die;

    mysqli_query($connection," $query ");

    $res=mysqli_affected_rows($connection);
    if( $res==1 ){
        return true;

    }
    else{
        return false;    };
}
