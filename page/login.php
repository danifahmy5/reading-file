<?php include_once('../function/login.php') ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">





    <link href="../public/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../public/assets/css/login.css">

    <style>
        body {
            background: url('../public/background/dragon-scales.svg');
        }

        .form-signin {
            background-color: #fff;
        }
    </style>
    <!-- Custom styles for this template -->
    <!-- <link href="signin.css" rel="stylesheet"> -->
</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto shadow-sm rounded">
        <?php if ($is_error !== '') : ?>
            <div class="alert alert-danger"><?= $is_error; ?></div>
        <?php endif ?>
        <form method="GET" action="">
            <h1 class="h3 mb-3 fw-normal">Please Sign in</h1>

            <div class="form-floating">
                <input type="text" value="<?= $username ? $username : null; ?>" name="username" class="form-control" id="floatingInput" placeholder="Masukkan username">
                <label for="floatingInput" style="width: auto;">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Masukkan password">
                <label for="floatingPassword" style="width: auto;">Password</label>
            </div>

            <div class="checkbox mb-3 text-start">
                <label>
                    <input type="checkbox" value="remember_me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; EDP RSA Bojonegoro</p>
        </form>
    </main>



</body>

</html>