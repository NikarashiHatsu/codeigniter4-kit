<!DOCTYPE html>
<html lang="en" class="bg-slate-100" data-theme="<?= env('app.theme') ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= env('app.name') ?></title>
    <link rel="shortcut icon" href="<?= base_url('icon.svg') ?>">
    <link rel="stylesheet" href="<?= base_url('css/app.css') ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <script src="<?= base_url('js/app.js') ?>" defer></script>
    <script src="<?= base_url('js/app-non-defer.js') ?>"></script>
</head>
<body class="font-display antialiased text-base-content">
    <div class="max-w-md py-12 mx-auto">
        <?= $this->renderSection('content') ?>
    </div>
</body>
</html>