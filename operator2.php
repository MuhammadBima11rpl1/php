<?php
$var1=$_POST['bima1'];
$var2=$_POST['Operator'];
$var3=$_POST['bima2'];

if($var2 =="+")
{
  echo "$var1 + $var3 = ",$var1 + $var3;
}
else if($var2 =="-")
{
  echo "$var1 - $var3 = ",$var1 - $var3;
}
else if($var2 =="*")
{
  echo "$var1 * $var3 = ",$var1 * $var3;
}
else if($var2 =="/")
{
  echo "$var1 / $var3 = ",$var1 / $var3;
}
else if($var2 =="%")
{
  echo "$var1 % $var3 = ",$var1 % $var3;
}
echo "<P><a href=Operator2.html>Back to Home";
?>
