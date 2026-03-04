# Topic: Interface Overview — Analiză Cross-Reference (2016 - 2026)

## 1. Evoluția Paradigmiei de Design UI

Interfața Oxygen Builder a evoluat de la o structură simplă de tip bară laterală (sidebar) la un workspace complex cu panouri specializate pentru proprietăți și structură.

- **Legacy (v1 - 2016):** Accent pe "Tree View" lateral și secțiunea "More" pentru accesarea proprietăților CSS. Utiliza termeni precum "Create Custom View" pentru intrarea în editor.
- **Modern (v3.0 - v6.0):** Introducerea a două regiuni critice de control:
    - **Properties Pane (Stânga):** Grupează setările în tab-ul *Primary* (cele mai utilizate) și *Advanced* (control total CSS).
    - **Structure Pane (Dreapta):** O reprezentare ierarhică (skelton) a designului, crucială pentru layout-uri complexe.

## 2. Componentele Centrale ale Interfeței

### Top Bar (Bara de Control)
- **Save & History:** Gestionarea salvărilor și a punctelor de Undo/Redo (History Pane permite curățarea cache-ului de sesiuni pentru performanță).
- **Viewport Size Dropdown:** Permite preview-ul și aplicarea stilurilor specifice pentru cele 4 breakpoint-uri standard (indicatori luminoși pentru modificările active pe media queries).
- **Manage Panel:** Acces la Global Settings, Style Sheets și Selectors.

### Properties Pane & Selector Management
- **Selector Dropdown:** Comutare între ID (stil unic) și Clase (stiluri globale).
- **State Dropdown:** Gestionarea stărilor Hover, Before, After și stări custom.
- **Dynamic Data Button:** Integrat direct în elementele de editare (Text, Image) pentru inserarea datelor din ACF/MetaBox.

### Structure Pane (Rebuilt in v3.9)
- **Drag-and-Drop:** Reinventat în versiunea 3.9 pentru a fi mult mai performant și fluid.
- **Hierarchy Navigation:** Permite reordonarea elementelor și accesarea celor cu Z-index negativ sau poziționare absolută care sunt greu de selectat în Preview.

## 3. Editarea Vizuală în Preview
- **Visual Handles:** Posibilitatea de a trage de marginile elementelor pentru a ajusta Margin (culoare portocalie/galbenă) și Padding (culoare mov) direct în canvas.
- **Double-Click Typing:** Editare directă a textului cu toolbar de formatare (Bold, Italic, Span, Dynamic Data).

## 4. Indexul Analizei

| Fișier | An | Focus Principal | Update Cheie |
| :--- | :--- | :--- | :--- |
| `Oxygen_-_Complete_User_Interface...` | 2016 | UI Tour Foundation | Tree View, Reusable Parts |
| `Oxygen_Visual_Editor_overview...` | 2020 | Modern UI Structure | Properties Pane, Structure Pane |
| `Whats_New_In_Oxygen_39...` | 2021 | Performance & UX | New Structure Pane (Drag-and-drop) |

---
**Sfat Antigravity:** Pentru o eficiență maximă în workflow-ul agenției, mențineți **Structure Pane** deschis permanent în dreapta. Utilizați **Selector Dropdown** pentru a verifica dacă stilurile sunt aplicate pe Clasă (standard BEM) sau pe ID (excepții).
