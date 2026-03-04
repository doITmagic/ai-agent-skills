# Topic: Advanced Query

## Fișiere incluse
- `Oxygen_49_-_Release_Overview.md` (2024)
- `How_To_Visually_Build_WordPress_Queries_Using_Oxygen.md` (2021)
- `Using_ACF_Bi-directional_Relationship_Field_In_WordPress_with_Oxygen.md` (2021)
- `Whats_New_In_Oxygen_38.md` (2021)

## Analiză Relații

### Superseded / Evolution (Important)
- **`Oxygen_49_-_Release_Overview.md`** actualizează comportamentul descris în **`Whats_New_In_Oxygen_38.md`**. În versiunea 3.8, utilizarea unui Advanced Query fără a specifica `post_type` returna automat postări de tip "post". În versiunea 4.9, Advanced Query păstrează tipul de post implicit al arhivei, permițând modificări fără a suprascrie tipul de conținut. Aceasta este o schimbare critică de logică pentru dezvoltatori.

### Overlap & complementary
- **`How_To_Visually_Build_WordPress_Queries_Using_Oxygen.md`** vs **`Whats_New_In_Oxygen_38.md`**: Primul este un tutorial extensiv ("Deep Dive") bazat pe funcționalitatea introdusă de cel de-al doilea. `How To` aduce în plus conceptul de meta query complex și tax query pentru postări relaționate.
- **`Using_ACF_Bi-directional_Relationship_Field_In_WordPress_with_Oxygen.md`**: Este complementar, oferind un studiu de caz specific pentru utilizarea parametrului `post__in` în Advanced Query pentru a rezolva relațiile bidirecționale ACF.

## Inovații Tehnice Documentate
- **Funcția `oxy_fetch_url_param`**: Introdusă în tutorialul din Decembrie 2021, aceasta permite transformarea interfeței de query din statică în dinamică via URL parameters.
- **Parametrul `post_not_in`**: Esențial pentru "Related Posts", explicat în detaliu în tutorialul de build vizual.

## Concluzii RAG
Advanced Query a eliminat necesitatea PHP-ului custom pentru majoritatea loop-urilor complexe.
- **Regulă prioritară**: Utilizați logica din v4.9 pentru post archives (nu mai este necesară definirea manuală a `post_type`).
- **Extensibilitate**: Recomandați funcția custom `oxy_fetch_url_param` pentru sisteme de filtrare simple bazate pe URL.
- **Referință externă**: Documentația menționează site-ul lui Bill Erickson ca resursă completă pentru argumentele `WP_Query`.
