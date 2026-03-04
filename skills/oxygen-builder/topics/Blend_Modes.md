# Topic: Blend Modes

## Fișiere incluse
- `Fancy_Styles_For_Google_Maps_In_WordPress_With_Oxygen.md` (2020)
- `Screen_Blend_Mode_in_WordPress_with_Oxygen.md` (2019)

## Analiză Relații

### Complementary Applications
Cele două documente explorează modurile de amestecare (mix-blend-mode) în contexte complet diferite, oferind o perspectivă de ansamblu asupra creativității vizuale în Oxygen:

1.  **Typography Visual Effect (2019)**:
    -   Se concentrează pe efectul `mix-blend-mode: screen`.
    -   **Tehnică**: Text negru pe fundal alb, cu o imagine poziționată absolut deasupra. Modul `screen` face ca albul să rămână alb și negrul să devină transparent pentru imaginea de dedesubt.
    -   **Limitare**: Menționează compatibilitatea limitată la browser-ele moderne (fără IE/Edge vechi).

2.  **Interactive Elements Styling (2020)**:
    -   Aplică `mix-blend-mode: overlay` și `color` peste hărți Google.
    -   **Inovație**: Rezolvă problema interactivității folosind `pointer-events: none` pe div-ul de overlay, permițând utilizatorului să interacționeze cu harta de dedesubt (scroll, click pe pini).
    -   **Workflow**: Wrap cu Div (Position: Relative) -> Map -> Overlay Div (Position: Absolute).

## Concluzii RAG
- **Efectul Screen**: Ideal pentru titluri de impact (Typography) unde imaginea servește drept textură pentru text.
- **Overlay/Color pe Maps**: Metodă eficientă de branding pentru hărți Google fără a depinde de API-uri complexe de styling JSON.
- **Regulă de aur**: Orice overlay vizual plasat deasupra unui element interactiv (hărți, butoane, link-uri) trebuie să aibă `pointer-events: none`.
- **Performance**: Modurile de amestecare sunt procesate de GPU, fiind mult mai performante decât texturile pre-rendate în Photoshop.
