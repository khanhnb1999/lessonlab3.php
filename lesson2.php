
<?php 

function testLesson2() {
    global $num;
    global $message;
    global $count;
    global $result;
    if(isset($_POST['btn_submit'])) {
        $num = $_POST['number1'];
        if(isset($num) == "" || !is_numeric($num)  || $num < 0) {
            $message['number1'] = "Dữ liệu bạn nhập không phù hợp";
        }
        for($i = 0; $i < $num; $i++) {
            if($i%2 != 0) {
                $count++;
            }
        }
        $result =  "<h1>Tổng các số lẻ từ 1 đến $num là : $count</h1>";
    }
    return $result;
    
}
testLesson2();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nhâp vào số nguyên dương n</h1>

    <form action="lesson2.php" method="post">
        <label for="">Nhập số nguyên dương n</label>
        <input type="text" name="number1">

        <p style="color:red">
        <?= isset($message['number1']) ? $message['number1'] : "" ?>
        </p>
        <button type="submit" name="btn_submit">Result</button>
    </form>

    <?php
    echo $result;
    // echo "<h1>Số lẻ từ 1 đến $num là: $count</h1>";
     ?>
</body>
</html>