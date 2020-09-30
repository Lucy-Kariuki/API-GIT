<?php

function connect(){
    $server="localhost";
    $username="root";
    $password="";
    $database="121048";

    $conn=mysqli_connect($server,$username,$password,$database);

    if (!$conn) {
        die("Connection Not Successful");
    }
    return $conn;
}

if (isset($_POST['register'])) {
    $firstname=$_POST['firstname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $cardname=$_POST['cardname'];
    $cardnumber=$_POST['cardnumber'];
    $expmonth=$_POST['expmonth'];
    $expyear=$_POST['expyear'];
    $cvv=$_POST['cvv'];
    


    $sql="INSERT INTO `about`( `firstname`, `email`, `address`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`) VALUES ('$firstname','$email','$address','$city','$state','$zip','$cardname','cardnumber','$expmonth','$expyear','$cvv') ";

    $link=connect();
    if (mysqli_query($link,$sql)) {
        echo "Registered Successfully...!";
    }else{
        echo "Error Inserting Data";

    }
}

?>
