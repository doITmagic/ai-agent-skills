# Topic: Off-Canvas Menu — Analiză Cross-Reference (2016 - 2020)

## 1. Evoluția Metodelor de Implementare

Analiza documentației evidențiază trei etape majore în crearea meniurilor de tip off-canvas:

- **Metoda Pro Menu (Standard Modern - 2020):** Utilizarea elementului **Pro Menu** cu setarea `Mobile menu/toggle below: Always`. Aceasta este metoda recomandată pentru proiectele agenției deoarece gestionează nativ accesibilitatea, iconițele de închidere și animațiile (`slide left/right`).
- **Metoda Modal (Tranziție - 2019):** Utilizarea elementului **Modal** setat la `100vh` și poziționat lateral (`left/right side`). Permite o libertate totală de design în interiorul modalului, dar necesită configurarea manuală a declanșatorilor (triggers).
- **Metoda Manuală / 3D Effects (Legacy - 2016):** Structură complexă de div-uri (`page-container`, `menu`, `canvas`) controlată prin jQuery și CSS `translate3d`. Deși oferă efecte vizuale spectaculoase (rotație 3D, perspectivă), este dificil de întreținut și a fost înlocuită de elementele native.

## 2. Concepte Tehnice Cheie
- **Triggering:** Trecerea de la selecția manuală a ID-urilor în JS la setarea vizuală "Show when user clicks element" în interfața Oxygen.
- **Scroll Locking:** Importanța blocării scroll-ului pe `body` sau `canvas` atunci când meniul este deschis (realizat automat de Modal/Pro Menu, manual prin `overflow: hidden` în legacy).
- **UX Layout:** Recomandarea de a adăuga padding consistent (`30-64px`) în partea de sus a meniului off-canvas pentru a evita suprapunerea link-urilor cu butonul de închidere, în special pe mobil unde poate apărea admin bar-ul.

## 3. Indexul Analizei

| Fișier | Metodă | Relație |
| :--- | :--- | :--- |
| `How_To_Build_An_Off_Canvas_Menu...` | Pro Menu | **Modern Standard** (Superior accessibility) |
| `Oxygens_Modals_-_Easily_Create...` | Modal Element | **Technical Alternative** (Design flexibility) |
| `Simple_Elegant_Solution... Part 1 & 2` | Manual (JS/CSS) | **Legacy / 3D Inspiration** (Complex to maintain) |

---
**Standard Antigravity:** Pentru toate proiectele curente, folosiți **Pro Menu** cu logică off-canvas. Metoda 3D (2016) se va utiliza DOAR la cererea explicită a clientului pentru experiențe "wow" de tip experimental, având în vedere costul ridicat de mentenanță și potențialele probleme de accesibilitate.
