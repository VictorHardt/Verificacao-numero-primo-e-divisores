<?php

    $A = $_POST['Numero'];
    $B = 0;

    for($x = 1;$x <= $A ; $x++) {
        if($A % $x == 0)
        $B++;
    }

    if($B == 2)
    echo '<p> O número é primo</p>';

    else
    echo '<p> O número não é primo </p>';

    echo 'Divisores: ';

    for($C=1 ; $C<=$A ; $C++) {
        if($A % $C == 0)
            echo "\n $C";
    }
    
    
   
    