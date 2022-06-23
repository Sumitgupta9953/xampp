<?php
echo"sumit gupta";
$ages = array(25,10,30,15,20);
$array_length = count($ages);
echo "Before Sort"."<br>";
for($i=0;$i<$array_length;$i++)
{
echo $ages[$i] ."<br>";
}
echo '<hr>';
sort($ages);
echo "After Sort"."<br>";
for($i=0;$i<$array_length;$i++)
{
echo $ages[$i]."<br>";
} ?>