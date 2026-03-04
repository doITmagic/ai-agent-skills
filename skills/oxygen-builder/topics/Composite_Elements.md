# Analiză Cross-Reference: Composite Elements

## Fișiere incluse:
- [New_Composite_Elements_Video_Playlist_Image_Accordion_Logo_Slider_Breadcrumb.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/New_Composite_Elements_Video_Playlist_Image_Accordion_Logo_Slider_Breadcrumb.md) (2022-03-18)
- [New_Composite_Elements_Focus_Section_Floating_Icon_Menu.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/New_Composite_Elements_Focus_Section_Floating_Icon_Menu.md) (2021-03-26)
- [Whats_New_In_Oxygen_37.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Whats_New_In_Oxygen_37.md) (2021-02-23)
- [Composite_Elements_Library.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Composite_Elements_Library.md) (2021-02-23)
- [Oxygen_37_Alpha_1_-_Ready_For_Testing.md](file:///Users/P-Software/Desktop/etapa3-oxygen-docs-for-rag/Oxygen_37_Alpha_1_-_Ready_For_Testing.md) (2020-12-07)

## Analiza Relațiilor:

1. **Lansare și Evoluție (Complementaritate)**:
   - Topic-ul este documentat cronologic prin anunțuri de versiune. `Oxygen 3.7 Alpha 1` și `Whats_New_In_Oxygen_37` introduc conceptul.
   - Fișierele din 2021 și 2022 sunt **Complementare**, adăugând noi componente la librăria existentă (ex: Focus Section în 2021, Breadcrumbs în 2022).

2. **Overlap de Informare**:
   - `Composite_Elements_Library.md` și `Whats_New_In_Oxygen_37.md` (ambele din 23 Feb 2021) au un overlap semnificativ, una axându-se pe aspectul comercial/licențiere, cealaltă pe contextul tehnic al versiunii 3.7.

## Concluzii RAG / Key Insights:
- **Definiție**: Composite Elements sunt blocuri de construcție Oxygen standard "pre-asamblate" și extinse cu cod custom (JS/PHP) stocat în `Code Blocks` vizibile.
- **Performanță**:
    - **Video Playlist**: Încarcă un singur iframe YouTube, schimbând doar sursa la click (evită aglomerarea cu multiple iframe-uri).
    - **Logo Slider**: Zero JavaScript, funcționează exclusiv prin animații CSS.
- **Customizare**: Deoarece sunt construite din elemente native, utilizatorul poate schimba orice (pictograme, clase CSS, cod JS) direct în builder.
- **Licențiere**: Este un add-on plătit ($29/an), cu excepția licențelor Agency achiziționate înainte de 12 Feb 2021.

## Componente Cheie Documentate:
- **Navigație**: Mega Menu, Table of Contents (dinamic), Breadcrumb.
- **Interactivitate**: Flip Box, Hover Scrolling Image, Focus Section (Intersection Observer), Floating Icon Menu.
- **Media**: Video Playlist, Dynamic Slider (Swiper.js), Image Accordion.
