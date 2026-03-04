# Topic: Blog Templates

## Fișiere incluse
- `Visually_Insert_Dynamic_Data_From_WordPress_Into_Your_Oxygen_Templates.md` (2018)
- `How_To_Add_Comment_Form_and_Comments_List_To_Blog_Post_Layouts_with_Oxygen.md` (2018)

## Analiză Relații

### Digital Shift: From Code to Visual Data
Această pereche de fișiere marchează momentul critic în evoluția Oxygen Builder: lansarea motorului de **Dynamic Data** (2018). Relația dintre ele este de **extensie tematică**:

1.  **Dynamic Data Core (Visually Insert...)**:
    -   Introduce conceptul de "Insert Data" direct din toolbar.
    -   Permite legarea proprietăților vizuale (Background Image) de date din baza de date (Featured Image) prin butonul specific "Data".
    -   Oferă o soluție de "last resort" prin `PHP Function Return Value`, menținând flexibilitatea pentru developeri.

2.  **Specific Components (Comments List/Form)**:
    -   Aplică aceleași principii de date dinamice pe elementele complexe de comentarii.
    -   Introduce "Preset Templates" (Gray highlight, White blocks) pentru a reduce timpul de design.
    -   Explică dualitatea Oxygen: control vizual la suprafață, dar acces direct la codul PHP/CSS al template-ului de comentarii pentru avansați.

## Concluzii RAG
-   **Workflow Modern**: Pentru orice template de Blog/Single Post în agenție, se va folosi exclusiv butonul "Insert Data" (sau scurtăturile din Add > WordPress > Dynamic Data).
-   **Backgrounds**: Imaginile hero pentru blog trebuie setate dinamic via `Featured Image` pentru a asigura versatilitatea template-ului.
-   **Comentarii**: Se recomandă pornirea de la un preset (ex: White blocks) și ajustarea fină din setările elementului, evitând editarea PHP-ului template-ului de comentarii decât dacă designul o cere explicit.
-   **Fallback**: `PHP Function Return Value` este metoda standard de a integra date din plugin-uri care nu au integrare nativă (dacă nu folosim MetaBox/ACF tags).
