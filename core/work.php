<html>

<head>

<title></title>

</head>

<body>

<?php
$lh = 'localhost';
$rt = 'root';
$pw = '';
$usname = 'ml';

$dabb = new mysqli ($lh,$rt,$pw,$usname);

$qw = "SELECT * FROM hanna";

if($rost = $dabb -> query($qw)){

}

while($ryt = mysqli_fetch_array($rost)){
    

        echo $ryt['sentiment']."<br><br>";
    
}
?>

 
<?php

$command = escapeshellcmd("python what.py");
$output = shell_exec($command);
echo $output;

?>


</body>



</html>