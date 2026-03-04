# Topic: Layout, Design & Controls — Analiză Cross-Reference (2018 - 2026)

## 1. Ierarhia și Elementele de Bază

Sistemul de layout în Oxygen se bazează pe trei piloni principali, gestionați eficient prin **Structure Panel**:
- **Section:** Containerul principal de lățime întreagă (sau limitată) care încadrează conținutul.
- **Columns:** Element pentru structuri multi-coloană dinamice (zecimale sau procente), cu posibilitate de reordonare prin drag-and-drop.
- **Div:** "Cărămida" universală utilizată pentru gruparea elementelor și aplicarea unor reguli de aliniere locală fără a afecta restul secțiunii.

## 2. Controlul Alinierii (Flexbox & Grid)

Oxygen folosește **Flexbox** ca motor principal de aliniere, expus prin setările `Child Element Layout`:
- **Vertical vs Horizontal Stacking:** Comutarea instantanee între stivuire și așezare pe rând.
- **Alignment Controls:** Center, Left, Right, Space-around, Space-between.
- **Grid Layout (v3.7+):** Permite layout-uri bidimensionale complexe (ex: carduri în 2-3 coloane cu gap automat), reducând necesitatea coloanelor imbricate.

## 3. Spacing și Vizualizare (Workflow)

- **Drag Handles (Purple Bars):** Cea mai rapidă metodă de ajustare a padding-ului și margin-ului direct în fereastra de editare. Dublu-click resetează valorile la default.
- **Inherited Values:** Valorile setate pe ecrane mari sunt vizibile în ecranele mici ca "Inherited", facilitând ajustările precise în responsive design.
- **Emmet (v4.5):** Crearea rapidă a structurilor complexe prin cod (ex: `section>div.container>h1+p`), economisind zeci de click-uri în procesul de prototipare.

## 4. Tipuri de Layout-uri Specializate

- **Archive Layouts (Repeater):** Utilizate pentru afișarea dinamică a postărilor (ex: stil Polaroid/Vintage). Necesită utilizarea claselor (ex: `.Polaroid`, `.Polaroid__image`) pentru consistență în Repeater.
- **Blog/Post Layouts:** Integrarea elementelor `Comments List` și `Comment Form` cu stilizare granulară pentru câmpuri, butoane și template-uri PHP/CSS editabile.
- **Layering:** Utilizarea poziționării absolute (`position: absolute`) și a marginilor negative pentru a crea suprapuneri moderne (overlap) între imagini și text.

## 5. Indexul Analizei

| Fișier | Focus | Versiune |
| :--- | :--- | :--- |
| `Easy_Layout_Spacing_Control...` | Bazele alinierii, Divs, Columns și Responsive. | Classic |
| `Whats_New_In_Oxygen_45...` | Emmet pentru rapid prototyping de layout. | v4.5 |
| `Creating_A_Vintage_Photo_Layout...` | Layout-uri complexe cu Repeater și efecte de rotire. | Dynamic |
| `How_To_Add_Comment_Form...` | Integrarea secțiunilor de comentarii în blog templates. | Classic |

---
**Standard Antigravity:** Folosiți întotdeauna **Divs** pentru a izola regulile de aliniere. Evitați coloanele imbricate excesiv; preferați **CSS Grid** pentru layout-uri de grid. Utilizați clase utilitare pentru spacing pentru a asigura portabilitatea design-ului.
