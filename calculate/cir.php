<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" align="center" width="500">
    
    <?php
    $title = "คำนวณพื้นที่วงกลม";
    $r = "6";
    $pie = "3.14159"; 
    $result = $pie*($r*$r);

    echo '<tr>
    <td colspan="2" align="center">
        <big>'.$title.'</big>
    </td>
    </tr>';
    
    echo '<tr>
        <td>รัศมี :  </td>
        <td>'.$r.'</td>
    </tr>
    <tr>
        <td> สูตรพื้นที่วงกลม ( '.$pie.' * '.$r.' ^ 2 ) : </td>
        <td> '.$result.'</td>
    </tr>
    <tr>
        <td colspan="2" align="center">
        <div><a href="./calculate.php">back</a></div>
        </td>
    </tr>';
    ?>
    </table>
    </form>
</body>
</html>