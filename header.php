<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes"/>
    <title>Vespas Handball</title>
    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">

</head>
<body>

<header class="header">
    <a href="<?= get_home_url(); ?>" class="header-logo">
        <img src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="">
    </a>

    <!-- <nav class="header-menu">
        <a href="#">équipes</a>
        <a href="#">le club</a>
        <a href="#">photos</a>
        <a href="#">inscription</a>
        <a href="#">contact</a>
        <a href="#">partenaires</a>
    </nav> -->


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

</header>

<main class="main">