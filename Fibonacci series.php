<!DOCTYPE html>
<html>
<body>
<h2>Enter the Number</h2><br>
<form action="" method="POST">
    <input type="text" name="number"/>
    <input type="submit">
</form>
<?php  
$num = 0;  
$n1 = 0;  
$n2 = 1;  
$n = $_POST['number'];

while ($num < $n )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  
}
?>  



</body>
</html>

