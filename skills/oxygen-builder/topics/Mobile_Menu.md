# Topic: Mobile Menu & Accessibility — Analiză Cross-Reference (2016 - 2026)

## 1. Evoluția Tehnologică a Meniului Mobile

Sistemul de navigare pentru dispozitive mobile în Oxygen a parcurs trei etape majore:
- **Etapa Manuală (2016):** Utilizarea unui element Icon, poziționat absolut, care declanșează via jQuery un Div (`.main-menu-bar`) setat inițial pe `display: none`. Necesită cod personalizat pentru toggle.
- **Etapa Pro Menu (2020):** Introducerea elementului **Pro Menu** cu funcționalități native de "Off Canvas". Permite alinierea la stânga/dreapta, animații de slide și gestionarea automată a dropdown-urilor ca toggle-uri.
- **Etapa Accessibility (2022+):** Lansarea elementului **Site Navigation** (v4.3). Construit de la zero pentru accesibilitate (keyboard navigation, screen readers), folosește direct meniurile WordPress (inclusiv descrieri și pictograme).

## 2. Elemente și Stiluri Call-to-Action (CTA)

O noutate majoră în versiunile recente este posibilitatea de a transforma ultimele 1-2 elemente din meniu în butoane de tip CTA direct din setările elementului Site Navigation:
- **Style Solid/Outline:** Permite diferențierea vizuală a link-urilor critice (ex: "Contact", "Sign Up").
- **Inversion:** Funcție pentru inversarea culorilor pictogramelor pe submeniuri sau CTA-uri pentru a menține contrastul (ex: pictogramă neagră devenind albă pe fundal închis).

## 3. Bune Practici și Accesibilitate

- **Prefers-Reduced-Motion:** Elementele moderne (Site Navigation) respectă setările de sistem ale utilizatorului, dezactivând animațiile dacă este necesar.
- **Semantic Markup:** Utilizarea tag-urilor HTML5 corecte și a atributelor ARIA pentru o mai bună indexare SEO și suport pentru tehnologii asistive.
- **Off-Canvas UX:** Se recomandă adăugarea unui padding generos (30-64px) în partea de sus a containerului off-canvas pentru a evita suprapunerea link-urilor cu iconița de închidere (X).

## 4. Indexul Analizei

| Fișier | Focus | Versiune | Relație |
| :--- | :--- | :--- | :--- |
| `Whats_New_In_Oxygen_43...` | Lansarea Site Navigation și Accesibilitate. | v4.3 | **Master (Modern)** |
| `Oxygens_Site_Navigation...` | Tutorial complet Site Navigation & WordPress Menus. | v4.3 | **Core Tutorial** |
| `How_To_Build_An_Off_Canvas...` | Implementare Pro Menu Off-Canvas & Sticky. | v3.x | **Advanced Design** |
| `The_Pro_Menu_Element.md` | Prezentare generală Pro Menu și Presets. | v3.x | **Legacy Pro** |
| `Part_15_Making_the_Header...` | Metoda manuală (jQuery/CSS) de toggle. | v1.x | **Historical Context** |

---
**Standard Antigravity:** Utilizați întotdeauna elementul **Site Navigation** pentru proiecte noi datorită suportului nativ pentru accesibilitate. Rezervați **Pro Menu** doar pentru layout-uri off-canvas extrem de personalizate care nu pot fi realizate cu elementul standard.
