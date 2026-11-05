<?php
/*
Template Name: Karty - Albania

Použije sa automaticky pre stránku s rovnakým slugom ako názov súboru,
alebo sa dá vybrať ručne: Atribúty stránky → Šablóna.
*/
get_header();

$karty = [
    [
        'nazov'   => 'Lorem ipsum',
        'rok'     => '9999',
        'miesto'  => 'Lorem ipsum',
        'obrazok' => 'snp.webp',
        'mapa'    => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d64719923.54705329!2d-153.44326676708977!3d-8.082030340250096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2spl!4v1793872013614!5m2!1ssk!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>',
        'info'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget consequat orci. Donec interdum eget justo ac tincidunt. Ut in erat quis mi consequat aliquam. Sed id ullamcorper justo. Proin luctus id erat at ultrices. Proin eu arcu eget est fermentum suscipit. Sed ac vehicula urna. Aenean cursus risus at neque venenatis, et consequat odio mollis. Suspendisse sagittis nulla orci, et aliquam felis posuere eu. Ut ac malesuada lacus. Mauris facilisis bibendum risus, ut ultricies tortor varius et. Duis id ante justo. Proin et orci id eros commodo fringilla sit amet in justo.',
    ],
    [
        'nazov'   => 'Lorem ipsum',
        'rok'     => '9999',
        'miesto'  => 'Lorem ipsum',
        'obrazok' => 'snp.webp',
        'mapa'    => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d64719923.54705329!2d-153.44326676708977!3d-8.082030340250096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2spl!4v1793872013614!5m2!1ssk!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>',
        'info'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget consequat orci. Donec interdum eget justo ac tincidunt. Ut in erat quis mi consequat aliquam. Sed id ullamcorper justo. Proin luctus id erat at ultrices. Proin eu arcu eget est fermentum suscipit. Sed ac vehicula urna. Aenean cursus risus at neque venenatis, et consequat odio mollis. Suspendisse sagittis nulla orci, et aliquam felis posuere eu. Ut ac malesuada lacus. Mauris facilisis bibendum risus, ut ultricies tortor varius et. Duis id ante justo. Proin et orci id eros commodo fringilla sit amet in justo.',
    ],
    [
        'nazov'   => 'Lorem ipsum',
        'rok'     => '9999',
        'miesto'  => 'Lorem ipsum',
        'obrazok' => 'snp.webp',
        'mapa'    => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d64719923.54705329!2d-153.44326676708977!3d-8.082030340250096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2spl!4v1793872013614!5m2!1ssk!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>',
        'info'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget consequat orci. Donec interdum eget justo ac tincidunt. Ut in erat quis mi consequat aliquam. Sed id ullamcorper justo. Proin luctus id erat at ultrices. Proin eu arcu eget est fermentum suscipit. Sed ac vehicula urna. Aenean cursus risus at neque venenatis, et consequat odio mollis. Suspendisse sagittis nulla orci, et aliquam felis posuere eu. Ut ac malesuada lacus. Mauris facilisis bibendum risus, ut ultricies tortor varius et. Duis id ante justo. Proin et orci id eros commodo fringilla sit amet in justo.',
    ],
    [
        'nazov'   => 'Lorem ipsum',
        'rok'     => '9999',
        'miesto'  => 'Lorem ipsum',
        'obrazok' => 'snp.webp',
        'mapa'    => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d64719923.54705329!2d-153.44326676708977!3d-8.082030340250096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2spl!4v1793872013614!5m2!1ssk!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>',
        'info'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget consequat orci. Donec interdum eget justo ac tincidunt. Ut in erat quis mi consequat aliquam. Sed id ullamcorper justo. Proin luctus id erat at ultrices. Proin eu arcu eget est fermentum suscipit. Sed ac vehicula urna. Aenean cursus risus at neque venenatis, et consequat odio mollis. Suspendisse sagittis nulla orci, et aliquam felis posuere eu. Ut ac malesuada lacus. Mauris facilisis bibendum risus, ut ultricies tortor varius et. Duis id ante justo. Proin et orci id eros commodo fringilla sit amet in justo.',
    ],
];
?>

<main class="container">

    <!-- NADPIS STRÁNKY -->
    <header class="nadpis-stranky">
        <h1 class="nadpis-stranky__text">Albania</h1>

        <div class="vlajka">
            <svg viewBox="0 0 3 2" role="img" aria-label="Vlajka: Albania">
                <rect width="3" height="2" fill="#e41e20"/>
                <circle cx="1.5" cy="1" r="0.45" fill="#000000"/>
            </svg>
            <span class="vlajka__roky">1946-1992</span>
        </div>
    </header>

    <!-- KARTY -->
    <div class="row row-cols-1 g-4">
        <?php foreach ($karty as $i => $k) : ?>

            <div class="col">
                <?php karta($k, $i % 2 === 1); ?>
            </div>

            <?php if ($i < count($karty) - 1) : ?>
                <div class="col"><hr class="oddelovac"></div>
            <?php endif; ?>

        <?php endforeach; ?>
    </div>

</main>

<?php get_footer(); ?>
