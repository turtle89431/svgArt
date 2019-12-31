<?php
try {
    //code...
    $svg1 = file_get_contents("svg1.svg");
} catch (\Throwable $th) {
    //throw $th;
    echo $th
}
