<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP Caculator</title>

<body>
    <form action="simple_caculator_php.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit">
    </form>
    Total: <?php echo $_GET["num1"] + $_GET["num2"]  ?>

</body>

</head>

</html>