<?php
/* KARTA – vzhľad jednej karty
   $obratene = true → obrázok je vpravo a text vľavo */

function karta($udaje, $obratene = false) {
    $d = wp_parse_args($udaje, [
        'nazov'   => '',
        'rok'     => '',
        'miesto'  => '',
        'obrazok' => '',
        'mapa'    => '',
        'info'    => '',
    ]);

    $obrazok = get_template_directory_uri() . '/images/karty/' . $d['obrazok'];
    $trieda  = $obratene ? 'karta karta--obratena' : 'karta';

    // Mapa: funguje aj s celým <iframe> z Google Maps, aj so samotným odkazom
    $mapa = $d['mapa'];
    if (stripos($mapa, '<iframe') !== false && preg_match('/src="([^"]+)"/i', $mapa, $m)) {
        $mapa = $m[1];
    }
    $mapa = esc_url($mapa);
    ?>
    <article class="<?php echo $trieda; ?>">

        <div class="karta__horna">
            <div class="karta__obrazok">
                <img src="<?php echo esc_url($obrazok); ?>"
                     alt="<?php echo esc_attr($d['nazov']); ?>">
            </div>

            <div class="karta__text">
                <h3 class="karta__nazov"><?php echo esc_html($d['nazov']); ?></h3>
                <?php if ($d['rok']) : ?>
                    <p class="karta__riadok"><?php echo esc_html($d['rok']); ?></p>
                <?php endif; ?>
                <?php if ($d['miesto']) : ?>
                    <p class="karta__riadok"><?php echo esc_html($d['miesto']); ?></p>
                <?php endif; ?>
                <?php if ($mapa) : ?>
                    <iframe class="karta__mapa" src="<?php echo $mapa; ?>" loading="lazy"></iframe>
                <?php endif; ?>
            </div>
        </div>

        <?php if ($d['info']) : ?>
            <div class="karta__info">
                <p><?php echo esc_html($d['info']); ?></p>
            </div>
        <?php endif; ?>

    </article>
    <?php
}