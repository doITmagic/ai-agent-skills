# Topic: Oxygen 3.7 — Analiză Cross-Reference (2021)

## 1. Layout-uri Avansate: CSS Grid
Oxygen 3.7 a integrat complet **CSS Grid**, oferind o alternativă modernă la Flexbox pentru aranjamente complexe:
- **Grid în elemente dinamice:** Suport pentru Easy Posts, Repeater și Gallery element.
- **Presetări Grid:** Lansarea cu stiluri predefinite (Newspaper, Glossy, Masonry) pentru implementare rapidă.
- **Child Span Override:** O unealtă vizuală inovatoare în proprietățile elementelor copii, permițând definirea manuală a spațiului ocupat pe coloane/rânduri (`grid-column-span`, `grid-row-span`).
- **Auto-fit Columns:** Funcție inteligentă de design responsiv care ajustează automat numărul de coloane în funcție de lățimea minimă definită.

## 2. Extensibilitate: Composite Elements
- Introducerea **Composite Elements**, o librărie de componente interactive (paid add-on) construite din elemente native Oxygen și cod personalizat (ex: Sliders dinamice, Dropdowns).
- Componentele sunt complet editabile la nivel de element individual, fiind livrate cu Code Blocks deschise pentru personalizare maximă.

## 3. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Whats_New_In_Oxygen_37.md` | Feature Overview | **Main Release Doc** |
| `Oxygen_37_Alpha_1...` | Feature testing | **Technical Preview** |

---
**Standard Antigravity:** Utilizați **CSS Grid** (în special `Auto-fit`) pentru galerii și liste de blog complexe, unde Flexbox ar necesita prea mult cod extra pentru aliniere. Profitat de **Child Span Override** pentru a crea accente vizuale în layout-uri de tip "bento-box".
