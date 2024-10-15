<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .square {
        width: 50px;
        height: 50px;
        background-color: pink;
        margin: 10px;
        display: inline-block;
    }
</style>
<body>
    <?php
    // i là dọc
    // j là ngang 
    for ($i = 0; $i <5; $i++) {
        for($j=0;$j<5;$j++){
            echo "<div class='square'></div>";
            if($j==4){
                echo "<br>";
            }
        }
    }
    ?>