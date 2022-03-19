<?php

    function testLesson1() {
        global $errors;
        global $num1, $num2,$num3;
        if (isset($_POST['btn_submit'])) {
            $num1 = $_POST['number1'];
            $num2 = $_POST['number2'];
            $num3 = $_POST['number3'];
        
            if ($num1 == "" || !is_numeric($num1)) {
                $errors['number1'] = "Dữ liệu không được để trống và phải là số";
            }
        
            if ($num2 == "" || !is_numeric($num2)) {
                $errors['number2'] = "Dữ liệu không được để trống và phải là số";
            }
            
            if ($num3 == "" || !is_numeric($num3)) {
                $errors['number3'] = "Dữ liệu không được để trống và phải là số";
            }
        }
    }
    testLesson1();
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
    <form action="lesson1.php" method="post">
        <h2>Kiểm tra hình tam giác</h2>

        <label for="">Nhập cạnh thứ 1</label>
        <input type="text" name="number1" value="<?= isset($num1) ? $num1 : ''?>"><br>

        <span style="color:red">
        <?= isset($errors['number1']) ? $errors['number1'] : "" ?><br><br>
        </span>

        <label for="">Nhập cạnh thứ 2</label>
        <input type="text" name="number2" value="<?= isset($num2) ? $num2 : ''?>"><br>

        <span style="color:#ff0000" >
         <?= isset($errors['number2']) ? $errors['number2'] : "" ?><br><br>
        </span>

        <label for="">Nhập cạnh thứ 3</label>
        <input type="text" name="number3" value="<?= isset($num3) ? $num3 : ''?>"><br>

        <span style="color:#ff0000">
         <?= isset($errors['number3']) ? $errors['number3'] : "" ?><br><br>
        </span>

        <button type="submit" name="btn_submit">Result</button>
    </form>

    <?php

      if (($num1 + $num2) > $num3 && ($num2 + $num3) > $num1 && ($num3 + $num1) > $num2)
       {
        echo "Đây là 1 hình tam giác";
       }
      else {
        echo "Đây không phải là 1 hình tam giác";
       }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>