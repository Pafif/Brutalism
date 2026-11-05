<?php
// Tento subor rozhodne, ktoru stranku ukazat.
// Adresa ?krajina=poland ukaze subor poland.php atd.

get_header();

// zistime, co je v adrese za ?krajina=
if (isset($_GET['krajina'])) {
  $krajina = $_GET['krajina'];
} else {
  $krajina = '';
}

if ($krajina == 'czechoslovakia') {
  get_template_part('czechoslovakia');
} elseif ($krajina == 'poland') {
  get_template_part('poland');
} elseif ($krajina == 'ussr') {
  get_template_part('ussr');
} elseif ($krajina == 'east-germany') {
  get_template_part('east-germany');
} elseif ($krajina == 'yugoslavia') {
  get_template_part('yugoslavia');
} elseif ($krajina == 'hungary') {
  get_template_part('hungary');
} elseif ($krajina == 'romania') {
  get_template_part('romania');
} elseif ($krajina == 'albania') {
  get_template_part('albania');
} elseif ($krajina == 'mongolia') {
  get_template_part('mongolia');
} elseif ($krajina == 'bulgaria') {
  get_template_part('bulgaria');
} else {
  get_template_part('domov');
}

get_footer();
