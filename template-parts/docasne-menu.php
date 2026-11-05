<?php
/* DOČASNÉ MENU – len na preklikávanie medzi stránkami počas vývoja.
   Automaticky zobrazí všetky publikované stránky (netreba nič nastavovať).
   Na odstránenie zmaž tento súbor a riadok get_template_part(...) v header.php. */
$karty   = get_page_by_path('czsk');
$stranky = get_pages([
    'sort_column' => 'menu_order,post_title',
    'exclude'     => $karty ? [$karty->ID] : [],
]);
?>
<nav class="bg-dark py-2">
    <div class="container d-flex flex-wrap gap-3">
        <a class="text-white" href="<?php echo esc_url(home_url('/')); ?>">Domov</a>

        <?php if ($karty) : ?>
            <a class="text-white" href="<?php echo esc_url(get_permalink($karty)); ?>">CZSK</a>
        <?php else : ?>
            <a class="text-warning" href="<?php echo esc_url(admin_url('post-new.php?post_type=page')); ?>">CZSK (stránka ešte neexistuje – vytvor ju)</a>
        <?php endif; ?>

        <?php foreach ($stranky as $s) : ?>
            <a class="text-white" href="<?php echo esc_url(get_permalink($s)); ?>"><?php echo esc_html($s->post_title); ?></a>
        <?php endforeach; ?>

        <a class="text-white-50 ms-auto" href="<?php echo esc_url(admin_url()); ?>">Admin</a>
    </div>
</nav>
