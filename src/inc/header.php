<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title><?= $title ?? 'Home' ?></title>
    <link rel="stylesheet" href=<?= 'css/' . ($style ?? 'index.css') ?>>
    <script defer src=<?= 'js/' . ($script ?? 'index.js')  ?>></script>
</head>
<body>
<main>
<?php flash() ?>
