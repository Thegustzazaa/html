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
        <td> พื้นที่วงกลม ( '.$r.' * '.$pie.' ) : </td>
        <td> '.$result.'</td>
    </tr>';
    ?>
    </table>
    </form>
</body>
</html>