# Topic: Blog Posts

## Fișiere incluse
- `Part_3_Blog_Archive_View_-_WordPress_Loop.md` (2016)
- `Part_4_Single_Blog_Post_View.md` (2016)

## Analiză Relații

### Foundation & Legacy Workflow
Aceste fișiere reprezintă baza structurală a oricărui site WordPress, implementată în era timpurie a Oxygen Builder (v1.x). Relația dintre ele este de **complementaritate funcțională**:

1.  **Archive View (Part 3)**:
    -   Definește cum se afișează lista de articole.
    -   Utilizează componenta predefinită `Archive Loop` (care în spate este un PHP Code Block cu loop-ul WordPress clasic).
    -   Subliniază importanța configurației din `WordPress Settings > Reading` (alocarea paginii de Posts).

2.  **Single Post View (Part 4)**:
    -   Definește cum se afișează un singur articol.
    -   Introduce utilizarea componentelor atomice: Post Title, Post Content, Post Attributes (Tags/Categories), Comment Form.
    -   Demonstrează flexibilitatea structurii prin posibilitatea de a șterge elemente (ex: Author Box) care nu au date populate.

## Evoluție Tehnologică (Note RAG)
-   **Metodă Clasică (2016)**: Bazată pe componentele `WordPress Content` care sunt în esență blocuri de cod PHP pre-scrise.
-   **Tranziție**: Această abordare a fost ulterior îmbunătățită prin elementul `Easy Posts` (pentru design rapid de grile) și sistemul `Repeater` (pentru control total asupra designului fiecărui post).
-   **Regulă de Aur**: Deși tehnologia a avansat, logica WordPress Loop (`have_posts()`, `the_post()`) rămâne identică. Înțelegerea acestor fișiere este crucială pentru debugging în `Code Blocks` custom.

## Concluzii RAG
-   **Archive Layout**: Folosiți `Archive Loop` doar pentru site-uri foarte simple; pentru proiecte B2B moderne (conform regulilor agenției), se recomandă `Easy Posts` sau `Repeater`.
-   **Single Layout**: Elementele de tip `WordPress Content` rămân standardul pentru redarea conținutului generat în Gutenberg/Classic Editor.
-   **CSS**: Selectorul `.entry-title` este cel mai comun punct de intervenție pentru stilizarea titlurilor în loop-urile Oxygen.
