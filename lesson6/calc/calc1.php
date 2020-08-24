<!DOCTYPE html>
<html lang="en">
<style>

</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Task #1</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="num1" placeholder=" Первое число">
        <input type="text" name="num2" placeholder="Второе число">

        <select method="POST" name="operation">
            <option value="">Выбрать операцию</option>
            <option value="sum">Cложение</option>
            <option value="min">Вычитание</option>
            <option value="multi">Умножение</option>
            <option value="div">Деление</option>
            <input type="submit">
        </select>
    </form>


    <?php
    // echo '<br>';
    // echo '<br>';
    // var_dump($_POST);
    // var_dump($_GET);

    if (isset($_POST['num1'])) {
        $num1 = $_POST['num1'];
        if (isset($_POST['num2'])) {
            $num2 = $_POST['num2'];
        }
        if (isset($_POST['operation'])) {
            $operation = $_POST['operation'];
            switch ($operation) {
                case "sum":
                    echo "Сложение чисел {$num1} и {$num2} равняется " . ($num1 + $num2);
                    break;
                case "min":
                    echo "Разность чисел {$num1} и {$num2} равняется " . ($num1 - $num2);
                    break;
                case "multi":
                    echo "Умножение числа {$num1} на {$num2} равняется " . ($num1 * $num2);
                    break;
                case "div":
                    if ($num1 == 0 || $num2 == 0) {
                        echo "На ноль делить нельзя";
                    } else {
                        echo "Деление чила {$num1} на {$num2} равняется " . ($num1 / $num2);
                    }
                    break;
                default:
                    echo ("Error!");
                    exit();
                    break;
            }
        }
    }

    ?>
</body>

</html>