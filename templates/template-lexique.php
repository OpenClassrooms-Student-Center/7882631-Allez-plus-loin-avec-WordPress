<?php
/**
 * Template Name: template lexique
 */


$definitions = array(
    array(
            'titre' => 'Abattant',
            'description' => 'Châssis de fenêtre s’ouvrant horizontalement.'
    ),
    array(
        'titre' => 'Apprêt',
        'description' => 'Couche de peinture ou de papier peint posé sur un mur pour en améliorer l’aspect final.'
    ),
    array(
        'titre' => 'Béton',
        'description' => 'Agrégat de sable, de ciment et d’eau. Armé, il est coulé sur armature métallique. Cellulaire, il comporte des milliers de bulles qui lui confèrent une très bonne isolation et solidité.'
    ),
    array(
        'titre' => 'Chaume',
        'description' => 'Matériau de couverture fait de paille de seigle, de roseau, etc.'
    ),
    array(
        'titre' => 'Drain',
        'description' => 'Dispositif enterré destiné à capter les eaux souterraines.'
    ),
    array(
        'titre' => 'Entrait',
        'description' => 'Pièce de charpente horizontale joignant les arbalétriers.'
    ),
    array(
        'titre' => 'Greffer',
        'description' => 'Remplacer la partie endommagée d’une pièce de bois par un matériau sain.'
    ),
    array(
        'titre' => 'Lambourde',
        'description' => 'Poutre fixée le long d’un mur pour recevoir des solives sur lesquelles sont clouées les lames d’un parquet.'
    ),
    array(
        'titre' => 'Mortaise',
        'description' => 'Entaille faite dans une pièce de bois pour recevoir le tenon d’une autre pièce.'
    ),
);

get_header();
?>


<main id="lexique">

    <h1>Lexique du bricolage</h1>
    <section>
        
    <?php

        foreach($definitions as $definition){
            get_template_part("template-parts/bloc-lexique",null,$definition);
        }

    ?>

    </section>

</main><!-- #site-content -->
<script>
    const mots = document.querySelectorAll("#lexique .mot");
    mots.forEach(mot => {
        mot.addEventListener("click", (e) => {
            if (!mot.classList.contains("open")) {
                mots.forEach(m => {
                    m.classList.remove("open");
                })
                mot.classList.add("open");
            } else mot.classList.remove("open");
        })
    })
</script>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
