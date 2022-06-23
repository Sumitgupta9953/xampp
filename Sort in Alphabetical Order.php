<?php
echo"sumit gupta";

$people= array('orav', 'ansh', 'sumit', 'rohan', 'rohan j');
$array_length = count($people);
echo "Before Sort"."<br>";
for($i=0;$i<$array_length;$i++)
{
echo $people[$i] ."<br>";
}
echo '<hr>';
sort($people);
echo "After Sort"."<br>";
for($i=0;$i<$array_length;$i++)
{
echo $people[$i]."<br>";
}
?>