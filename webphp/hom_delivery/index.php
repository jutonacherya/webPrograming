<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pineapple</title>
</head>
<body>
    <form action="process.php" method="post">
    <table>
        <tr><td>Enter the name of pineapple:</td><td><input type="text" name="pineapple"></td></tr>
        <tr><td>Home Delivery:</td><td>        <select  name ="delivery"> 
                                                <option value="yes">yes</option>
                                                <option value="no">No</option>
                                                 </select>
                                         </td></tr>
         <tr><td>Tip:</td><td><input type="text"  name="tip"></td></tr>
          <tr><td>Extra Salt:</td><td><select name ="salt"> 
                                                <option value="Small">small</option>
                                                <option value="Madiuam">Medium</option>
                                                <option value="Large">Large</option>
                                                 </select></td></tr>
        <tr><td colspan="2" align="center"> <input type="submit" value="Operate bill"><td></tr>
    </table>
    </form>
</body>
</html>