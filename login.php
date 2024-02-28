<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles/common.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <!-- HEADER -->
    <?php include_once './partials/header.php' ?>

    <!-- LOGIN -->
    <div class="login">
        <form action="">
            <h1>სისტემაში შესვლა</h1>
            <label for="email">Email</label>
            <input type="text" name="email">

            <label for="password">Password</label>
            <input type="password" name="password">

            <button type="submit">შესვლა</button>
        </form>
        <div class="login-text">
            <p>თუ არ ხართ რეგისტრირებული?</p>
            <p>რეგისტრაციის გავლა შეგიძლიათ აქ <a href="./register.php">რეგისტრაცია</a></p>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include './partials/footer.php' ?>
</body>

</html>