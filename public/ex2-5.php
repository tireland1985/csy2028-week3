<?php
//this script should print both the sum and answers for the 9 times table as an unordered list
echo '<ul>';
//initialise $i to 1; loop through and increment until $i reaches 12
for ($i = 1; $i < 13; $i++){
    //print the 9 times table with the relevant answers, concatenating as required
    echo '<li>' . $i . ' x 9 = ' . ($i*9). '</li>';
}
echo '</ul>';