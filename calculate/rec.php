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
    $title = "คำนวณพื้นที่สี่เหลี่ยม";
    $w = "6";
    $l = "10";
    $result = $w*$l;
    echo '<tr>
    <td colspan="2" align="center">
        <big>'.$title.'</big>
    </td>
    </tr>';
    
    echo '<tr>
        <td>ความกว้าง :  </td>
        <td>'.$w.'</td>
    </tr>
        <td>ความยาว :  </td>
        <td>'.$l.'</td>
    </tr>
    <tr>
        <td> พื้นที่สี่หลี่ยม ( '.$w.' * '.$l.' ) : </td>
        <td> '.$result.'</td>
    </tr>';
    ?>
    </table>
    </form>
...

</body>
</html>