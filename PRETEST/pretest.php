<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ratecal</title>

</head>
<body>    
<form method="get" action="calzone.php">
    <table border="1" align="center" width="400">
        <tr>
            <td colspan="3" align="center">
            <big>โปรแกรมคำนวณภาษี</big>
            </td>
        </tr>
        <tr>
            <td align="left">เงินเดือน</td>
            <td align="left"><input type="text" name="number1" size="20" value=""></td><br>
        </tr>
            <td align="left">ค่าลดหย่อนภาษี</td>
            <td align="left"><input type="text" name="number2" size="20" value=""></td><br>
        </tr>
            <td align="left">ค่าใช้จ่ายต่อปี</td>
            <td align="left"><input type="text" name="number3" size="20" value=""></td><br>
        </tr>
        
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value=" Submit " />
                <input type="reset" value=" Clear " />
            </td>
        </tr>
    </table>
</form>
</body>
</html>