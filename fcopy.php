<?php
$file = "sumit.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Attempt to rename the file
    if(rename($file, "orav1.txt")){
        echo "File renamed successfully.";
    } else{
        echo "ERROR: File cannot be renamed.";
    }
} else{
    echo "ERROR: File does not exist.";
}
?>