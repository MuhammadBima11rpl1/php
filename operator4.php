<?php
$var1=$_POST['bima1'];
$var2=$_POST['Operator'];
$var3=$_POST['bima2'];

if($var2 =="==")
{
  $lol=$var1==$var3;
}
if($var2 =="<")
{
  $lol=$var1<$var3;
}
if($var2 ==">")
{
  $lol=$var1>$var3;
}
if($var2 =="<=")
{
  $lol=$var1<=$var3;
}
if($var2 ==">=")
{
  $lol=$var1>=$var3;
}
if($var2 =="!=")
{
  $lol=$var1!=$var3;
}
echo "$var1 $var2 $var3 = ";
if($lol == 1)
{
  echo "TRUE";
}
else {
  echo "FALSE";
}
echo "<P><a href=Operator4.html>Back to Home";
?>
