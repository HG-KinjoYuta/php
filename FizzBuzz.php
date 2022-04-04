<?php

for($i = 1; $i <= 100; $i++)
{
    if($i % 3 == 0 && $i % 5 == 0)
    {
        print "FizzBuzz<br>";
    }
    else if($i % 3 == 0)
    {
        print "Fizz<br>";
    }
    else if($i % 5 == 0)
    {
        print "Buzz<br>";
    }
    else
    {
        print $i."<br>";
    }
}

?>