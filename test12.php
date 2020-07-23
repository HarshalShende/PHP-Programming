<?php

$choice=2;

switch($choice){

    case 1:
        echo 'choice is one 1';
    break;

    case 2:
        echo 'choice is two 2';
    break;

    case 3: case 4: case 5:
        echo 'choice is three 3';
    break;

    default :
    echo 'Invalid choice !!!';

}

echo '<br>';

switch(true):

    case($choice == 1):
        echo '1st position';
    break;

    case($choice == 2):
        echo '2nd position';
    break;

    case($choice == 3):
        echo '3rd position';
    break;

    case($choice == 4):
        echo '4th position';
    break;

    default:
        echo "invalid choice!!!!!";
endswitch;



?>