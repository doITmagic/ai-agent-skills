# Topic: Basic Elements

## Fișiere incluse
- `Oxygens_Basic_Builder_Elements.md` (2018)
- `Oxygens_Basic_Builder_Elements_July_2020_Update.md` (2020)

## Analiză Relații

### Evolution & Core Identity
Topic-ul definește alfabetul vizual al Oxygen Builder. Relația dintre cele două documente este de **evoluție incrementală**:
1.  **Fundamentele (2018)**: Stabilește ierarhia: Section (containere cu lățime fixă globală) > Div (blocuri de construcție flexibile) > Columns (helperi de layout Flexbox).
2.  **Modernizarea (2020)**: Păstrează structura originală dar adaugă funcționalități estetice și tehnice majore:
    -   **Shape Dividers**: Peste 30 de forme SVG pentru tranziții între secțiuni (cu suport pentru SVG-uri custom).
    -   **Flexbox Control**: O interfață mai matură pentru alinierea orizontală/verticală și ordinea elementelor.
    -   **Media Improvements**: Optimizarea seturilor de surse (source sets) și preluarea automată a atributelor Alt din WordPress.

## Inovații Tehnice & Reguli de Aur
- **Section vs Div**: Secțiunile au padding global și constrângere de lățime (page width). Div-urile sunt complet "nude", fără stiluri predefinite, fiind ideale pentru layout-uri complexe imbricate.
- **Link Wrapper**: "Puterul magic" din Oxygen care transformă orice grup de elemente (Imagine + Heading + Text) într-un buton unitar clickable.
- **Code Block**: Rămâne elementul suprem de extensibilitate, oferind acces direct la PHP, HTML, CSS și JavaScript în interiorul builder-ului.
- **Rich Text**: Recomandat exclusiv pentru conținut formatat de tip blog (liste, bold, italic) unde se dorește utilizarea editorului clasic WordPress.

## Concluzii RAG
Utilizarea elementelor de bază trebuie să urmeze fluxul Logic:
- **Layout**: Section → Div/Columns → Flexbox Alignment.
- **Interactivitate**: Link Wrapper pentru carduri complexe, Buttons pentru CTA-uri simple.
- **Personalizare**: Code Block pentru funcționalități care nu pot fi realizate în < 50 linii de cod (conform regulilor agenției).
- **Design**: Shape Dividers pentru a rupe monotonia liniară a secțiunilor.
