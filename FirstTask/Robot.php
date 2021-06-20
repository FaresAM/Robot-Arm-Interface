<?php


if($_SERVER['REQUEST_METHOD']=='POST'){
$Slider1 = $_POST['Slider1'];
$Slider2 = $_POST['Slider2'];
$Slider3 = $_POST['Slider3'];
$Slider4= $_POST['Slider4'];
$Slider5= $_POST['Slider5'];
$Slider6 = $_POST['Slider6'];

}

$connect = new mysqli('localhost','root','','robot values');


if($connect){
    echo "Connection successful *** ";

    $sql = "INSERT INTO `robot`(Base,Shoulder,Elbow,Wrist,Gripper,AdditionalComponents)VALUES('$Slider1','$Slider2','$Slider3','$Slider4','$Slider5','$Slider6')";
    $result=mysqli_query($connect,$sql);
    if($result){
        echo "Data insert successful *** ";
        echo " Base = $Slider1 | Shoulder = $Slider2 | Elbow = $Slider3 | Wrist = $Slider4 | Gripper = $Slider5 | Additional Components = $Slider6 ";
    }else{
    die(mysqli_error($connect));



    }
}






?>