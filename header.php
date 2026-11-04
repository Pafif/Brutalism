<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_template_part('template-parts/docasne-menu'); // DOČASNÉ MENU – neskôr zmazať ?>

<header class="site-header border-bottom py-3 mb-4">
    <div class="container d-flex flex-wrap justify-content-between align-items-center gap-3">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="fw-bold text-decoration-none">
            <?php bloginfo('name'); ?>
        </a>

        <?php $karty = get_page_by_path('karty'); ?>
        <?php if ($karty) : ?>
            <a href="<?php echo esc_url(get_permalink($karty)); ?>" class="fw-bold text-decoration-none">Karty</a>
        <?php endif; ?>

        <?php
        wp_nav_menu([
            'theme_location' => 'hlavne-menu',
            'container'      => 'nav',
            'menu_class'     => 'd-flex flex-wrap gap-3 list-unstyled m-0',
            'fallback_cb'    => false,
        ]);
        ?>
    </div>
</header>
