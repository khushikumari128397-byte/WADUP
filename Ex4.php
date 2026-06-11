<?php

$month = date("n"); 
echo "<h2> current month using if...else :</h2>";

if ($month == 1)
    echo "Current Month: January";
elseif ($month == 2)
    echo "Current Month: February";
elseif ($month == 3)
    echo "Current Month: March";
elseif ($month == 4)
    echo "Current Month: April";
elseif ($month == 5)
    echo "Current Month: May";
elseif ($month == 6)
    echo "Current Month: June";
elseif ($month == 7)
    echo "Current Month: July";
elseif ($month == 8)
    echo "Current Month: August";
elseif ($month == 9)
    echo "Current Month: September";
elseif ($month == 10)
    echo "Current Month: October";
elseif ($month == 11)
    echo "Current Month: November";
else
    echo "Current Month: December";

echo "<hr>";

echo "<h2> current month using switch : </h2>";


$month = date("n"); 

switch ($month)
{
    case 1:
        echo "Current Month: January";
        break;
    case 2:
        echo "Current Month: February";
        break;
    case 3:
        echo "Current Month: March";
        break;
    case 4:
        echo "Current Month: April";
        break;
    case 5:
        echo "Current Month: May";
        break;
    case 6:
        echo "Current Month: June";
        break;
    case 7:
        echo "Current Month: July";
        break;
    case 8:
        echo "Current Month: August";
        break;
    case 9:
        echo "Current Month: September";
        break;
    case 10:
        echo "Current Month: October";
        break;
    case 11:
        echo "Current Month: November";
        break;
    case 12:
        echo "Current Month: December";
        break;
     }

?>