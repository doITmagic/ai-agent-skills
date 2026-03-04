# Analiză Cross-Reference: Color Palettes

## Fișiere incluse:
- [21_Oxygen_-_Global_Colors_-_Edit_Color_Once_It_Updates_Everywhere.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/21_Oxygen_-_Global_Colors_-_Edit_Color_Once_It_Updates_Everywhere.md) (2018-10-20)
- [How_To_Create_A_Design_System_For_Oxygen.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/How_To_Create_A_Design_System_For_Oxygen.md) (2020-06-14)

## Analiza Relațiilor:

1. **Funcționalitate de Bază vs. Strategie (Complementaritate)**:
   - `21_Oxygen_-_Global_Colors...` este un manual tehnic care explică **mecanismul** culorilor globale (pictograma glob, redenumire, ștergere).
   - `How_To_Create_A_Design_System_For_Oxygen.md` extinde acest concept într-un **workflow de design**, recomandând:
     - Utilizarea unei pagini dedicate de "Design System" pentru documentare vizuală.
     - Utilizarea instrumentului **PALX** pentru a genera nuanțe derivate dintr-o culoare de bază.
     - Saturarea tonurilor de gri cu culoarea de bază pentru un design mai omogen.

2. **Automatizare via Design Library**:
   - Ambele fișiere menționează că importarea unor seturi de design (ex: "dentist") din librăria Oxygen creează automat seturi de culori globale proprii (Color Sets), care pot fi editate independent.

## Concluzii RAG / Key Insights:
- **Eficiență**: Culorile globale elimină necesitatea de a edita cod CSS manual sau de a schimba culorile element cu element. 
- **Bune Practici**: Se recomandă limitarea la 3-5 culori primare pentru non-designeri pentru a menține consistența.
- **Workflow**: Culorile globale sunt stocate în `Manage Settings > Global Styles > Colors`.

## Recomandări:
- Fișierul din 2018 este suficient pentru a învăța interfața.
- Fișierul din 2020 este esențial pentru standardizarea proiectelor la nivel de agenție.
