<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <?php include 'header.inc'; ?>
    <form method="post" action="process.php">
        <label for="username">Username:</label>
        <input  id="username" type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input id="password" type="password" name="password" required><br>

        <input type="hidden" name="token" value="abc123">
        <input type="submit" value="Login">
    </form>
    <?php include 'footer.inc'; ?>
</body>
</html>