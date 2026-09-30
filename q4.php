<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Username: <input type="text" name="username" id=""><br>
        Password: <input type="password" name="pass" id=""><br>
       Agree to terms and conitions:
       <input type="checkbox" name="check" id="" value="Yes"> <br>   
         <button type="submit">Submit</button>
         
    </form>
</body>
</html>

<?php 

if($_SERVER['REQUEST_METHOD']==='GET'){
    $username = $_GET['username'];
    $check = isset($_GET['check'])?'Subscribed':'Not Subscribed';

    echo "Welcome, $username. You have $check to the terms and  
conditions.";
}


?>