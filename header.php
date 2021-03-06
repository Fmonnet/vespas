<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes"/>
    <title>Vespas Handball</title>
    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/img/favicon.png">
</head>
<body>

<header class="header">
    <div class="header-inner">
        <a href="<?= get_home_url(); ?>" class="header-logo">
            <img src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="">
        </a>
        <?php wp_nav_menu([
            'menu' => 'principal',
            'container' => false,
            'items_wrap' => '<nav class="header-menu">%3$s</nav>',
            'walker' => new MenuWalker()
        ]); ?>

        <nav class="header-contact">
            <a href="#"><i class="material-icons">smartphone</i></a>
            <a href="#"><i class="material-icons">email</i></a>
            <a href="#"><i class="material-icons">place</i></a>
        </nav>
    </div>
</header>

<main class="main">