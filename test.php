<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $sum = 0;
    $sumeven = 0;
    
    for($num=1;$num<=10;$num++){
        if ($num % 2 == 1){
            echo "$num is odd Number <br>";
            $sum += $num;
        } 
        else {
            echo "$num is even Number <br>";
            $sumeven += $num;
        }

        
    }
    echo"sum of odd number is : ", $sum;"<br>";
    echo"sum of even number is : ", $sumeven;
    ?>
</body>
</html>