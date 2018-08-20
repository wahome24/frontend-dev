<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php trials</title>
</head>
<body>
</body>
</html>





<?php
//establishing a database connection

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="trial";
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


if(isset($connection)){
    echo "database connection successful";
}else{
    echo "check your connection";
}

?>
<br>
<?php
//check for query
$query="SELECT * FROM phpessentials";
$result=mysqli_query($connection,$query);

if(!$result){
    echo "there is no  data fetched";
}else{
    echo "data querry is a success";
}


$eras="am very grateful for this";

?>


