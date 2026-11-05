<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); /* Bootstrap, ikony a header.css sa načítajú cez functions.php */ ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
// Krajiny v menu: slug stránky => [súbor s vlajkou, názov]
$krajiny = [
    'czsk'         => ['flag-cs.webp', 'Czechoslovakia'],
    'poland'       => ['flag-pl.webp', 'Poland'],
    'ussr'         => ['flag-su.webp', 'USSR'],
    'east-germany' => ['flag-dd.webp', 'East Germany'],
    'yugoslavia'   => ['flag-yu.webp', 'Yugoslavia'],
    'hungary'      => ['flag-hu.webp', 'Hungary'],
    'romania'      => ['flag-ro.webp', 'Romania'],
    'albania'      => ['flag-al.webp', 'Albania'],
];
$vlajky = get_template_directory_uri() . '/images/';
?>

<nav id="navbar" class="navbar navbar-dark bg-dark px-3 w-100 sticky-top">
  <div class="container-fluid flex-nowrap">

    <!-- VĽAVO: hamburger s vlajkami -->
    <div class="dropdown">
      <button class="btn btn-outline-light" type="button"
              data-bs-toggle="dropdown" aria-expanded="false" aria-label="Krajiny">
        <i class="bi bi-list fs-5"></i>
      </button>
      <ul class="dropdown-menu dropdown-coloring vlajky-menu">
        <li><a class="dropdown-item domov" href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li><hr class="dropdown-divider"></li>

        <?php foreach ($krajiny as $slug => $k) :
            $stranka = get_page_by_path($slug);    // nájde stránku podľa slugu
            if (!$stranka) continue;               // stránka ešte neexistuje → v menu sa nezobrazí
        ?>
          <li>
            <a class="dropdown-item d-flex align-items-center gap-2" href="<?php echo esc_url(get_permalink($stranka)); ?>">
              <img src="<?php echo esc_url($vlajky . $k[0]); ?>" alt="<?php echo esc_attr($k[1]); ?>">
            </a>
          </li>
        <?php endforeach; ?>

      </ul>
    </div>

    <!-- STRED: filter -->
    <div class="dropdown-center mx-auto">
      <button class="btn btn-outline-light" type="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside"
              aria-expanded="false">
        <i class="bi bi-funnel"></i> Filter
      </button>

      <div class="dropdown-menu dropdown-coloring filter-menu p-3 text-white" style="width: min(90vw, 650px);">
        <div class="row g-4 text-center">

          <!-- Zoradenie -->
          <div class="col-md-4">
            <h6>Zoradiť</h6>
            <div class="d-inline-block text-start">
              <div class="form-check">
                <input class="form-check-input zoradenie" type="radio" name="zoradenie" id="zor-stare" value="najstarsie">
                <label class="form-check-label" for="zor-stare">Od najstaršej</label>
              </div>
              <div class="form-check">
                <input class="form-check-input zoradenie" type="radio" name="zoradenie" id="zor-nove" value="najnovsie">
                <label class="form-check-label" for="zor-nove">Od najnovšej</label>
              </div>
              <div class="form-check">
                <input class="form-check-input zoradenie" type="radio" name="zoradenie" id="zor-abc" value="abeceda">
                <label class="form-check-label" for="zor-abc">Abecedne (A–Z)</label>
              </div>
            </div>
          </div>

          <!-- Dekády -->
          <div class="col-md-4">
            <h6>Dekáda</h6>
            <div class="d-inline-block text-start">
              <div class="form-check">
                <input class="form-check-input filter-check" type="checkbox" id="dek-1950" data-skupina="dekada" value="1950">
                <label class="form-check-label" for="dek-1950">50. roky</label>
              </div>
              <div class="form-check">
                <input class="form-check-input filter-check" type="checkbox" id="dek-1960" data-skupina="dekada" value="1960">
                <label class="form-check-label" for="dek-1960">60. roky</label>
              </div>
              <div class="form-check">
                <input class="form-check-input filter-check" type="checkbox" id="dek-1970" data-skupina="dekada" value="1970">
                <label class="form-check-label" for="dek-1970">70. roky</label>
              </div>
              <div class="form-check">
                <input class="form-check-input filter-check" type="checkbox" id="dek-1980" data-skupina="dekada" value="1980">
                <label class="form-check-label" for="dek-1980">80. roky</label>
              </div>
            </div>
          </div>

          <!-- Typy budov -->
          <div class="col-md-4">
            <h6>Typ budovy</h6>
            <div class="d-inline-block text-start">
              <div class="form-check">
                <input class="form-check-input filter-check" type="checkbox" id="typ-hotel" data-skupina="typ" value="hotel">
                <label class="form-check-label" for="typ-hotel">Hotel</label>
              </div>
              <div class="form-check">
                <input class="form-check-input filter-check" type="checkbox" id="typ-byty" data-skupina="typ" value="byty">
                <label class="form-check-label" for="typ-byty">Obytný dom</label>
              </div>
              <div class="form-check">
                <input class="form-check-input filter-check" type="checkbox" id="typ-kultura" data-skupina="typ" value="kultura">
                <label class="form-check-label" for="typ-kultura">Kultúrna budova</label>
              </div>
              <div class="form-check">
                <input class="form-check-input filter-check" type="checkbox" id="typ-urad" data-skupina="typ" value="urad">
                <label class="form-check-label" for="typ-urad">Administratívna</label>
              </div>
              <div class="form-check">
                <input class="form-check-input filter-check" type="checkbox" id="typ-pamatnik" data-skupina="typ" value="pamatnik">
                <label class="form-check-label" for="typ-pamatnik">Pamätník</label>
              </div>
            </div>
          </div>

        </div>

        <div class="text-center mt-3">
          <button id="filter-zrusit" type="button" class="btn btn-sm btn-outline-light">Zrušiť filter</button>
        </div>
      </div>
    </div>

    <!-- VPRAVO: jazyk -->
    <div class="dropdown">
      <button class="btn btn-outline-light" type="button"
              data-bs-toggle="dropdown" aria-expanded="false" aria-label="Jazyk">
        <i class="bi bi-globe fs-5"></i>
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="?lang=sk">Slovenčina</a></li>
        <li><a class="dropdown-item" href="?lang=en">English</a></li>
      </ul>
    </div>

  </div>
</nav>
