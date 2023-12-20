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
    $title = "คำนวณพื้นที่สามเหลี่ยม";
    $b = "6";
    $h = "10";
    $result = "0.5"*($b*$h);
    echo '<tr>
    <td colspan="2" align="center">
        <big>'.$title.'</big>
    </td>
    <tr>    ';
    
    echo '<tr>
        <td>ความยาวฐาน :  </td>
        <td>'.$b.'</td>
    </tr>
        <td>ความสูง :  </td>
        <td>'.$h.'</td>
    </tr>
    <tr>
        <td> พื้นที่สามหลี่ยม ( 1/2 * ('.$b.' * '.$h.') ) : </td>
        <td> '.$result.'</td>
    <tr>';
    ?>

    </table>
    </form>

</body>
</html>