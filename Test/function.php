<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function say_Hello() {
        echo "Hello PHP<br>";
        echo "My name is Pawarit<br>";
        }
        
        say_Hello();
        

        function add($n1,$n2){
            $result =$n1+$n2;
            echo"<br><br>result add : ".$result;
        }
        $num1 =10;
        $num2 = 20;

        add($num1,$num2);


        function subtract($n1,$n2=50){
            $result =$n1-$n2;
            echo"<br><br>result subtract : ".$result;
        }
        $num1 =10;
        $num2 =100;

        subtract($num1,$num2);//num2 =100


        function multiply($n1,$n2){
            $result =$n1*$n2;
            return $result;
        }
        $num1 =10;
        $num2 = 100;

        $resultmultiply =multiply($num1,$num2);
        multiply($num1,$num2);
        echo"<br><br>result multiply : ".$resultmultiply;

        function divide($n1,$n2,&$result){
            $result =$n1/$n2;
        }
        $num1 =30;
        $num2 = 5;

        divide($num1,$num2,$resultdivide );
        multiply($num1,$num2);
        echo"<br><br>result divide : ".$resultdivide;//$resultdivide=0

    ?>
    
</body>
</html>