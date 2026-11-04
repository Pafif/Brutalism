<?php
/* KARTA – vzhľad jednej karty
   Použitie:  karta(['nazov' => '...', 'rok' => '...', ...]);
   Údaje: nazov, rok, miesto, obrazok, mapa, info */

function karta($udaje) {
    $d = wp_parse_args($udaje, [
        'nazov'   => '',
        'rok'     => '',
        'miesto'  => '',
        'obrazok' => '',
        'mapa'    => '',
        'info'    => '',
    ]);

    $obrazok = get_template_directory_uri() . '/images/karty/' . $d['obrazok'];
    ?>
    <div class="ramcek">
        <div class="row g-2">

            <div class="col-12 col-md-6">
                <img class="ramcek w-100 h-100 object-fit-cover"
                     src="<?php echo esc_url($obrazok); ?>"
                     alt="<?php echo esc_attr($d['nazov']); ?>">
            </div>

            <div class="col-12 col-md-6 d-flex flex-column gap-2">
                <h3 class="ramcek h5 text-center"><?php echo esc_html($d['nazov']); ?></h3>
                <p class="ramcek text-center"><?php echo esc_html($d['rok']); ?></p>
                <p class="ramcek text-center"><?php echo esc_html($d['miesto']); ?></p>

                <?php if ($d['mapa']) : ?>
                    <div class="ramcek ratio ratio-16x9 p-0">
                        <iframe src="<?php echo esc_url($d['mapa']); ?>" loading="lazy"></iframe>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-12">
                <div class="ramcek">
                    <p class="m-0"><?php echo esc_html($d['info']); ?></p>
                </div>
            </div>

        </div>
    </div>
    <?php
}
