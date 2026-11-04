# Brutalism

Stránka brutalizmu – klasická WordPress téma (píšeme v kóde, bez blokov).

## Inštalácia (každý u seba)
1. Čistý WordPress na UwAmp
2. `git clone https://github.com/F1l1pFr1c/Brutalism.git` do `wp-content/themes/`
   (priečinok musí byť `Brutalism`)
3. Vzhľad → Témy → Brutalism → Aktivovať

## Čo nastaviť v administrácii (nie je v Gite)
- Nastavenia → Trvalé odkazy → **Názov príspevku**
- Stránka **Domov** → Nastavenia → Čítanie → statická domovská stránka
- Stránka **Karty** so slugom `karty`
- Vzhľad → Menu → vytvoriť menu a priradiť k „Hlavné menu"

## Kto čo robí
| Časť | Súbory |
|---|---|
| Stránka Karty + vzhľad karty (Patrik) | `page-karty.php`, `inc/karta.php`, `css/karty.css` |
| Hlavná stránka (kolega) | `front-page.php`, `css/domov.css`, `js/domov.js` |
| Spoločné (meniť po dohode) | `header.php`, `footer.php`, `functions.php`, `css/base.css`, `js/main.js` |

## Pravidlá
- Každý pracuje na vlastnej vetve (`git checkout -b nazov-vetvy`)
- Pred prácou vždy `git pull`
- Do Gitu patrí len priečinok témy
