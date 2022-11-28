<?php

$n=100;




function oddeven($n){

$sum1=0;
$sum2=0;
 
for($c=1;$c<=$n;$c++)
{
$number= $c;
if($number%2==0)
{
$sum1=$sum1+$number;
}
else
{
$sum2=$sum2+$number;
}
 
}
echo "Sum of enen numbers = "."$sum1"."<br>";
echo "Sum of odd numbers = "."$sum2";
}

oddeven($n);

?>