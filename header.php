<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <title>Brutalism</title>
  <?php wp_head(); ?>
</head>

<body>
<nav id="navbar" class="navbar navbar-dark bg-dark px-3 w-100 sticky-top">
  <div class="container-fluid flex-nowrap">

    <!-- VĽAVO: hamburger s vlajkami -->
    <div class="dropdown">
      <button class="btn btn-outline-light" type="button"
              data-bs-toggle="dropdown" aria-expanded="false" aria-label="Krajiny">
        <i class="bi bi-list fs-5"></i>
      </button>
      <ul class="dropdown-menu dropdown-coloring">
        <li><a class="dropdown-item domov" href="./">Home</a></li>
        <li><hr class="dropdown-divider"></li>

        <li>
          <a class="dropdown-item d-flex align-items-center gap-2" href="?krajina=czechoslovakia">
            <img src="wp-content/themes/prazdna/images/flag-cs.png" alt="Czechoslovakia" height="20">
          </a>
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center gap-2" href="?krajina=poland">
            <img src="wp-content/themes/prazdna/images/flag-pl.png" alt="Poland" height="20">
          </a>
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center gap-2" href="?krajina=ussr">
            <img src="wp-content/themes/prazdna/images/flag-su.png" alt="USSR" height="20">
          </a>
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center gap-2" href="?krajina=germany">
            <img src="wp-content/themes/prazdna/images/flag-dd.png" alt="East Germany" height="20">
          </a>
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center gap-2" href="?krajina=yugoslavia">
            <img src="wp-content/themes/prazdna/images/flag-yu.png" alt="Yugoslavia" height="20">
          </a>
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center gap-2" href="?krajina=hungary">
            <img src="wp-content/themes/prazdna/images/flag-hu.png" alt="Hungary" height="20">
          </a>
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center gap-2" href="?krajina=romania">
            <img src="wp-content/themes/prazdna/images/flag-ro.png" alt="Romania" height="20">
          </a>
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center gap-2" href="?krajina=albania">
            <img src="wp-content/themes/prazdna/images/flag-al.png" alt="Albania" height="20">
          </a>
        </li>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const kontajner = document.getElementById('budovy');
  const checky = document.querySelectorAll('.filter-check');
  const radia = document.querySelectorAll('.zoradenie');
  const polozky = Array.from(document.querySelectorAll('.polozka'));

  // zapamätá pôvodné poradie, aby sa dalo obnoviť
  polozky.forEach(function (el, i) { el.dataset.poradie = i; });

  function aktualizuj() {
    if (!kontajner) return;   // na stránke nie sú budovy, nič nerob

    // 1. ZORADENIE
    const zoradene = polozky.slice();
    const vybrateZoradenie = document.querySelector('.zoradenie:checked');
    const sposob = vybrateZoradenie ? vybrateZoradenie.value : 'povodne';

    zoradene.sort(function (a, b) {
      if (sposob === 'najstarsie') return a.dataset.rok - b.dataset.rok;
      if (sposob === 'najnovsie') return b.dataset.rok - a.dataset.rok;
      if (sposob === 'abeceda') {
        return a.querySelector('h2').textContent.localeCompare(b.querySelector('h2').textContent, 'sk');
      }
      return a.dataset.poradie - b.dataset.poradie;
    });
    zoradene.forEach(function (el) { kontajner.appendChild(el); });

    // 2. FILTROVANIE
    const vybrane = {};
    checky.forEach(function (ch) {
      if (ch.checked) {
        if (!vybrane[ch.dataset.skupina]) vybrane[ch.dataset.skupina] = [];
        vybrane[ch.dataset.skupina].push(ch.value);
      }
    });

    let viditelne = 0;
    zoradene.forEach(function (el) {
      const hodnoty = {
        dekada: String(Math.floor(el.dataset.rok / 10) * 10),
        typ: el.dataset.typ
      };
      const zhoda = Object.keys(vybrane).every(function (skupina) {
        return vybrane[skupina].includes(hodnoty[skupina]);
      });

      el.style.display = zhoda ? '' : 'none';

      // 3. STRIEDANIE STRÁN (každá druhá viditeľná budova vpravo)
      el.classList.toggle('budova-vpravo', zhoda && viditelne % 2 === 1);
      if (zhoda) viditelne++;
    });

    document.getElementById('nic-nenaslo').style.display = viditelne === 0 ? 'block' : 'none';
  }

  checky.forEach(function (ch) { ch.addEventListener('change', aktualizuj); });
  radia.forEach(function (r) { r.addEventListener('change', aktualizuj); });

  document.getElementById('filter-zrusit').addEventListener('click', function () {
    checky.forEach(function (ch) { ch.checked = false; });
    radia.forEach(function (r) { r.checked = false; });
    aktualizuj();
  });

  aktualizuj();
</script>

</body>
</html>