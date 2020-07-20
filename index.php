<!DOCTYPE html>

<?php
require_once "ViewRouter.php";

ViewRouter::config("base_path", "/femboy-hooters/");
?>

<html lang="en">

    <head>

        <title>Femboy Hooters | Official Website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.9">
        <meta name="description" content="A Hooters restaurant entirely staffed by femboys. It originally refers to a series of memes exploring the concept of establishing a Hooters restaurant staffed by feminine crossdressing males. But now it has become very popular on the internet.">
        <meta name="theme-color" content="#f47a39"/>
        <link rel="shortcut icon" type="image/x-icon" href="<?= ViewRouter::getFullBasePath() ?>favicon.ico">

        <!-- Libraries, Assets and Fonts -->
        <link href="<?= ViewRouter::getFullBasePath() ?>assets/css/style.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;600&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/2213_RC01/embed_loader.js"></script>

        <!-- Open Graph -->
        <meta property="og:locale" content="en_US">
        <meta property="og:title" content="Femboy Hooters | Official Website">
        <meta property="og:url" content="https://femboy-hooters-preview.hamsterlabs.de/">
        <meta property="og:site_name" content="Femboy Hooters">
        <meta property="og:type" content="website">
        <meta property="og:image" content="<?= ViewRouter::getFullBasePath() ?>assets/img/restaurant.jpg">

        <meta property="og:description" content="A Hooters restaurant entirely staffed by femboys. It originally refers to a series of memes exploring the concept of establishing a Hooters restaurant staffed by feminine crossdressing males. But now it has become very popular on the internet.">

    </head>

    <body>

        <?php ViewRouter::run() ?>

        <?php include "components/navbar.php" ?>

        <?php include "components/footer.php" ?>

    </body>

</html>

<script src="<?= ViewRouter::getFullBasePath() ?>assets/js/index.js"></script>

<script>
    AOS.init({
        duration: 500,
        offset: 80,
        once: true,
    });
</script>