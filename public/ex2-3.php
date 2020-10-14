<?php
//use a loop to display all odd numbers from 21 to 99

echo '<ul>';
// initialise $i as 21, then loop through adding 2 until $i reaches a value of 100
for ($i = 21; $i < 100; $i = $i + 2) {
    //print the relevant numbers as a list item in an unordered list
    echo '<li>' . $i . '</li>';
}
echo '</ul>';