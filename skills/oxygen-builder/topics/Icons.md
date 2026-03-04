# Topic: Icons — Analiză Cross-Reference (2016 - 2025)

## 1. Evoluție și Suport Tehnologic

Managementul iconițelor în Oxygen Builder a trecut de la utilizarea icon font-urilor limitate la un sistem robust bazat pe SVG-uri personalizate și elemente helper inteligente.

- **2016 - 2017 (Faza Manuală):** Iconițele erau tratate ca elemente individuale (`Icon element`) plasate în `div`-uri. Layout-urile de tip "Icon Box" erau construite manual folosind `float` și `calc()`.
- **2018 (Introducerea Helper-elor):** Apare elementul nativ **Icon Box** și **Social Icons**, simplificând radical construcția secțiunilor repetitive.
- **2019 - 2020 (Revoluția SVG & Icomoon):** Se pune accent pe performanță prin eliminarea icon font-urilor grele. Importul via `symbol-defs.svg` de la Icomoon devine metoda standard recomandată.
- **2021+ (Elemente Compozite & UI):** Iconițele devine componente ale unor elemente mai complexe, precum **Floating Icon Menu** sau meniuri accesibile (Pro Menu - v3.2).

## 2. Tipuri de Relații între Fișiere

### Complementary (Complementare / Evolutive)
- **`Using_SVG_Icon_Sets_in_Oxygen.md` (2019)** și **`Using_SVG_Icon_Sets_in_Oxygen_July_2020_Update.md` (2020):** Versiunea din 2020 adaugă un detaliu tehnic critic: necesitatea de a bifa "Add title to definitions" în Icomoon, fără de care SVG-urile nu sunt recunoscute corect de Oxygen.
- **`Various_Icon_Box_Styles.md` (2016)** și **`Oxygens_Icon_Box_Element...md` (2018):** Primul arată cum se creează manual un icon box (util pentru înțelegerea logicii CSS), al doilea prezintă varianta eficientă folosind elementul nativ.

### Superseded (Înlocuite)
- Utilizarea iconițelor prin link-uri text individuale (prezentă în ghidurile din 2016) este înlocuită de elementul **Social Icons** (2018+) care gestionează vizibilitatea automat pe baza URL-urilor.

## 3. Concepte Cheie și Workflow-uri

### Tehnici de Lucru cu Iconițe:
1. **Import Custom SVG (Workflow Icomoon):**
   - Selectare iconițe în Icomoon.io.
   - **Setare Critică:** Bifează "Add title to definitions" în setările de export (Gear icon).
   - Upload `symbol-defs.svg` în `Oxygen > Settings > SVG Sets`.
2. **Social Media Layouts:**
   - Folosirea elementului `Social Icons` cu opțiunea `URL-based visibility`.
   - Schimbarea stilului între `Blank`, `Circle` și `Square` pentru integrare vizuală.
3. **Regula de Design pentru Scalare:**
   - **NU** mări iconițele low-res direct (pixelare/clunky look).
   - **SOLUȚIE:** Păstrează iconița mică (20-30px) și adaugă un fundal circular (solid sau outline) mai mare pentru a mări amprenta vizuală fără a pierde claritatea. (Sursa: Steve Shoger/Refactoring UI).

### Elementele Helper:
- **Icon Box:** Combină Icon + Heading + Text. Recomandat să se folosească clase (ex: `.my-icon-box`) pentru a edita stilul în masă.
- **Floating Icon Menu:** Element compozit (2021) pentru flyout menus (plus icon care deschide alte iconițe). Ideal pentru mobile.

## 4. Indexul Analizei

| Fișier | An | Concept Principal | Relație |
| :--- | :--- | :--- | :--- |
| `Various_Icon_Box_Styles.md` | 2016 | Manual Icon Box (CSS/Calc) | Legacy/Tutorial |
| `Social_Icons_with_Oxygen...` | 2018 | URL-based helper | Fundamental |
| `Oxygens_Icon_Box_Element...` | 2018 | Native helper element | Efficiency |
| `Design_Rules_Dont_Enlarge...` | 2019 | Visual Scaling Rule | Design Logic |
| `Using_SVG_Icon_Sets...` | 2019 | Icomoon Integration | Performance |
| `Whats_New_In_Oxygen_32.md` | 2020 | Font Awesome 5 Integration | Update |
| `Using_SVG_Icon_Sets... (July Update)` | 2020 | "Add title" requirement | **Critical Fix** |
| `Floating_Icon_Menu...` | 2021 | Flyout Composite Element | Advanced UI |

---
**Recomandare Pro:** Utilizați întotdeauna **SVG-uri personalizate** via Icomoon pentru a reduce greutatea paginii și forțați consistența prin **clase stratificate** (Layered Classes) aplicate pe elementele `Icon`.
