<?php
ob_start();
session_start();?>
<?php


// This code is for contacting the database

$localhost = "localhost";
$root = 'root';
$pw = '';
$database = 'ml';

$db = new mysqli ($localhost, $root, $pw, $database);

$rating = $_POST['rating'];
$sentiment = 0;

if(isset($_POST['reviews'])){
    $review = $db -> real_escape_string($_POST['city']);

    if($rating<3){
$sentiment = "Negative";
    }

    elseif($rating==3){
        $sentiment = "Neutral";
    }

    else{
        $sentiment = "Positive";
    }

    $ok = "INSERT INTO hanna(review_text,sentiment) VALUES('$review','$sentiment')";

    echo $ok;

    if($right = $db -> query($ok)){
        header("location: work.php");
        exit(0);
    }

    else{

    }
}