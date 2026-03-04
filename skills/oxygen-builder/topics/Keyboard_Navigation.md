# Topic: Keyboard Navigation — Analiză Cross-Reference (v4.3 - 2023)

## 1. Accesibilitate și Navigare prin Tastatură

Oxygen a pus un accent major pe accesibilitate începând cu versiunea **v4.3**, introducând elemente și setări dedicate utilizatorilor care navighează folosind tastatura sau screen readere.

- **Skip Links (Esențial):**
  - **Concept:** Permite utilizatorilor să sară peste navigarea repetitivă (header/meniu) direct la conținutul principal.
  - **Implementare Automată (v4.3):** Elementul `Site Navigation` include o setare nativă pentru Skip Link, care poate fi activată și personalizată (label, target).
  - **Implementare Manuală (Main Template):** Un link de text plasat la începutul structurii, ascuns vizual (`absolute top: -10000px`), dar vizibil pe `:focus` (`top: 0`). Target-ul trebuie să fie un div cu ID-ul `#main` care învelește elementul `Inner Content`.
- **Focus Management:** Este critică păstrarea indicatorilor de focus ai browser-ului. Oxygen recomandă să nu se ascundă outline-ul de focus sau să se ofere o alternativă vizibilă clară pentru utilizatorii de tastatură.

## 2. Elementul "Site Navigation" (v4.3)

Acesta a fost reconstruit de la zero pentru a fi "accessibility-first":
- **Suport Tastatură:** Utilizarea tastei `Tab` pentru navigare și `Escape` pentru închiderea rapidă a submeniurilor.
- **Screen Reader Friendly:** Include `aria-labels` și suport pentru titluri de navigare, asigurând o experiență coerentă pentru utilizatorii cu deficiențe de vedere.
- **Mobile Menu Accessible:** Meniul de mobil respectă aceleași standarde, închizându-se automat când focusul părăsește elementul.

## 3. Standarde de Marcaj Semantic

- **Tag-ul `<main>`:** Recomandarea Oxygen este setarea tag-ului elementului `Inner Content` pe `main`. Acest lucru creează un "landmark" HTML5 care ajută screen readerele să identifice regiunea principală de conținut a paginii.
- **Landmarks:** Marcarea corectă a header-ului, footer-ului și navigării îmbunătățește semnificativ scorul de accesibilitate.

## 4. Indexul Analizei

| Fișier | An | Focus Principal |
| :--- | :--- | :--- |
| `How_To_Create_Accessible_Skip_Links...` | 2023 | Tutorial detaliat pentru implementarea manuală a skip links și structura main template. |
| `Oxygen_43_Beta_1...` | 2022 | Lansarea elementului `Site Navigation` cu focus pe standarde de accesibilitate. |

---
**Standard Antigravity:** Toate proiectele trebuie să aibă un `Skip Link` funcțional definit în Main Template și elementul `Inner Content` setat pe tag-ul `<main>`. Indicatorul de focus trebuie să rămână vizibil și să aibă contrast suficient.
