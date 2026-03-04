# Analiză Cross-Reference: Custom Attributes

## Fișiere incluse:
- [Creating_A_Simple_Mouse-Based_Parallax_Effect_In_WordPress_With_Oxygen.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Creating_A_Simple_Mouse-Based_Parallax_Effect_In_WordPress_With_Oxygen.md) (2022-05-08)
- [How_To_Easily_Create_Tooltips_In_Oxygen_With_Tippyjs.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/How_To_Easily_Create_Tooltips_In_Oxygen_With_Tippyjs.md) (2020-09-20)
- [Whats_New_In_Oxygen_35.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Whats_New_In_Oxygen_35.md) (2020-08-25)
- [Oxygen_35_Alpha_1_-_Ready_For_Testing.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Oxygen_35_Alpha_1_-_Ready_For_Testing.md) (2020-07-17)

## Analiza Relațiilor:

1. **Evoluția Funcționalității**:
   - **Oxygen 3.2/3.5** a marcat momentul în care constructorul a devenit un instrument pentru dezvoltatori avansați prin introducerea panoului **Advanced > Attributes**.
   - Această funcție permite adăugarea oricărui atribut HTML, oferind suport complet pentru **Dynamic Data** atât pentru cheie, cât și pentru valoare.

2. **Sinergie cu Selector Management**:
   - Documentele din versiunea 3.5 prezintă funcția "Attributes" în tandem cu **Copy To / Clear Styles**. Această combinație permite dezvoltatorilor să structureze codul curat: stilizare pe clase și funcționalitate JS/interacțiuni pe atribute personalizate (data-attributes).

## Concluzii RAG / Key Insights:
- **Integrare JS Low-Code**: Atributele precum `data-tippy-content` sau `speed` (pentru parallax) elimină necesitatea de a scrie cod HTML manual în Code Blocks, permițând utilizarea elementelor native Oxygen cu biblioteci precum Tippy.js sau scripturi custom de mouse-tracking.
- **Specificitate CSS Controlată**: Utilizarea instrumentului de **Erase/Copy Styles** (v3.5) rezolvă problema clasică în care stilurile aplicate pe ID (precedență mare) blocau reutilizarea elementelor prin clase. Transferul rapid de la ID la clasă este fluxul de lucru recomandat pentru scalabilitate.
- **Accesibilitate (ARIA)**: Implementarea atributelor personalizate este metoda standard în Oxygen pentru a adăuga `aria-label`, `role` sau alte atribute necesare conformității WCAG care nu sunt prezente nativ în setările de element.
- **Performanță**: Documentația subliniază utilizarea logicii de tip `debounce` (setTimeout 16ms) în scripturile care citesc atribute (ex: parallax) pentru a evita supraîncărcarea browser-ului.

## Recomandări:
- Folosiți **Custom Attributes** în locul ID-urilor pentru a targeta elemente în JavaScript (ex: `document.querySelectorAll('[data-custom-trigger]')`), făcând codul mai robust la schimbări de structură.
- Utilizați extensiv **Copy To Class** în faza de optimizare a designului pentru a curăța markup-ul de stiluri inline/ID repetitive.
- Pentru Repeatere (v4.6+), combinați **Custom Tags** (`<ul>`, `<li>`) cu atribute specifice de listă pentru un SEO și accesibilitate superioare.
