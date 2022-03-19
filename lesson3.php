<?php

    function testLesson3(){
        global $diemTB;
        global $errors;
        if (isset($_POST['btn_submit'])) {
            $userName = $_POST['username'];
            $dateDay = $_POST['birthday'];
            $num1 = $_POST['number1'];
            $num2 = $_POST['number2'];
            if ($num1 == "" || !is_numeric($num1)) {
                $errors['number1'] = "Dữ liệu không được để trống và phải là số";
            }
        
            if ($num2 == "" || !is_numeric($num2)) {
                $errors['number2'] = "Dữ liệu không được để trống và phải là số";
            }
            
            if (!isset($errors['number1']) && !isset($errors['number2'])) {
                $diemTB = ($num1 + $num2)/2;
            }
        }
    };
    testLesson3();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý form</title>
</head>
<body>
    <form action="lesson3.php" method="post">
        <h2>Tính điểm trung bình và xếp loại học lực</h2>

        <label for="">Nhập tên của bạn</label>
        <input type="text" name="username"><br><br>

        <label for="">Nhập ngày sinh</label>
        <input type="date" name="birthday"><br><br>


        <label for="">Nhập điểm môn toán</label>
        <input type="text" name="number1" value="<?= isset($num1) ? $num1 : ''?>"><br>

        <span style="color:red">
        <?= isset($errors['number1']) ? $errors['number1'] : "" ?><br><br>
        </span>

        <label for="">Nhập môn văn</label>
        <input type="text" name="number2" value="<?= isset($num2) ? $num2 : ''?>"><br>

        <span style="color:#ff0000" >
         <?= isset($errors['number2']) ? $errors['number2'] : "" ?><br><br>
        </span>

        <button type="submit" name="btn_submit">Result</button>
    </form>
    <?php 
    if($diemTB > 5) {
        echo "<h1>Đậu</h1>";
    }
    else {
        echo "<h1>Trượt</h1>";
    }
    ?>
</body>
</html>