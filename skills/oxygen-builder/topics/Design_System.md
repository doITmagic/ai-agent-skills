# Analiză Cross-Reference: Design System

## Fișiere incluse:
- [The_Styling_System_WordPress_Developers_Have_Been_Waiting_For_Oxygen.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/The_Styling_System_WordPress_Developers_Have_Been_Waiting_For_Oxygen.md) (2026)
- [How_To_Create_A_Design_System_For_Oxygen.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/How_To_Create_A_Design_System_For_Oxygen.md) (2020)

## Analiza Relațiilor și Evoluției:

1. **De la Manual la Nativ (2020 -> 2026)**:
   - În **2020**, abordarea recomandată era crearea unei pagini WordPress numite "Design System" unde developeri listau manual culorile, tipografia și exemplele de spacing pentru referință vizuală.
   - În **2026 (Oxygen 6)**, această nevoie este parțial absorbită de interfața Oxygen prin noul **Styling System**. Design System-ul devine o entitate digitală gestionată direct prin panoul de `Variables` și `Selectors`.

2. **Complementaritate**: Cele două fișiere sunt complementare. Cel din 2020 oferă *logica* de design (regrid-ul de 8px, selecția paletei), în timp ce cel din 2026 oferă *uneltele* tehnice moderne pentru a implementa acea logică fără frecare (autocomplete, grouping).

## Concluzii RAG / Key Insights:

- **Regula de Aur a Spacing-ului**: Utilizarea unui sistem de incrementare de **8 pixeli** (8, 16, 32, 64, 128) pentru padding și margin. Motivul principal este scalarea perfectă pe ecrane Retina (2x/3x) și evitarea pixelilor fracționari care provoacă blur.
- **Variabilele ca Sursă Unică de Adevăr**: În Oxygen 6.0, variabilele (`--var-name`) nu sunt doar stocate, ci integrate în autocomplete-ul editorului de cod CSS. Acestea permit modificarea întregului sistem (ex: toate marginile, toate culorile de brand) dintr-un singur punct (panoul `$`).
- **Managementul Clastelor (v6.0)**:
  - **Selector Panel**: Permite gruparea claselor pe categorii (Layout, Typography, etc.).
  - **Locking**: Posibilitatea de a bloca o clasă pentru a preveni modificările accidentale.
  - **Renaming Global**: Redenumirea unei clase într-un singur loc o actualizează automat pe toate elementele din site-ul Oxygen care o utilizează.
- **Tool-uri Externe Recomandate**:
  - [PALX](https://palx.jxnblk.com) - Pentru generarea paletelor de culori saturate pornind de la un brand color.
  - [brum.af/shadows](https://brum.af/shadows) - Pentru generarea de umbre (box-shadow) naturale prin layering de 4-6 nivele.
  - [fontpair.co](https://fontpair.co) - Pentru corelarea optimă a fonturilor Google.

## Recomandări pentru Implementare:
- **Ignorați ID-urile**: În Oxygen 6.0, evitați stilizarea pe ID. Folosiți clase pentru orice element care s-ar putea repeta, profitând de sistemul de multiplicare a claselor (duplicate class workflow).
- **Setup-ul Secțiunilor**: Setați padding-ul global al secțiunilor (Global Styles > Sections) la valorile alese în design system (ex: 64px top/bottom) pentru a asigura consistența verticală fără efort.
- **Documentare Integrată**: Deși Oxygen 6 are tool-uri native, păstrarea unei pagini de "Design System" (ca în tutorialul din 2020) rămâne o practică excelentă pentru handoff-ul către client sau alți designeri care nu au acces/cunoștințe de Oxygen.
