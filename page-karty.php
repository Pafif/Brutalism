<?php
/* STRÁNKA S KARTAMI
   Použije sa automaticky pre stránku so slugom "karty".
   Kartu vykresľuje funkcia karta() zo súboru inc/karta.php. */
get_header();

// Každá karta = jeden záznam. Pridaj ďalšiu skopírovaním bloku [ ... ],
$karty = [
    [
        'nazov'   => 'Prvá budova',
        'rok'     => '1965',
        'miesto'  => 'Bratislava',
        'obrazok' => 'prva.jpg',   // súbor v images/karty/
        'mapa'    => '',           // sem odkaz z Google Maps (Vložiť mapu → src)
        'info'    => 'Tu je dlhší text o danej budove.',
    ],
    [
        'nazov'   => 'Druhá budova',
        'rok'     => '1972',
        'miesto'  => 'Košice',
        'obrazok' => 'druha.jpg',
        'mapa'    => '',
        'info'    => 'Tu je dlhší text o druhej budove.',
    ],
];
?>

<main class="container">
    <div class="row row-cols-1 row-cols-xl-2 g-4">
        <?php foreach ($karty as $k) : ?>
            <div class="col">
                <?php karta($k); ?>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php get_footer(); ?>
