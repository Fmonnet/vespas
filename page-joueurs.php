<?php

/**
 * Template Name: Listing des joueurs
 **/


$query = new WP_Query();

$all_pages = $query->query(array('post_type' => 'page', 'posts_per_page' => -1));

$page_actuelle = $post->ID;

// Filtre les enfants de la page actuelle
$joueurs = get_page_children($page_actuelle, $all_pages);
get_header();
?>

    <section class="title">
        <button id="burger" class="burger">
            <i class="material-icons">menu</i>
        </button>

        <h1><?php echo the_title(); ?></h1>
    </section>

    <div class="joueurs">

        <?php foreach ($joueurs as $joueur): ?>

            <a href="#" class="card">

                <div class="card-image">
                    <?= get_the_post_thumbnail($joueur->ID); ?>

                    <div class="card-description">
                        <?php $metas = get_post_meta($joueur->ID); ?>
<<<<<<< HEAD
                        <?php preg_match("#[0-9]{4}#", $metas['date'][0], $result);
                        var_dump($result); ?>
=======
                        <?php
                        preg_match("#[0-9]{4}#", $metas['date'][0], $result);
                        $annee = $result[0];
                        ?>

>>>>>>> origin/master

                        <span><i class="material-icons cake">cake</i><span
                                class="text-description"><?= $annee; ?></span></span>
                        <span><i class="material-icons">vertical_align_top</i><span
                                class="text-description"><?= $metas['taille'][0]; ?></span></span>
                        <span><i class="material-icons">pan_tool</i><span
                                class="text-description"><?= $metas['lateralite'][0]; ?></span></span>
                        <span><i class="material-icons">accessibility</i><span
                                class="text-description"><?= $metas['position'][0]; ?></span></span>
                    </div>
                </div>

                <div class="card-content">
                    <h3><?= $joueur->post_title; ?></h3>

                    <p>Lorem ipsum dolor sit amet.</p>
                </div>

            </a>

        <?php endforeach; ?>

    </div>

<?php get_footer(); ?>