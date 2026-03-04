# Topic: Border Radius

## Fișiere incluse
- `Oxygen_-_Borders_Border_Radius_Circular_Images.md` (2018)
- `Responsive_Big_Testimonial_w_Tinted_Background.md` (2016)

## Analiză Relații

### Feature Overview & Practical Application
Proprietatea `Border Radius` este esențială pentru estetica modernă a site-urilor, trecând de la simple colțuri rotunjite în 2016 la arhitecturi de elemente circulare în 2018. Relația este de **extensie tehnică**:

1.  **Legacy Implementation (Testimonials 2016)**:
    -   Folosește `Border Radius: 50%` pentru un caz de utilizare specific: fotografia autorului unui testimonial.
    -   Subliniază necesitatea controlului vizual pentru a crea un design "premium" la acea vreme (avatar circular).

2.  **Advanced Controls (2018 Update)**:
    -   Explică mecanica internă a Oxygen: setarea "All" este un shortcut care populează valorile individuale (Top/Right/Bottom/Left).
    -   Introduce utilizarea valorilor procentuale (50%) față de pixeli pentru a asigura că cercurile rămân cercuri indiferent de redimensionarea elementului.
    -   Demonstrează stilizarea individuală a colțurilor pentru butoane cu forme asimetrice (ex: 50% sus, 1% jos).

## Concluzii RAG
-   **Imagini Circulare**: Regula de aur — folosiți mereu `50%` și asigurați-vă că imaginea sursă este raport `1:1` (pătrată).
-   **Butoane**: Folosiți `Border Radius` pentru a crea butoane "pill-shaped" sau asimetrice pentru un plus de originalitate.
-   **UI Shortcut**: Setarea bordurilor din tab-ul "All" va suprascrie setările individuale dacă nu se acordă atenție ierarhiei de priorități în Oxygen.
-   **Estetică Agenție**: Conform standardelor noastre, colțurile rotunjite (radius 4px-12px) sunt preferate pentru carduri, în timp ce imaginile de profil trebuie să fie mereu circulare (50%).
