<?php
//this script should print the nine times table as an unordered list upto 12*9
echo '<ul>';
// loop: initialise $i to 9, then add 9 at each iteration
for ($i = 9; $i < 109; $i = $i + 9){
//print the current value of $i
    echo '<li>' . $i . '</li>';
}
echo '</ul>';
?>
