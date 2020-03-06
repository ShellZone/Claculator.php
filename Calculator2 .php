<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="Calculator.php" method="post">

Number 1 <input type="number" name="num1"> <br> <br>

Operator: <input type="textbox" name="Operator"> <br><br>

Number 2 <input type="number" name="num2"> <br> <br>





</form>
    
    <?php

//function sdsdsds ($f){}

function calc($num1,$num2){
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
        echo "invalid";
    }

}

?>



</body>
</html>
