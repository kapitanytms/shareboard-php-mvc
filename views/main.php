<!--Created by PhpStorm.-->
<!--User: Tamas-->
<!--Date: 2018-03-04-->
<!--Time: 4:36 PM-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shareboard</title>
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="#">Shareboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="<?php echo ROOT_URL;?>">Home</a>
                </li>
                <li class="nav-item active">
                    <a href="<?php echo ROOT_URL;?>shares">Shares</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="<?php echo ROOT_URL;?>users/login">Login</a>
                </li>
                <li class="nav-item active">
                    <a href="<?php echo ROOT_URL;?>users/register">Register</a>
                </li>
            </ul>
        </div>
    </nav>
    <main role="main" class="container">
        <div class="row">
            <?php require($view); ?>
        </div>
    </main>
</body>
</html>