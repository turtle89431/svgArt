<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    echo "hi";
    $myfile = fopen("svg1.svg", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("svg1.svg"));
    fclose($myfile);

    ?>
</body>
</html>