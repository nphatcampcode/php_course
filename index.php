<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP COURSE</title>
</head>

<body>
    <form action="index.php" method="get">
        Enter your name:<input type="text" name="name">
        
        <br>
        Enter your age:<input type="number" name="age">
        <input type="submit">
    </form>
    <br>
    Your name is <?php echo $_GET["name"] ?>
    <br>
    Your name age <?php echo $_GET["age"] ?>






</body>

</html>