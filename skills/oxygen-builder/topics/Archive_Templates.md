# Topic: Archive Templates

## Fișiere incluse
- `Newbie_Guide_Templating_Crash_Course_For_Oxygen.md` (2021)
- `30_Oxygen_WooCommerce_Integration.md` (2019)
- `Oxygen_Singular_Archive_Templates_Any_Post_Type_Any_Taxonomy_Including_Custom.md` (2018)

## Analiză Relații

### Evolution & Best Practices
- **`Newbie_Guide_Templating_Crash_Course_For_Oxygen.md`** (2021) reprezintă versiunea actualizată și mai detaliată a conceptelor din **`Oxygen_Singular_Archive_Templates...`** (2018). În timp ce fișierul din 2018 pune bazele (Any Post Type, Any Taxonomy), ghidul din 2021 introduce "Planul celor 6 Template-uri" esențiale și concepte avansate precum **Template Priority** și **Inner Content** ca fereastră dinamică.

### Complementary (Specialized)
- **`30_Oxygen_WooCommerce_Integration.md`**: Extinde conceptul de Archive Templates pentru ecosistemul WooCommerce, introducând elementul specific `Product List` și setările de query dedicate produselor.

## Inovații Tehnice & Reguli de Aur
- **Inner Content**: Conceptul de "Cookie Cutter window". Nu trebuie stilizat direct pentru a menține flexibilitatea.
- **Query "Default"**: O regulă critică documentată în toate cele 3 fișiere: templates de tip arhivă (Easy Posts/Repeater) TREBUIE să folosească query-ul default din WordPress pentru a evita conflictele de paginare și filtrare.
- **Priority**: Utilizarea `Template Priority` (ex: priority 1) pentru a rezolva conflictele când mai multe template-uri s-ar putea aplica aceleiași pagini (ex: Blog Index vs All Archives).

## Concluzii RAG
Sistemul de templating Oxygen se bazează pe moștenire (Inheritance).
1.  **Main Template**: Header + Inner Content + Footer (Catch-all).
2.  **Archive Template**: Moștenește Main, conține elementul de listare (Easy Posts/Repeater).
3.  **Conflict Resolution**: Dacă o pagină (ex: Shop) are nevoie de layout diferit, se creează un template nou cu prioritate mai mare.
