<?php
//use loop to create unordered list, and replace the numbers 1 - 10 with their textual equivalent
echo '<ul>';
for ($i = 1; $i < 11; $i++){
    echo '<li>';
    if($i == 1){
        echo 'One';
    }
    else if ($i == 2){
        echo 'Two';
    }
    else if ($i == 3){
        echo 'Three';
    }
    else if ($i == 4){
        echo 'Four';
    }
    else if ($i == 5){
        echo 'Five';
    }
    else if ($i == 6){
        echo 'Six';
    }
    else if ($i == 7){
        echo 'Seven';
    }
    else if ($i == 8){
        echo 'Eight';
    }
    else if ($i == 9){
        echo 'Nine';
    }
    else if ($i == 10){
        echo 'Ten';
    }
    echo '</li>';
}
echo '</ul>';
?>