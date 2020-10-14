<?php
echo '<ul>'; 
// use DirectoryIterator to list all files in the 'public' folder
foreach (new DirectoryIterator('../public') as $fileInfo) {

    if // ignore dotfiles
    ($fileInfo->isDot()) continue;
    //print file names as an unordered list, and make each list item a link to the relevant file
    echo '<li>' . '<a href=' . $fileInfo->getFilename() . '>' .$fileInfo->getFilename() . '</a></li>';
}

echo '</ul>';
?>