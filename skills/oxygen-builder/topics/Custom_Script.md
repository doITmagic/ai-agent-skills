# Analiză Cross-Reference: Custom Script

## Fișiere incluse:
- [Using_Rellaxjs_In_WordPress_With_Oxygen.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Using_Rellaxjs_In_WordPress_With_Oxygen.md) (2020-10-04)
- [Using_JQuery_CSS_Inside_Oxygen_to_Create_an_Animated_Case_Study_Block.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Using_JQuery_CSS_Inside_Oxygen_to_Create_an_Animated_Case_Study_Block.md) (2016-07-27)

## Analiza Relațiilor:

1. **Evoluția Tehnicilor de Scripting**:
   - **2016 (Manual/JQuery)**: Abordarea era axată pe manipularea directă a proprietăților CSS (`margin-top`) prin scripturi JQuery personalizate, necesitând calcule matematice în timp real (înălțime container vs. înălțime conținut).
   - **2020 (Biblioteci/Data Attributes)**: Tranziția către utilizarea bibliotecilor specializate precum **Rellax.js**. Aceasta mută logica de control de la codul JS propriu-zis către **atributele HTML** (`data-relax-speed`), oferind o metodă mult mai declarativă și ușor de gestionat în Builder.

2. **Instrumente Comune**:
   - Ambele metode utilizează elementul **Code Block** (sau tab-ul de JS al elementului) pentru inițializare și necesită învelirea codului în `jQuery(document).ready()` pentru a preveni erorile de execuție înainte de încărcarea DOM-ului.

## Concluzii RAG / Key Insights:
- **Rellax.js – Recomandat pentru Parallax**: Fiind bazat pe vanilla JS și extrem de ușor, este soluția ideală pentru Oxygen. Permite viteze de scroll diferențiate pentru elemente care împart aceeași clasă, folosind `data-relax-speed`.
- **Calculul Dinamic al Marginilor**: Tehnica din 2016 rămâne utilă pentru animații de tip "reveal" pe înălțimi necunoscute (ex: descrieri de lungimi diferite în carduri de tip Case Study).
- **Controlul Vizual prin Overflow**: Indiferent de scriptul folosit, managementul vizual se bazează pe proprietatea CSS `overflow: hidden` aplicată containerului părinte pentru a crea efectul de glisare controlată ("clipping").
- **Debugging**: Utilizarea `alert()` sau `console.log()` în interiorul editorului de JS din Oxygen este documentată ca metodă primară de a verifica dacă selectorii și calculele de înălțime funcționează corect pe front-end.

## Recomandări:
- Preferați **Data Attributes** pentru a trece parametri către scripturi (viteze, ID-uri, culori), deoarece aceștia pot fi accesați ușor din panoul Advanced Attributes din Oxygen fără a modifica fișierele JS.
- Utilizați totdeauna CDN-uri (ca JSDelivr) pentru bibliotecile JS externe pentru a beneficia de caching global și viteză de încărcare sporită.
- În versiunile Oxygen noi, folosiți cât mai mult Vanilla JS în Code Blocks pentru a reduce dependența de JQuery și a îmbunătăți scorurile de performanță.
