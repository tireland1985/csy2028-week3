<?php
/* dice roll using random number generator, building on from excercise 1.
   use a loop to roll 8 times and print the value. also print you won if the result is a 6, otherwise print you lose
   */
//use a loop to roll 8 times and print the result
//for ($i = 0; $i < 8; $i++){
// increase the maximum number of possible rolls
for ($i = 0; $i <100; $i++){
    echo '<p>';
    // variable to hold dice roll value, and use random number generator
    $number = rand(1,6);

    if ($number == 6){
        echo 'You rolled a 6, you win';
    //end the loop early if a 6 is rolled
    break;
    }
    else {
        echo 'You rolled a ' . $number . ', you lose';
    }
    echo '</p>';
}
