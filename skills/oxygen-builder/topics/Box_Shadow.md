# Topic: Box Shadow

## Fișiere incluse
- `Simple_Call_To_Action_Section.md` (2016)
- `Simple_Responsive_Screenshot_Feature_Block.md` (2016)
- `Part_2_Designing_The_Hero_Section.md` (2016)
- `The_Pro_Menu_Element.md` (2020)
- `Using_Animated_Gradient_Backgrounds_In_WordPress_With_Oxygen.md` (2020)

## Analiză Relații

### Evolution of Depth (2016 vs 2020)
Analiza acestor fișiere relevă o evoluție clară a modului în care "profunzimea" este tratată în design-ul web folosind Oxygen:

1.  **Metoda Clasică (2016)**:
    -   Umbre simple, centrate (`0px 0px 4px`) cu opacitate mică (10%) pentru a crea un efect "floating" subtil pe carduri CTA sau screenshot-uri.
    -   Utilizarea `text-shadow` pentru a asigura contrastul textului peste imagini hero.

2.  **Abordarea Modernă (2020)**:
    -   **Directional Shadows**: În `The Pro Menu`, umbra dropdown-ului are un offset vertical pronunțat (13px), sugerând o sursă de lumină și o elevație mai mare.
    -   **Layered/Natural Shadows**: Fișierul din 2020 despre fundaluri animate introduce site-ul `Brom.af`, recomandând umbre stratificate (multiple straturi de `box-shadow`) pentru un aspect premium, mult mai soft decât umbrele standard din browser.

## Concluzii RAG
-   **Carduri & CTA**: Pentru un design modern B2B, evitați umbrele dure. Folosiți tehnica "Layered Shadows" (ex: via Brom.af) pentru a eleva cardurile fără a încărca vizual pagina.
-   **Opacitate**: Regula de aur extrasă din 2016 rămâne valabilă: folosiți `rgba()` cu opacitate redusă (sub 20%) pentru umbre gri, nu negru solid.
-   **Separare Vizuală**: Box shadow este instrumentul preferat pentru a separa elemente cu culori similare (ex: screenshot alb pe fundal alb-murdar), conform tutorialului "Screenshot Feature Block".
-   **Interactive**: Aplicați umbre pe dropdown-uri (Pro Menu) pentru a le diferenția clar de conținutul paginii de dedesubt.
