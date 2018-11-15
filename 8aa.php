<?php
if(isset($_POST['res'])) {
$res= $_POST['display'];
$res=eval('return' .$res .';');
}
?>


<html>
<head>
<title> Simple Calculator - Web lab Program 1</title>
<style>
<style>
td,tr{
background-color:red;
}
input{
width:100%;
border:solid;
}
</style>

</head>
   <body>
<center>
      <form name="calculator">
         <table>
            <tr>
               <td colspan="4">
                  <input type="text" name="display" value="<?php if(isset($res)){ echo $res;}?>">
               </td>
            </tr>
            <tr>
               <td><input type="button"  value="1" onclick="calculator.display.value += '1'"></td>
               <td><input type="button"  value="2" onclick="calculator.display.value += '2'"></td>
               <td><input type="button"  value="3" onclick="calculator.display.value += '3'"></td>
               <td><input type="button"  value="+" onclick="calculator.display.value += '+'"></td>
            </tr>
            <tr>
               <td><input type="button" value="4" onclick="calculator.display.value += '4'"></td>
               <td><input type="button" value="5" onclick="calculator.display.value += '5'"></td>
               <td><input type="button" value="6" onclick="calculator.display.value += '6'"></td>
               <td><input type="button" value="-" onclick="calculator.display.value += '-'"></td>
            </tr>
            <tr>
               <td><input type="button" value="7" onclick="calculator.display.value += '7'"></td>
               <td><input type="button" value="8" onclick="calculator.display.value += '8'"></td>
               <td><input type="button" value="9" onclick="calculator.display.value += '9'"></td>
               <td><input type="button" value="x" onclick="calculator.display.value += '*'"></td>
            </tr>
            <tr>
               <td><input type="button" value="c" onclick="calculator.display.value = ''"></td>
               <td><input type="button" value="0" onclick="calculator.display.value += '0'"></td>
               <td><input type="submit" value="=" name="res"></td>
               <td><input type="button" value="/" onclick="calculator.display.value += '/'"></td>
            </tr>
         </table>
      </form>
</center>
   </body>
   
</html>
