<?php
    function myFunction1(){
        error_reporting(0);
        $st1 = $_POST['st1'];
        $st2 = $_POST['st2'];
        $year = $_POST['year'];
        if ($year==1){
            $sum= ($st1+$st2)/2;
        } else{ 
            $sum=($st1+$st2*2)/3;
        }
        return $sum;
    }
    $kq=myFunction1();
    function myFunction2($kq) {
        if ($kq > 9) {
            $xl = "Xuất sắc";
        } elseif ($kq > 8) {
            $xl = "Giỏi";
        } elseif ($kq > 7) {
            $xl = "Khá";
        } elseif ($kq > 6) {
            $xl = "Trung bình";
        } else {
            $xl = "Yếu";
        }
        return $xl;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        margin: 0;
    }

    form {
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        background: rgb(106, 207, 106);
    }

    input {
        margin: 5px;
    }

    select {
        margin: 5px;
        padding: 2px;
    }

    #diem {
        display: inline;
        padding: 4px;
        border: 1px solid #000;
    }

    #xeploai {
        display: inline;
        padding: 4px;
        border: 1px solid #000;
    }

    button {
        margin: 10px 0px 10px 60px;
    }

    button:hover {
        background-color: rgb(106, 207, 106);
    }

    h2 {
        color: blue;
    }
    
    h3 {
        color: red;
    }
</style>

<body>
    <form action="#" method="post">
        <h2>BANG DIEM CUA EM</h2>
        Semester1: <input type="number" name="st1" id="semester1" value="<?php echo $_POST['st1'] ?>"> <br>
        Semester2: <input type="number" name="st2" id="semester2" value="<?php echo $_POST['st2'] ?>"> <br>
        Year: <select name="year" id="Year" >
            <option value="1">1</option>
            <option value="2">2</option>
        </select><br>
        <p>Summarise: <?php error_reporting(0); echo $kq;?></p>
        <h3>Xếp loại: <?php error_reporting(0); echo myFunction2($kq);?></h3>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
