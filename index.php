<?php
    $generator_letters = "ABCDEFGHILMNOPQRSTUVZYJKW";
    $generator_numbers ="1234567890";
    $generator_characters = "!@£$%^&*";
    $ciao = ($_GET['lenght']);
    $generator = substr(str_shuffle(($generator_characters) . ($generator_letters) . ($generator_numbers) ),0,$ciao);
    //var_dump($generator)
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="p-5">
        <form action="index.php" method="GET">
            <label for="lenght"></label>
            <input type="number" id="lenght" name="lenght">
            <button type="button">GENERA PASSWORD</button> 
        </form>
       <?php if(!empty($_GET)){
         echo $generator;
        }?> 
    </div> 
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
</body>
</html>