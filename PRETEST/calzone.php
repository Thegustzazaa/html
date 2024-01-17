<html>
    <head><title>โปรแกรมรับค่าจากฟอร์มแบบ GET</title></head>
    <body>
    <?php

       
        
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];
        $number3 = $_GET['number3'];
        echo "เงินเดือน : <i> $number1 </i> <br/>";
        echo "ค่าลดหย่อนต่อปี : <i> $number2 </i> <br/>";
        echo "ค่าใช้จ่ายต่อปี : <i> $number3 </i> <br/>";
        
        $sum = ($number1*12) - $number2 - $number3;
        if ($sum >=0 && $sum <= 150000){
            $rate = $sum;
        }else if($sum >=150001 && $sum <= 300000){
            $rate = ($sum*5/100);
        }else if($sum >=300001 && $sum <= 500000){
            $rate = ($sum*10/100);
        }else if($sum >=500001 && $sum <= 750000){
            $rate = ($sum*15/100);
        }else if($sum >=750001 && $sum <= 1000000){
            $rate = ($sum*20/100);
        }else if($sum >=1000001 && $sum <= 2000000){
            $rate = ($sum*25/100);
        }else if($sum >=2000001 && $sum <= 5000000){
            $rate = ($sum*30/100);
        }else if($sum >=5000001){$rate = ($sum*35/100);}
        echo "ภาษี : <i> $rate </i> <br/>";

        
    ?>
    </body>
</html>
่