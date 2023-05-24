<?php

$number = 123;
if (is_numeric($number)) {

        echo "Input Number :", $number."\n";
        echo "Reversed Number :", strrev(floor($number))."\n";

}
else
{
    echo "It Is Not A Number";
}

