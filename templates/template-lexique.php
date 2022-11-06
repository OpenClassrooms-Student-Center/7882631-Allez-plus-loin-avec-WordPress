<?php
/**
 * Template Name: template lexique
 */

get_header();
?>


<main id="lexique">

    <h1>Lexique du bricolage</h1>
    <section>
        <div class="mot">
            <div class="titre">
                Abattant
                <div class="action">
                    <div class="down">&#9660;</div>
                    <div class="up">&#9650;</div>
                </div>
            </div>
            <div class="definition">
                Châssis de fenêtre s’ouvrant horizontalement.
            </div>
        </div>
        <div class="mot">
            <div class="titre">
                Apprêt
                <div class="action">
                    <div class="down">&#9660;</div>
                    <div class="up">&#9650;</div>
                </div>
            </div>
            <div class="definition">
                Couche de peinture ou de papier peint posé sur un mur pour en améliorer l’aspect final.
            </div>
        </div>
        <div class="mot">
            <div class="titre">
                Béton
                <div class="action">
                    <div class="down">&#9660;</div>
                    <div class="up">&#9650;</div>
                </div>
            </div>
            <div class="definition">
                Agrégat de sable, de ciment et d’eau. Armé, il est coulé sur armature métallique. Cellulaire, il
                comporte des milliers de bulles qui lui confèrent une très bonne isolation et solidité.
            </div>
        </div>
        <div class="mot">
            <div class="titre">
                Chaume
                <div class="action">
                    <div class="down">&#9660;</div>
                    <div class="up">&#9650;</div>
                </div>
            </div>
            <div class="definition">
                Matériau de couverture fait de paille de seigle, de roseau, etc.
            </div>
        </div>
        <div class="mot">
            <div class="titre">
                Drain
                <div class="action">
                    <div class="down">&#9660;</div>
                    <div class="up">&#9650;</div>
                </div>
            </div>
            <div class="definition">
                Dispositif enterré destiné à capter les eaux souterraines.
            </div>
        </div>
        <div class="mot">
            <div class="titre">
                Entrait
                <div class="action">
                    <div class="down">&#9660;</div>
                    <div class="up">&#9650;</div>
                </div>
            </div>
            <div class="definition">
                Pièce de charpente horizontale joignant les arbalétriers.
            </div>
        </div>
        <div class="mot">
            <div class="titre">
                Greffer
                <div class="action">
                    <div class="down">&#9660;</div>
                    <div class="up">&#9650;</div>
                </div>
            </div>
            <div class="definition">
                Remplacer la partie endommagée d’une pièce de bois par un matériau sain.
            </div>
        </div>
        <div class="mot">
            <div class="titre">
                Lambourde
                <div class="action">
                    <div class="down">&#9660;</div>
                    <div class="up">&#9650;</div>
                </div>
            </div>
            <div class="definition">
                Poutre fixée le long d’un mur pour recevoir des solives sur lesquelles sont clouées les lames d’un
                parquet.
            </div>
        </div>
        <div class="mot">
            <div class="titre">
                Mortaise
                <div class="action">
                    <div class="down">&#9660;</div>
                    <div class="up">&#9650;</div>
                </div>
            </div>
            <div class="definition">
                Entaille faite dans une pièce de bois pour recevoir le tenon d’une autre pièce.
            </div>
        </div>

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
