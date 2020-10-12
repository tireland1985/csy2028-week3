<?php
$number = rand(1, 6);

if ($number == 6) {
    echo 'You rolled a 6, you win!';
}
else {
    echo 'You rolled a ';
    echo $number;
    echo ', you lose.';
}

?>