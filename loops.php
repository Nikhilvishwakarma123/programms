<?php

for ($i=1; $i <= 5; $i++) { 
    for ($k=1; $k <=($i*6-1) ; $k++) { 
        echo "&nbsp";
    }
    for ($j=1; $j <= (6-$i); $j++) { 
        echo "&copy;";
        echo " &nbsp &nbsp &nbsp &nbsp &nbsp ";
    }
    echo "<br>";
}

echo "<hr>";


for($row=1;$row<=5;$row++)
    {
        for($sp=1;$sp<=5;$sp++)
        {
            echo "* ";
        }
        echo "<br>";
  }
?>