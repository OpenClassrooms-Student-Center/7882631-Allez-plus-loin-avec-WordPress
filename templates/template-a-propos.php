<?php
/**
 * Template Name: template à propos
 */

get_header();
?>

<main id="apropos">

    <?php
        echo do_shortcode('[banniere-titre titre="À propos de BricoTips" src="http://localhost/bricotips/wp-content/uploads/2022/11/14684085.webp"]');
    ?>

    <section id="quisuisje">
        <h2>Qui suis-je&nbsp;?</h2>
        <div class="text">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi delectus odit omnis quam sequi
                soluta. Amet animi consequatur doloremque et exercitationem, fugit labore nam quo quod rem soluta,
                velit!</p>
            <p>Dolor, optio, quos? Alias, aliquid amet asperiores atque consequuntur cupiditate dolorum mollitia, non
                odit porro praesentium quaerat quo rem unde vel? Dolorum error laudantium nobis odio officia optio quis
                tempore!</p>
        </div>
        <div class="image">
            <img src="<?= get_stylesheet_directory_uri()."/images/autor.jpg" ?>">
        </div>
    </section>
    <section id="bricolage">
        <h2>Notre passion commune</h2>
        <div class="image">
            <img src="<?= get_stylesheet_directory_uri()."/images/brico.jpg" ?>">
        </div>
        <div class="text">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium at autem debitis earum fugiat
                incidunt laborum omnis saepe. Aperiam culpa earum enim incidunt ipsa molestiae nihil quae quasi ratione
                sequi!</p>
            <p>Cupiditate esse eveniet explicabo molestias mollitia. Eum iure quam qui quos repudiandae? Aliquam,
                aperiam assumenda consequatur deserunt error fugiat illum nisi nostrum perferendis praesentium
                repellendus, repudiandae sed ut voluptate, voluptatem.</p>
        </div>
    </section>
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
