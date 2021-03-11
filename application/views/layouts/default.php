<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
    <link rel="stylesheet" href="../application/lib/main.css"> <!-- Подключили  главный css файл -->
    <link rel="preconnect" href="https://fonts.gstatic.com"> <!-- Подключили шрифты -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- Подключили шрифты -->
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="fixing-container">
                <div class="logo"><p>CRINGE ELECTRONICS</p></div>
                <div class="navbar">
                    <a href="/">MAIN</a>
                    <a href="/catalog/show">CATALOG</a>
                    <a href="/account/login">LOGIN</a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="fixing-container">
                <?=$content?>
            </div>
        </div>
        <div class="footer">
            <div class="fixing-container">
                <div class="footer-content">
                    <p>© 1999-2021 Cringe-Electronics GmbH Germany, A Burda Digital company belonging to Hubert Burda Media.</p>
                    <p><? echo date("d-m-Y") ?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>