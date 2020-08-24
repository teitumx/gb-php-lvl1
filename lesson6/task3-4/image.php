<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    include('main.php');
    $image = mysqli_fetch_assoc($result);
    echo '<img src="URL" alt="альтернативный текст">'
    ?>
    <form action="" method="POST">
        Имя: <input type="text" name="name" placeholder=" Первое число">
        Дата: <input type="date" name="date" placeholder="Второе число">
        Комментарий: <textarea name="comment"></textarea>
        <input type="submit">
        </select>
    </form>
</body>

</html>