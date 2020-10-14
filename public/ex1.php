<?php
//dice roll using random number generator
$number = rand(1, 6);
$number2 = rand(1, 6);

//display the results of the roll
echo 'You rolled a ';
echo $number;
echo ' and a ';
echo $number2;
echo '. ';

//If either roll results in a 6, the user wins, if not tell user they lost.
if ($number == 6 || $number2 == 6){
    echo 'You win';
}
else {
    echo 'You lose.';
}

echo '<a href="ex1.php"> Roll again</a>';
?>