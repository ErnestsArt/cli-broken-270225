<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">

        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>

        <label for="level">Level</label>
        <select name="level" id="level">
            <option value="advanced">Advanced</option>
            <option value="beginner">Beginner</option>
            <option value="por">Pro</option>
        </select>
        <br>

        <p>gribi sanemt info?</p>
        <label for="radio">ja</label>
        <input type="radio" name="yes" id="yes">
        <label for="radio">ne</label>
        <input type="radio" name="yes" id="yes">

        <br>
        <input type="submit" value="Nosūtīt">
    </form>
    
    <a href="index.php">Next Page</a>
</body>
</html>