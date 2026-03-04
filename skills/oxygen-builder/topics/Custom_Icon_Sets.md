# Analiză Cross-Reference: Custom Icon Sets

## Fișiere incluse:
- [Using_SVG_Icon_Sets_in_Oxygen_July_2020_Update.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Using_SVG_Icon_Sets_in_Oxygen_July_2020_Update.md) (2020-07-31)
- [How_To_Add_Custom_SVG_Icon_Sets_To_Oxygen_With_IcoMoon.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/How_To_Add_Custom_SVG_Icon_Sets_To_Oxygen_With_IcoMoon.md) (2018-06-08)
- [Using_SVG_Icon_Sets_in_Oxygen.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Using_SVG_Icon_Sets_in_Oxygen.md) (2019-03-25)

## Analiza Relațiilor:

1. **Workflow Standardizat (Icomoon.io)**:
   - Toate documentele converg către utilizarea **Icomoon.io** ca instrument principal de generare a seturilor de iconițe. Fluxul de lucru a rămas constant între 2018 și 2020: selectare -> generare SVG -> download ZIP -> extragere `symbol-defs.svg`.

2. **Actualizare Critică de Compatibilitate (2020)**:
   - Documentul din Iulie 2020 introduce o notă crucială care lipsea în versiunile anterioare: necesitatea activării opțiunii **"Add title to definitions in symbol-defs.svg"** în setările Icomoon. Fără această bifă, Oxygen nu poate "vedea" iconițele, fiind cea mai frecventă cauză de eroare la import.

## Concluzii RAG / Key Insights:
- **Fișierul Sursă**: Singurul fișier necesar pentru Oxygen este `symbol-defs.svg`. Restul fișierelor din arhiva Icomoon (demo-uri, JSON) nu trebuie urcate în WordPress.
- **Locația de Import**: Managementul seturilor se face centralizat în `Oxygen > Settings > SVG Sets`, nu direct în pagină sau prin Media Library.
- **Sincronizare și Căutare**: O problemă comună raportată este "dispariția" iconițelor în Builder. Soluția documentată este curățarea câmpului de căutare (Search) din elementul Icon, deoarece acesta poate reține filtre de la seturile anterioare (Font Awesome/Linear).
- **Extensibilitate**: Oxygen permite urcarea de mai multe seturi de iconițe personalizate, oferind flexibilitate pentru proiecte complexe de branding unde iconițele native nu sunt suficiente.

## Recomandări:
- Verificați întotdeauna versiunea fișierului `symbol-defs.svg` înainte de upload; dacă Oxygen afișează setul ca fiind gol, re-exportați din Icomoon cu setarea "Add title to definitions" activată.
- Pentru performanță, selectați din Icomoon **doar iconițele necesare** proiectului, evitând urcarea unor biblioteci gigant care pot îngreuna interfața Builder-ului.
- Ștergeți seturile neutilizate din panoul de setări Oxygen pentru a menține baza de date și interfața curate.
