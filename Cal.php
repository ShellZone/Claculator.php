<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caclulator2</title>
   <link rel="stylesheet" href="Calculator.css">
   <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
</head>
<body>


Result 

<div class="calculator"> <br>

    <form action="Cal.php" method="post">

    Number 1 <input type="number" step="0.001" name="num1"> <br> <br>

    Operator: <input type="textbox" name="Operator"> <br><br>

    Number 2 <input type="number" step="0.001" name="num2"> <br> <br>

     <br> <input type="submit"> 

     <br>
     <br>

    </div>

</form>
    
    <?php

//function sdsdsds ($f){}


    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["Operator"];

    if ($op=="+"){
        echo $num1 + $num2;
    } elseif($op=="-"){
        echo $num1 - $num2;
    } elseif($op=="*"){
        echo $num1 * $num2;
    } elseif ($op=="/"){
        echo $num1 / $num2;
    } else {
         echo  "invalid";
    }




// if statements are good to narrow down options

?>



</body>
</html>
