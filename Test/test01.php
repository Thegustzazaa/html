<!DOCTYPE html>
<html>
<head>
    <title>แสดงการสร้างและใช้งานอารเรย์ Numeric Array</title>
</head>
<body>
    <?php
        $MaxStudent = 20;
        for($n = 0 ; $n < $MaxStudent; $n++) {
            $score[$n] = rand(0, 100);
        }
        echo '<center><font size="4" color="blue"> Grade Report </font></center>';
        echo '<table border="1" align="center">';
        echo '<tr><th align="center">Student No.</th>';
        echo '<th align="center">Score</th>';
        echo '<th align="center">Grade</th></tr>';
        for($n = 0 ; $n < $MaxStudent; $n++) {
            echo '<tr><td align="center">' . ($n +1 ) . '</td>';
            echo '<td align="center">' . $score[$n] . '</td>';
            echo '<td align="center">' . calculateGrade($score[$n]) . '</td></tr>';
        }
        echo '<tr><td colspan="3" align="center"> Average Score : ';
        echo average( $score, $MaxStudent);
        echo '</td></tr></table>';
        
        function average($data, $max) {
            $total = 0;
            for($n = 0 ; $n < $max; $n++) {
                $total += $data[$n];
            }
            $average = $total / $max;
            return round($average, 2);
        }

        function calculateGrade($score) {
            if ($score >= 85) {
                return 'A+';
            } elseif ($score >= 80) {
                return 'A';
            } elseif ($score >= 75) {
                return 'B+';
            } elseif ($score >= 70) {
                return 'B';
            } elseif ($score >= 65) {
                return 'C+';
            } elseif ($score >= 60) {
                return 'C';
            } elseif ($score >= 55) {
                return 'D+';
            } elseif ($score >= 50) {
                return 'D';
            } else {
                return 'F';
            }
        }
    ?>
</body>
</html>