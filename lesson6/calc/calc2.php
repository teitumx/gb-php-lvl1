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
    <form name="operation " action="" method="POST">
        <input type="text" name="num1" placeholder=" Первое число">
        <input type="text" name="num2" placeholder="Второе число">

        <input name="operation" value="Сложение" type="submit">
        <input name="operation" value="Вычитание" type="submit">
        <input name="operation" value="Умножение" type="submit">
        <input name="operation" value="Деление" type="submit">
        <br>
    </form>





    <?php
    if (isset($_POST['num1'])) {
        $num1 = $_POST['num1'];
        if (isset($_POST['num2'])) {
            $num2 = $_POST['num2'];
        }
        if (isset($_POST['operation'])) {

            $operation = $_POST['operation'];
            switch ($operation) {
                case "Сложение":
                    echo "Сложение чисел {$num1} и {$num2} равняется " . ($num1 + $num2);
                    break;
                case "Вычитание":
                    echo "Разность чисел {$num1} и {$num2} равняется " . ($num1 - $num2);
                    break;
                case "Умножение":
                    echo "Умножение числа {$num1} на {$num2} равняется " . ($num1 * $num2);
                    break;
                case "Деление":
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