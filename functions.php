<?php
/* ==========================================================
   functions.php – SPOLOČNÝ SÚBOR
   Meniť len po dohode. Každý pridáva len svoj blok.
   ========================================================== */

// --- Nastavenie témy (menu, title, obrázky) ---
function brutalism_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'hlavne-menu' => 'Hlavné menu',
    ]);
}
add_action('after_setup_theme', 'brutalism_setup');


// --- Načítanie CSS a JS ---
function brutalism_scripts() {
    $uri = get_template_directory_uri();

    // Bootstrap (spoločný pre všetkých)
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css', [], '5.3.8');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js', [], '5.3.8', true);

    // Spoločné CSS a JS
    wp_enqueue_style('brutalism-base', $uri . '/css/base.css', ['bootstrap'], '1.0');
    wp_enqueue_script('brutalism-main', $uri . '/js/main.js', [], '1.0', true);

    // ---------- HLAVNÁ STRÁNKA (kolega) ----------
    if (is_front_page()) {
        wp_enqueue_style('brutalism-domov', $uri . '/css/domov.css', ['brutalism-base'], '1.0');
        wp_enqueue_script('brutalism-domov', $uri . '/js/domov.js', [], '1.0', true);
    }

    // ---------- STRÁNKA KARTY (ty) ----------
    if (is_page('karty')) {
        wp_enqueue_style('brutalism-font', 'https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap', [], null);
        wp_enqueue_style('brutalism-karty', $uri . '/css/karty.css', ['bootstrap'], filemtime(get_template_directory() . '/css/karty.css'));
    }
}
add_action('wp_enqueue_scripts', 'brutalism_scripts');


// --- Vlastné funkcie (každá v samostatnom súbore v inc/) ---
require_once get_template_directory() . '/inc/karta.php';


// --- Vypnutie Gutenbergu (pracujeme v kóde) ---
add_filter('use_block_editor_for_post', '__return_false');
add_filter('use_block_editor_for_post_type', '__return_false');
