<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduce</title>
</head>
<body>
    <img src ="me.jpg" width="300px" height="400px" align="center" border="3px">
    <?php 
    $name = "ปวริศร์";
    $surname = "ไหว้พรหม";
    $ID = "6506021622167";
    $address = "ปราจีนบุรี,ประเทศไทย";
    $call = "095-3297433";
    $field = "เทคโนโลยีและการจัดการอุตสาหกรรม";
    $major = "IT";
    
    echo "<br>",$name ,"\t" ,$surname ,"<br>";
    echo "รหัสนักศึกษา : " ,$ID ,"<br>";
    echo "ที่อยู่ : " ,$address ,"<br>";
    echo "เบอร์ติดต่อ : " ,$call ,"<br>";
    echo "คณะ : " ,$field ,"<br>";
    echo "สาขา : " ,$major ,"<br>";

    ?>
</body>
</html>