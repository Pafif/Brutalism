// JS spoločný pre celý web

// ---------- FILTER V NAVBARE ----------
// Funguje len na stránke, kde je obal #budovy s položkami .polozka
// (data-rok, data-typ). Na ostatných stránkach nerobí nič.
(function () {
    const kontajner = document.getElementById('budovy');
    const checky = document.querySelectorAll('.filter-check');
    const radia = document.querySelectorAll('.zoradenie');
    const zrusit = document.getElementById('filter-zrusit');
    const hlaska = document.getElementById('nic-nenaslo');

    if (!kontajner) return;   // na stránke nie sú budovy, nič nerob

    const polozky = Array.from(kontajner.querySelectorAll('.polozka'));

    // zapamätá pôvodné poradie, aby sa dalo obnoviť
    polozky.forEach(function (el, i) { el.dataset.poradie = i; });

    function aktualizuj() {
        // 1. ZORADENIE
        const zoradene = polozky.slice();
        const vybrateZoradenie = document.querySelector('.zoradenie:checked');
        const sposob = vybrateZoradenie ? vybrateZoradenie.value : 'povodne';

        zoradene.sort(function (a, b) {
            if (sposob === 'najstarsie') return a.dataset.rok - b.dataset.rok;
            if (sposob === 'najnovsie') return b.dataset.rok - a.dataset.rok;
            if (sposob === 'abeceda') {
                return a.querySelector('h2, h3').textContent.localeCompare(b.querySelector('h2, h3').textContent, 'sk');
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

        if (hlaska) hlaska.style.display = viditelne === 0 ? 'block' : 'none';
    }

    checky.forEach(function (ch) { ch.addEventListener('change', aktualizuj); });
    radia.forEach(function (r) { r.addEventListener('change', aktualizuj); });

    if (zrusit) {
        zrusit.addEventListener('click', function () {
            checky.forEach(function (ch) { ch.checked = false; });
            radia.forEach(function (r) { r.checked = false; });
            aktualizuj();
        });
    }

    aktualizuj();
})();