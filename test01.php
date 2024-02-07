<html>
<head>
    <title>แสดงการสร้างและใช้งานอารเรย์ Numberic Array</title>
</head>
<body>
    <?php
        $MaxStudent = 10;
        for($n = 0 ; $n < $MaxStudent; $n++) {
            $score[$n] = rand(0, 100);
        }
        echo '<center><font size="4" color="blue"> Grade Report </font></center>';
        echo '<table border="1" align="center">';
        echo '<tr><th align="center">Student No.</th>';
        echo '<th align="center">Score</th></tr>';
        for($n = 0 ; $n < $MaxStudent; $n++) {
            echo '<tr><td align="center">' . ($n +1 ) . '</td>';
            echo '<td align="center">' . $score[$n] . '</td></tr>';
        }
        echo '<tr><td colspan="2" align="center"> Average Score : ';
        echo average( $score, $MaxStudent);
        echo '</td></tr></table>';
        
        function average($data, $max) {
            $total = 0;
            for($n = 0 ; $n < $max; $n++) {
                $total += $data[$n];
            }
            return( $total / $max );
        }
    ?>
</body>
</html>