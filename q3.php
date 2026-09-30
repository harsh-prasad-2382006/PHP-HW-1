<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name: <input type="text" name="name" id=""><br>
        Phone: <input type="text" name="phone" id=""><br>
        Gender:
        <select name="car" id="">
            <option value="Toyota">Toyota</option>
            <option value="Ford">Ford</option>
            <option value="Tesla">Tesla</option>
        </select><br>   
         <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php 

if($_SERVER['REQUEST_METHOD']==='POST'){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $car = $_POST['car'];

    echo "Hello, $name. Your phone number is $phone and your  
preferred car brand is $car. ";
}

?>
