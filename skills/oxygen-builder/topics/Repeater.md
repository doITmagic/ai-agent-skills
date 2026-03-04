# Topic: Repeater — Analiză Cross-Reference

## 1. Evoluția Elementului Repeater
Elementul Repeater a evoluat de la un simplu loop de postări la un generator de layout-uri extrem de flexibil și semantic.

### A. Layout Avansat cu CSS Grid (2020)
- **Limitările Flexbox:** Deși Flexbox este motorul nativ în Oxygen, acesta este limitat pentru grile neregulate (ex: magazine, portofolii hero).
- **Abordarea Grid:** Prin setarea `display: grid` pe ID-ul elementului Repeater, se pot folosi selectori `:nth-child` pentru a crea variații de dimensiune (ex: primul item să fie full-width, al 10-lea să fie un banner).
- **Standard:** `grid-template-columns: repeat(4, minmax(100px, 1fr))` pentru responsivitate nativă.

### B. Semantică și Accesibilitate (v4.6+)
- **Custom Tags:** Oxygen 4.6 a introdus posibilitatea de a schimba tag-ul HTML al containerului Repeater (ex: `<ul>`) și al item-urilor individuale (ex: `<li>`).
- **Impact:** Această funcție permite transformarea Repeater-ului într-o listă HTML validă, esențială pentru SEO și accesibilitatea cititoarelor de ecran.

## 2. Optimizare și Performanță
- **Lazy Loading (v4.6):** Elementele de tip Gallery și Video din interiorul sau exteriorul Repeater-ului beneficiază de opțiunea nativă de Lazy Load (disponibilă pentru layout-urile Masonry/Grid).
- **Preview Limits:** v4.6 a introdus limite pentru dropdown-ul de preview (Query Settings) pentru a evita încetinirea builder-ului pe site-uri cu baze de date mari.

## 3. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Using_CSS_Grid_With_Repeaters...md` | Layout Design | **Main Source** (Advanced CSS patterns) |
| `Whats_New_In_Oxygen_46...md` | Semantic Updates | **Update** (Custom Tags & Lazy Load) |
| `Building_A_Recipe_Checklist...md` | Practical Case | **Integration** (ACF Repeater + CSS state) |

---
**Standard Antigravity:** Folosiți întotdeauna **Custom Tags** (`<ul>`, `<li>`) pentru liste de ingrediente, servicii sau orice conținut enumerativ. Pentru layout-uri vizuale de tip "grid", preferați CSS Grid pe ID-ul elementului pentru a menține codul curat și a evita div-urile inutile de tip "wrapper".
