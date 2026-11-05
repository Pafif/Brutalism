// hamburger otvori a zatvori menu s vlajkami
var tlacidlo = document.getElementById('menu-btn');

tlacidlo.onclick = function () {
  document.body.classList.toggle('menu-open');
};
