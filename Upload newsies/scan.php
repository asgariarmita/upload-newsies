<?php

function show_sub_files_and_folders($ad) {
    $all = scandir($ad);
    
    echo "<ul>";
foreach($all as $sub) {
    if ($sub != "." && $sub != "..") {
        if (is_file($ad . "/" . $sub)) {
            echo "<li>";
            echo "file: $sub <br>";
            echo "</li>";
        }
        else if (is_dir($ad . "/" . $sub)) {
            echo "<li>";
            echo "folder: $sub <br>";
            echo "<ul>";
            show_sub_files_and_folders($ad . "/" . $sub);
            echo "</ul>";
            echo "</li>";
        }
    }
}
echo "</ul>";

}


$address = "C:\Users\armit\OneDrive\Desktop";
$all_files_and_directories = scandir($address);


show_sub_files_and_folders($address);
// echo "<ul>";
// foreach($all_files_and_directories as $thing) {
//     if ($thing != "." && $thing != "..") {
//         // If file
//         if (is_file($address . "/" . $thing)) {
//             echo "<li>";
//             echo "file: $thing <br>";
//             echo "</li>";
//         }
//         // If Folder (folder = directory = dir)?
//         else if (is_dir($address . "/" . $thing)) {
//             echo "<li>";
//             echo "folder: $thing <br>";
//             echo "<ul>";
//             $sub_files_and_folders = scandir($address . "/" . $thing);
//             foreach($sub_files_and_folders as $subthing) {
//                 echo "<li>";
//                 echo "sub: $subthing";
//                 echo "</li>";
//             }
//             echo "</ul>";
//             echo "</li>";
//         }
//     }
echo "</ul>";
