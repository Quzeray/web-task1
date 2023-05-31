<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        .form-control:focus {
            border-color: #1a1e21 !important;
            box-shadow: 0 0 0 0.25rem rgb(66 70 73 / 50%) !important;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="http://localhost/web-task1/index.php">РћР±СЉСЏРІР»РµРЅРёСЏ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/web-task1/index.php">Р“Р»Р°РІРЅР°СЏ СЃС‚СЂР°РЅРёС†Р°</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/web-task1/registration/registration.php">Р РµРіРёСЃС‚СЂР°С†РёСЏ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/web-task1/login/login.php">РђРІС‚РѕСЂРёР·Р°С†РёСЏ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/web-task1/announcements/announcements.php">РЎРїРёСЃРѕРє РѕР±СЉСЏРІР»РµРЅРёР№</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/web-task1/login/logout.php">Р’С‹С…РѕРґ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?= $content ?>
    </div>
</body>

</html>