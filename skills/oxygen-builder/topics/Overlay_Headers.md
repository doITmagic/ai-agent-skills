# Topic: Overlay Headers — Analiză Cross-Reference (2018 - 2023)

## 1. Header Builder vs Div Custom
Analiza confirmă că elementul **Header Builder** este alegerea superioară pentru antete complexe (`Sticky`, `Overlay`, `Multi-row`) datorită funcționalităților native:
- **Sticky Settings:** Prag de scroll (default `300px`), animații de fade-in și controlul vizibilității rândurilor.
- **Overlay Settings:** Activare globală sau per-pagină (`Manage > Settings > Page Settings`).
- **Conditional Rows:** Utilizarea opțiunilor `Only Show in Sticky/Overlay` și `Hide in Sticky/Overlay` pentru a alterna între variante de design (ex: logo alb pe fundal transparent vs logo negru pe fundal alb sticky).

## 2. Bune Practici și Implementare
- **Antet Transparent (Overlay):** Se recomandă duplicarea rândului principal. Varianta de overlay va avea logo deschis la culoare și text alb, fiind activată DOAR în starea de overlay. Varianta normală va fi ascunsă în overlay.
- **Performanță și UX:** Pentru a evita suprapunerea cu WordPress Admin Bar, se pot ajusta marginile/padding-ul sau se pot folosi setări specifice de breakpoint. Sticky header-ul ar trebui să aibă întotdeauna o culoare de fundal solidă setată pentru a preveni "bleeding-ul" conținutului paginii prin antet.
- **Semantică:** Chiar și la utilizarea unui `Div` custom pentru antet, este critică setarea tag-ului HTML la `header` și utilizarea `nav` pentru meniuri (Site Navigation element).

## 3. Indexul Analizei

| Fișier | Focus | Relație |
| :--- | :--- | :--- |
| `Oxygen_Basics_Creating_Headers...` | Fundamente & Div vs Builder | **Master Guide (2023)** |
| `How_to_Create_a_Transparent_Overlay...` | Page-specific Overlay | **Logic Design Guide** |
| `21_Oxygens_Header_Builder...` | Sticky & Multi-row | **Technical implementation** |
| `Oxygens_Powerful_Flexible...` | Overview & Workflow | **General Overview** |

---
**Standard Antigravity:** Utilizați **Header Builder** ca primă opțiune. Pentru overlay headers, configurați întotdeauna variante distincte de logo (light/dark) folosind rânduri duplicate cu vizibilitate condiționată pentru a asigura lizibilitatea pe orice fundal de hero section.
