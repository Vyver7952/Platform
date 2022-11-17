<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>

    <style>
        label {
            display: inline-block;
            width: 70px;
            text-align: left;
        }

        .submit {
            margin-left: 74px;
        }
    </style>
</head>

<body>
    <form action="Latihan 4.php" method="post">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Username">
        </div>
        <br>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password">
        </div>
        <br>
        <input class="submit" type="submit" value="Login">
    </form>
</body>

</html>