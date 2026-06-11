<?php
echo "<h2> using while loop : </h2>";

$i = 15;

while($i <= 20)
{
    echo $i . "<br>";
    $i++;
}

echo "<hr>";

echo "<h2> using do while loop : </h2>";

$i = 15;

do
{
    echo $i . "<br>";
    $i++;
}
while($i <= 20);


?>