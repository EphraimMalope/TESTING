<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration was Successful</title>
</head>
<body>
    <h1>Congratulations!</h1>
    <p>Welcome <?php echo isset($_GET['username']) ? $_GET['username'] : ''; ?>. You have successfully registered.</p>
</body>
</html>