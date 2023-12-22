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
    $title = "คำนวณพื้นที่สี่เหลี่ยมคางหมู";
    $h = "5";
    $ps = "10";
    $result = ($h*$ps)/2;
    echo '<tr>
    <td colspan="2" align="center">
        <big>'.$title.'</big>
    </td>
    </tr>';
    
    echo '<tr>
        <td>ความสูง :  </td>
        <td>'.$h.'</td>
    </tr>
        <td>ผลรวมด้านคู่ขนาน :  </td>
        <td>'.$ps.'</td>
    </tr>
    <tr>
        <td> สูตรพื้นที่สี่เหลี่ยมคางหมู (('.$h.'*'.$ps.')/2) : </td>
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

