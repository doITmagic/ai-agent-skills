# Topic: Accessibility

## Fișiere incluse
- `How_To_Make_A_Header_Menu_With_A_Centered_Logo_In_WordPress_With_Oxygen.md` (2023)
- `REM_Vs_PX_For_Font_Sizes_In_Oxygen.md` (2023)
- `How_To_Create_Accessible_Skip_Links_For_Your_WordPress_Site_Using_Oxygen.md` (2023)
- `Whats_New_In_Oxygen_43_-_Accessible_Menu_Element.md` (2022)
- `Oxygen_43_Beta_1_-_Ready_For_Testing.md` (2022)
- `Creating_A_CSS-Only_Image_Hotspot_Element_In_WordPress_With_Oxygen.md` (2022)

## Analiză Relații

### Superseded
- **`Oxygen_43_Beta_1_-_Ready_For_Testing.md`** este înlocuit de **`Whats_New_In_Oxygen_43_-_Accessible_Menu_Element.md`**. Ambele prezintă elementul "Site Navigation", dar al doilea fișier conține detaliile finale de release și explicații mai complete despre setări. În context RAG, cel de release final are prioritate.

### Partial Overlap (Critical)
- **`How_To_Create_Accessible_Skip_Links_For_Your_WordPress_Site_Using_Oxygen.md`** vs. **`Whats_New_In_Oxygen_43_-_Accessible_Menu_Element.md`**: Primul fișier explică implementarea *manuală* a Skip Links în template-ul global (soluție universală). Al doilea prezintă funcția *integrată* de Skip Links din elementul Site Navigation. Utilizatorul are nevoie de fișierul de implementare manuală pentru skip links la nivel de pagină întreagă (Skip to Main Content).

### Complementary
- **`REM_Vs_PX_For_Font_Sizes_In_Oxygen.md`**: Documentație fundamentală pentru accesibilitatea tipografică. Este baza pentru orice efort de accesibilitate în Oxygen. Explicația despre `62.5%` root font size este esențială.
- **`How_To_Make_A_Header_Menu_With_A_Centered_Logo_In_WordPress_With_Oxygen.md`**: Un caz concret de design pattern (Centered Logo) rezolvat cu focus pe accesibilitate (DOM order vs Visual order). Completează tutorialul despre Site Navigation arătând cum se obține un layout non-standard fără a sacrifica keyboard navigation.
- **`Creating_A_CSS-Only_Image_Hotspot_Element_In_WordPress_With_Oxygen.md`**: Deși focusat pe design, tutorialul subliniază accesibilitatea prin utilizarea layout-urilor pur CSS care permit cititoarelor de ecran să proceseze conținutul (spre deosebire de plugin-uri JS "grele").

## Concluzii RAG
Accesibilitatea în Oxygen s-a schimbat radical odată cu v4.3.
- **Tehnică modernă**: Utilizarea elementului `Site Navigation` și a unităților `rem`.
- **Skip Links**: Trebuie făcută distincția clară între Skip Link-ul *meniului* și Skip Link-ul *paginii principale*.
- **Configurare recomandată**: Root Font Size setat la `62.5%` prin CSS Global pentru a facilita utilizarea unităților `rem`.
