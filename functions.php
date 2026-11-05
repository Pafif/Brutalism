<?php
// Tento subor len nacita CSS styl, fonty a JavaScript.
// V nom nemusis nic menit.

function prazdna_nacitaj() {
  wp_enqueue_style('prazdna-fonty', 'https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Oswald:wght@400;600&display=swap');
  wp_enqueue_style('prazdna-style', get_stylesheet_uri());
  wp_enqueue_script('prazdna-script', get_template_directory_uri() . '/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'prazdna_nacitaj');
