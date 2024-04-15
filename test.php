<?php
require 'connect.php';
$query = "SELECT * FROM exercises WHERE subject = 'History' and variant = 1";
$stmt = mysqli_query($link, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="check.php" method='post'>
        <?php
        $number = 0;
        while ($result = mysqli_fetch_assoc($stmt)) {
        ?>
            <div class="ex">
                <h1><?php echo ($result['title'])  ?></h1>

                <?php
                echo ($result['text']);
                ?>
                <input type="text" name='<?php echo ($number); $number+=1; ?>' placeholder="Введите ответ">
            </div>
        <?php
        }
        ?>
    <button type='submit'>Проверить</button>
    </form>
</body>

</html>