<?php
/*
Template Name: Početna stranica
*/
?>
<?php get_header(); ?>
<div class="container-fluid px-0">
    <?php


    // Prikazivanje ACF polja za baner
    $image = get_field('slika');
    $bigText = get_field('veliki_text');
    $smallText = get_field('mali_text');
    $link = get_field('link');
    ?>
    <div class="image-container">
        <img src="<?php echo $image; ?>" class="img-fluid">
        <div class="text-overlay">
            <h2 class="text-big"><?php echo $bigText; ?></h2>
            <h2 class="text-small"><?php echo $smallText; ?></h2>
            <a href="<?php echo $link; ?>" class="buttons-primary">ZAKAŽITE TERMIN</a>
        </div>
    </div>
</div>
<div class="contact-fixed">
    <?php if (is_active_sidebar('sidebar')) : ?>

        <?php dynamic_sidebar('sidebar'); ?>

    <?php endif; ?>
</div>
<div class="container-fluid px-0">
    <div class="banners">
        <?php
        $image1 = get_field('image');
        $big_text = get_field('big_text');
        $title_content = get_field('title_content');
        $content = get_field('content');
        $button = get_field('button');
        ?>
        <h1><?php echo $big_text; ?></h1>
        <div class="container row justify-content-evenly">
            <div class="col-sm-12 col-md-12 col-lg-5 text-lg-end text-sm-start">
                <img src="<?php echo $image1; ?>" class="img-fluid">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5">
                <?php echo $content; ?>
                <?php
                if ($button) :
                    $button_title = $button['title'];
                    $button_url = $button['url'];
                ?>
                    <a class="buttons-secondary" href="<?php echo $button_url; ?>"><?php echo $button_title; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-0">
    <div class="banners usluge">
        <?php

        $opis_text = get_field('opis_text');
        $big_title = get_field('big_title');
        $backgroun_image = get_field('backgroun_image');
        ?>
        <p><?php echo $opis_text; ?></p>
        <h1><?php echo $big_title; ?></h1>
        <div class="space-holder">
            <div class="sticky">
                <div class="horizontal">
                    <div role="feed" class="cards">
                        <?php if (have_rows('usluge_box')) : ?>
                            <?php while (have_rows('usluge_box')) : the_row(); ?>
                                <?php
                                $image = get_sub_field('image');
                                $link_url = get_sub_field('link_url');
                                $big_title = get_sub_field('big_title');
                                $content = get_sub_field('content');
                                $color = get_sub_field('color');
                                ?>

                                <a href="<?php echo $link_url ?>" class="sample-card">
                                    <div class="image-wrapper">
                                        <img src="<?php echo $image; ?>" class="img-fluid">
                                    </div>
                                    <?php if ($color) : ?>
                                        <div class="text-wrapper black">
                                            <h3><?php echo $big_title; ?></h3>
                                            <p><?php echo $content; ?></p>
                                        </div>
                                    <?php else : ?>
                                        <div class="text-wrapper white">
                                            <h3><?php echo $big_title; ?></h3>
                                            <p><?php echo $content; ?></p>
                                        </div>
                                    <?php endif; ?>
                                </a>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?php echo $backgroun_image; ?>" class="img-fluid bg">
    </div>
</div>
<div class="container-fluid px-0">
    <div class="clients">
        <?php
        $naslov = get_field('naslov');
        $backgorund_images_clients = get_field('backgorund_images_clients');

        ?>
        <div class="container">
            <h3><?php echo $naslov; ?></h3>
        </div>
        <div class="row w-100">
            <div class="col-sm-12 col-md-12 col-lg-5 images">
                <img src="<?php echo $backgorund_images_clients; ?>" class="img-fluid" alt="<?php echo $naslov; ?>">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5 px-0 answer">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <?php if (have_rows('client')) : ?>
                            <?php $index = 0; ?>
                            <?php while (have_rows('client')) : the_row(); ?>
                                <?php
                                $ime_i_prezime = get_sub_field('ime_i_prezime');
                                $slika = get_sub_field('slika');
                                $tekst = get_sub_field('tekst');
                                $filtered_text = strip_tags($tekst);
                                ?>

                                <div class="d-flex carousel-item <?php if ($index === 0) echo 'active'; ?>">
                                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/07/Group-317.png" class="img-fluid">
                                    <div class="content d-flex flex-column">
                                        <p class="text-start"><?php echo $filtered_text; ?></p>
                                        <div class="people d-flex aling-center">
                                            <img src="<?php echo $slika; ?>" class="img-fluid">
                                            <h3><?php echo $ime_i_prezime; ?></h3>
                                        </div>
                                    </div>
                                </div>

                                <?php $index++; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="buttons-arrow">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid px-0">
    <div class="banners prednosti">
        <?php
        $imagess = get_field('image1');
        $big_text1 = get_field('big_text1');
        $title_content1 = get_field('title_content1');
        $content1 = get_field('content1');
        $button1 = get_field('button1');
        ?>
        <h2><?php echo $big_text1; ?></h2>
        <div class="container">
            <h3><?php echo $title_content1; ?></h3>
        </div>
        <div class="container row justify-content-between">
            <div class="col-sm-12 col-md-12 col-lg-5 px-0">
                <?php echo $content1; ?>
                <?php
                if ($button1) :
                    $button_title = $button1['title'];
                    $button_url = $button1['url'];
                ?>
                    <a class="buttons-secondary" href="<?php echo $button_url; ?>"><?php echo $button_title; ?></a>
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-7 px-0">
                <img src="<?php echo $imagess; ?>" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>