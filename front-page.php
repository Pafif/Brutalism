<?php
/* HLAVNÁ STRÁNKA */
get_header(); ?>

<main>
    <div class="uvod">

        <h1 class="uvod_nadpis">Brutalism</h1>

        <?php
            $budova = get_template_directory() . '/images/budova.webp';
            $verzia = file_exists($budova) ? filemtime($budova) : 1;
        ?>
        <img class="uvod_budova"
            src="<?php echo esc_url(get_template_directory_uri() . '/images/budova.webp?v=' . $verzia); ?>"
            alt="Brutalistická budova">

        <!-- schodisko (papier je bez textu) + text, ktorý sa dá meniť tu v kóde -->
        <div class="uvod_schodisko">
            <img class="uvod_obrazok"
                 src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hero-stairs.webp"
                 alt="Betónové schodisko">
            <p class="uvod_text">
                This page is for lovers of brutalism. Brutalism evokes a feeling of depression, disgust, and the like in people. But some people love and admire it. Here you will find brutalism in different countries, the year of construction, the location of specific buildings, and you will also learn something about them.
            </p>
        </div>

    </div>
</main>

<?php get_footer(); ?>
